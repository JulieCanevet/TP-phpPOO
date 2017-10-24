<?php
//require 'index_vue.php';
//require 'index_post.php';

//function chargerClasse($index)
//{
  //require $index.'.php';
//}

//spl_autoload_register('chargerClasse');
//$bdd = new PDO('mysql:host=localhost;dbname=fight', 'root', 'root');
//$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING); // On émet une alerte à chaque fois qu'une requête a échoué.

//$manager = new PersonnageManager($bdd);

//if (isset($_POST['creer']) && isset($_POST['name'])){ // Si on a voulu créer un personnage.
//	$perso = new Personnage(['name' => $_POST['name']]); // On crée un nouveau personnage.
//}

// class Clio {
// 	protected $_nbPortes;
// 	protected $_couleur;
// 	protected $_prixNeuve;

// 	public function __construct ($choixNbPortes, $choixCouleur){
// 		$this -> setNbPortes($choixNbPortes);
// 		$this -> setCouleur($choixCouleur);
// 		$this -> _prixNeuve = 1300;		
// 	}

// 	public function setCouleur($choixCouleur){
// 		if(in_array($choixCouleur, self::COULEUR, TRUE)){
// 			$this -> _couleur = $choixCouleur;
// 		}
// 		else{
// 			echo 'argument inconnu';
// 		}
// 	}
// 	public function setNbPortes($choixNbPortes){
// 		if(in_array($choixNbPortes, self::PORTES, TRUE)){
// 			$this -> _nbPortes = $choixNbPortes ;
// 		}
// 		else {
// 			echo 'argument inconnu';
// 		}
// 	}
// Constantes du nombre de portes
	// const PORTES = array(
	// 	'TROISPORTES' => 3,
	// 	'CINQPORTES' => 5
	// );

// Constantes des couleurs 
// 	const COULEUR = array (
// 		'BLEUE' => 1,
// 		'BLANCHE' => 2,
// 		'ROUGE' => 3,
// 		'VERT' => 4,
// 		'NOIRE' => 5,
// 		'GRISE' => 6
// 	);

// 	public function afficheDescription(){
// 		echo $this -> _nbPortes . ' portes. Référence couleur : ' .  $this -> _couleur . '<br>';
// 	}
// }

// $clio1 = new Clio(Clio::PORTES['TROISPORTES'], Clio::COULEUR['BLEUE']);
// $clio1 -> afficheDescription();

// $clio2 = new Clio(Clio::PORTES['CINQPORTES'], Clio::COULEUR['ROUGE']);
// $clio2 -> afficheDescription();

// $clio3 = new Clio(Clio::PORTES['CINQPORTES'], Clio::COULEUR['VERT']);
// $clio3 -> afficheDescription();


// require 'chat.php';
// require 'chatManager.php';
// require 'chat_view.php';
// $_bdd = new PDO('mysql:host=localhost;dbname=Chat;charset=utf8', 'root', 'root');

// if(isset ($_POST['envoye'])){
// 	$chatonA = new Chat($_POST['nom'], $_POST['age'], $_POST['sexe'], $_POST['couleur']);
// 	$chatonA -> quelChat();

// 	$chatManager = new ChatManager($_bdd);
// 	$chatManager -> add($chatonA);
// 	$chatManager -> liste();

// }

require 'index_post.php';
require 'index_vue.php';



















