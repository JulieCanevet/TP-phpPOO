<?php

class ChatManager{
	private $_bdd;

	public function __construct($bdd){
		$this -> _bdd = $bdd;
	}

  	public function add(Chat $chaton){
	    $req = $this -> _bdd ->prepare('INSERT INTO chat (Nom, Age, Sexe, Couleur) VALUES(:nom, :age, :sexe, :couleur)');
	    $req -> execute(array(
	    'nom' => $chaton -> getNom(),
	    'age' => $chaton -> getAge(),
	    'sexe' => $chaton -> getSexe(),
	    'couleur' => $chaton -> getCouleur()
	    ));
	}

	public function liste(){
		$q = $this -> _bdd -> query('SELECT * FROM chat');
		foreach ($q as $key => $value) {
			echo $value['Nom'] . '<br>';
		}
	}
}