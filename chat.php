<?php
class Chat {
	protected $_nom;
	protected $_age;
	protected $_sexe;
	protected $_couleur;

	public function __construct($nom, $age, $sexe, $couleur){ // constructeur
		$this -> setNom($nom);
		$this -> setAge($age); 
		$this -> setSexe($sexe);
		$this -> setCouleur($couleur);
	}

	const SEXE = array( // Valeurs possibles pour sexe
		'MALE' => 'male',
		'FEMELLE' => 'femelle'
	);

	const COULEUR = array ( // Valeurs possibles pour couleur
		'NOIR' => 'noir',
		'BLANC' => 'blanc',
		'ROUX' => 'roux',
		'TIGRE' => 'tigre'
	);

	// LISTE DES GETTERS 
  	public function getNom() { return $this-> _nom;}
  	public function getAge() { return $this-> _age;}
  	public function getSexe() { return $this-> _sexe;}
  	public function getCouleur() { return $this-> _couleur;}
	
	// LISTE DES SETTERS
	public function setNom($nom){ // Verification nom
		if (is_string($nom)){
			if (strlen($nom)>15){
				echo 'le nom est trop long pour un petit chaton';
			}
			else {
				$this -> _nom = $nom;
			}
		}
		else {
			echo 'Le nom doit être une chaine de caractere';
		}
	}

	public function setAge($age){
			if($age>0 && $age<30){
				$this -> _age = intval($age);
			}
			else{
				$this -> _age = "trop d'années pour être vivant";
			}
	}

	public function setSexe($sexe){
 		if(in_array($sexe, self::SEXE, TRUE)){
 			$this -> _sexe = $sexe ;
 		}
 		else {
 			echo 'sexe inconnu';
 		}
 	}

	public function setCouleur($couleur){
 		if(in_array($couleur, self::COULEUR, TRUE)){
 			$this -> _couleur = $couleur ;
 		}
 		else {
 			echo 'argument inconnu';
 		}
 	}

	public function quelChat(){
		echo 'Ce chat s\'appelle ' . $this -> _nom . ' il a ' . $this -> _age . ' ans, c\'est un ' . $this -> _sexe . ' il est ' . $this -> _couleur . '<br>';
	}
}