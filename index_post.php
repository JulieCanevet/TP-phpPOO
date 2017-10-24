<?php 
// class Ville {
//     public $_nom;
//     public $_departement;
    
//     public function __construct($nom, $departement){ // construction propriété du nouvel objet
//         $this -> _nom = $nom;
//         $this -> _departement = $departement;
//     }
//     public function description(){
//         echo 'la ville ' . $this -> _nom .' est dans le département ' . $this -> _departement;
//     }
// }

// $ville1 = new Ville ("Lille", (59));
// $ville1 -> description();
// $ville2 = new Ville ("Paris", 91);
// $ville2 -> description();

// class Personne {
//     private $_nom;
//     private $_prenom;
//     private $_adresse;

// // constructeur
//     public function __construct($nom, $prenom, $adresse){
//         $this -> _nom = $nom;
//         $this -> _prenom = $prenom;
//         $this -> _adresse = $adresse;
//     }
// // destructeur
//     public function __destruct(){
//         echo 'on a tout detruit';
//     }
// // getters
//     public function getPersonne(){
//         echo 'nom : ' . $this -> _nom . ' prenom : ' . $this -> _prenom . ' adresse : ' . $this -> _adresse;
//     }
// // setters 
//     public function setAdresse($nvlleAdresse){
//         $this -> _adresse = $nvlleAdresse;
//     }

// }

// $personne1 = new Personne("Canevet", "Julie", "lille");
// $personne1 -> setAdresse("Paris");
// $personne1 -> getPersonne();



// class Form {
//      private $_entete;
//      private $_text;
//      private $_submit;

//      public function __construct(){
//          $this -> _entete = '<form ><fieldset>';
//      }

//  // setters 
//      public function setText($text){
//       $this -> _text .= '<input type="text" value="' . $text . '"/>';
//      }

//      public function setSubmit(){
//          $this -> _submit = '<button type="submit">Envoyer</button>';
//      }

//      public function getText(){
//          return $this -> _text;
//      }
//      public function getForm(){
//          echo $this -> _entete . $this -> getText() . $this -> _submit . '</fieldset></form>';
//      }
//  }

// $form1 = new Form("index.php", "POST");
// $form1 -> setText('Ceci est un formulaire');
// $form1 -> setSubmit();
// $form1 -> getForm();

// $form2 = new Form;
// $form2 -> setText('Ceci est un deuxieme formulaire');
// $form2 -> setSubmit();
// $form2 -> getForm();

// $form3 = new Form;
// $form3 -> setText('troisieme entrée');
// $form3 -> setSubmit();
// $form3 -> getForm();


// class Form2 extends Form{
// 	public function __construct(){
// 		echo '<label>oui</label><input type="radio" name="x" value="" checked ><br><label>non</label><input type="radio" name="x" value=""><br>';

// 		echo '<INPUT type="checkbox" name="choix1" value="1"> a
// 			<INPUT type="checkbox" name="choix2" value="2"> b
// 			<INPUT type="checkbox" name="choix3" value="3"> c
// 			<INPUT type="checkbox" name="choix4" value="4"> d';
// 	}
// }
// $form4 = new Form2;

// ============== FIN DE L'EXERCICE 4 =================



// Jeu de combat
// class Personnage{
//     private $_id;
//     private $_name;
//     private $_damage = 0;

//     public function __construct(array $donnees){
//          $this->hydrate($donnees);
//     }

//     //setters
//     public function setId($id){
//         $id = (int) $id;
//         if ($id > 0){
//             $this-> _name = $name;
//         }
//     }
//     // setters name
//     public function setName($name){
//         if (is_string($name)){
//             $this-> _name = $name;
//         }
//     }
//     //setters
//      public function setDamage($damage){
//         $damage = (int) $damage;
        
//         if (0<$damage && $damage<100){
//             $this-> _damage = $damage;
//         }
//     }

//     // getters
//     public function getId(){
//         return $this-> _id;
//     }
//     //getters
//     public function getName(){
//         return $this-> _name;
//     }
//     //getters
//     public function getDamage(){
//         return $this-> _damage;
//     }
    

//     public function hydrate(array $donnees){
//         foreach ($donnees as $key => $value){
//             $method = 'set'.ucfirst($key);
//             if (method_exists($this, $method)){
//                 $this->$method($value);
//             }
//         }
//     }

//     // fight and causes damages
//     public function fight(Personnage $Perso){
//         $Perso -> _damage += 5;
//         if ($Perso -> _damage >= 100){
//             echo 'Le personnage a été tué';
//         }
//     }

//     // takes damages
//     public function beaten(){
//         $this -> _damage += 5;
//          if ($this -> _damage >= 100){
//             echo 'Votre personnage a été tué';
//         }
//         else {
//            echo 'Le personnage prend 5 points de dégat';
//         }
//     }
// }

// class PersonnageManager{
//     private $_bdd;

//     public function exists($name){
//     $req = $this->_bdd->prepare('SELECT * FROM person WHERE name = :name');
//     $req->execute(array(
//         'name' => $name
//     ));
//     return (bool) $req->fetchColumn();
//     if($req->fetchColumn()){
//         echo 'oui';
//     }
// }
//     public function addPerso(Personnage $Perso){
//         $req = $this -> _bdd -> prepare('INSERT INTO person (name) VALUES (:name)');
//         $req -> execute(array(
//             'name' => $Perso -> _name
//         ));
//         $perso->hydrate([
//           'id' => $this->_bdd->lastInsertId(),
//           'degats' => 0
//         ]);
//         }

//     public function deletePerso(Personnage $Perso){
//         $req = $this -> _bdd -> prepare('DELETE FROM person 
//             WHERE id = $perso-> _id');
//         $req -> execute(array(
//             'name' => $Perso -> _name
//         ));
//         $perso->hydrate([
//           'id' => $this->_bdd->lastInsertId(),
//           'degats' => 0
//         ]);
//         }

//     public function updatePerso(Personnage $perso){
//     $req = $this->_bdd->prepare('UPDATE person SET damages = :damages 
//         WHERE id = :id');
    
//     $req->bindValue(':damages', $perso->damages(), PDO::PARAM_INT);
//     $req->bindValue(':id', $perso->id(), PDO::PARAM_INT);
    
//     $req->execute();
//   }
// }
  
// abstract class Personne {
// 	protected $_nom;
// 	protected $_prenom;

// 	public function __construct($nom, $prenom){
// 		$this -> _nom = $nom;
// 		$this -> _prenom = $prenom;
// 	}
// }

// class Client extends Personne {
// 	protected $_adresse;

// 	public function setCoord($adresse) {
// 		$this -> _adresse = $adresse;
// 		echo $this -> _nom .' ' . $this -> _prenom . ' '. $this -> _adresse . '<br>';
// 	}
// }

// class Electeur extends Personne {
// 	protected $_bureau_de_vote;
// 	protected $_vote;

// 	public function avoter(){
// 		$this -> _vote = 'a voté';
// 		echo $this -> _nom . ' ' . $this -> _prenom . ' ' . $this -> _vote;
// 	}
// }

// $client1 = new Client('Canevet', 'Julie');
// $client1 -> setCoord('Lille');

// $electeur = new Electeur('Canevet', 'Julie');
// $electeur -> avoter();

// class Vehicule {
// 	protected $_immatriculation;
// 	protected $_couleur;

// 	public function __construct($immatriculation, $couleur){
// 		$this -> _immatriculation = $immatriculation;
// 		$this -> _couleur = $couleur;
// 	}
// }

// class Voiture extends Vehicule {
// 	protected $_nbPortes;

// 	public function setPortes($nbPortes){
// 		$this -> _nbPortes = $nbPortes;
// 	}

// 	public function getDef(){
// 		echo 'immatriculation : ' . $this -> _immatriculation . ', couleur : ' . $this -> _couleur . ', ' . $this -> _nbPortes .' portes <br>';
// 	}
// }

// class Bus extends Vehicule {
// 	protected $_nbEtage;

// 	public function setEtage($nbEtage){
// 		$this -> _nbEtage = $nbEtage;
// 	}
// 	public function getDef(){
// 		echo 'immatriculation : ' . $this -> _immatriculation . ', couleur : ' . $this -> _couleur . ', ' . $this -> _nbEtage . ' étages <br>';
// 	}
// }

// $voiture = new Voiture(12, 'rouge');
// $voiture -> setPortes(5);
// $voiture -> getDef();

// $bus = new Bus(14, 'blanc');
// $bus -> setEtage(3);
// $bus -> getDef();

abstract class Personnage{
	protected $_id;
	protected $_nom;
	protected $_atout =4;
	protected $_degats = 0;
	protected $_type;
	
	public function __construct($nom, $type){
		$this -> _nom = $nom;
		$this -> _type =$type;
		echo $this -> _nom . ' ' . $this -> _type;
	}

}

class Magicien extends Personnage {
	public function lancerUnSort($adversaire){
	if(isset($_POST['sortilege'])){	
			$adversaire -> _tpsEndormi = $this -> _atout * 6;
		}
	}
}

class Guerrier extends Personnage{
	protected $_tpsEndormi;


}

 if((isset($_POST['envoi'])) && isset($_POST['type'])){
 	if($_POST['type'] == 'magicien'){
	$mage = new Magicien($_POST['nom'], $_POST['type']);
	}
	else {
	$guerre = new Guerrier($_POST['nom'], $_POST['type']);
	}
}


















