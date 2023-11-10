<?php
/** 
 * Classe d'accès aux données. 
 
 * Utilise les services de la classe PDO
 * pour l'application Mudry
 * Les attributs sont tous statiques,
 * les 4 premiers pour la connexion
 * $monPdo de type PDO 
 * $monPdoGsb qui contiendra l'unique instance de la classe
 *
*/

class PdoMudry
{   		
      	private static $serveur='mysql:host=localhost';
      	private static $bdd='dbname=murdy';   		
      	private static $user='root' ;    		
      	private static $mdp='' ;	
		private static $monPdo;
		private static $monPdoMudry = null;
/**
 * Constructeur privé, crée l'instance de PDO qui sera sollicitée
 * pour toutes les méthodes de la classe
 */				
	private function __construct()
	{
            PdoMudry::$monPdo = new PDO(PdoMudry::$serveur.';'.PdoMudry::$bdd, PdoMudry::$user, PdoMudry::$mdp); 
			PdoMudry::$monPdo->query("SET CHARACTER SET utf8");
	}
	public function _destruct(){
		PdoMudry::$monPdo = null;
	}

/**
 * Fonction statique qui crée l'unique instance de la classe
 *
 * Appel : $instancePdoMudry = PdoMudry::getPdoMudry();
 * @return l'unique objet de la classe PdoMudry
 */
	public static function getPdoMudry()
	{
		if(PdoMudry::$monPdoMudry == null)
		{
			PdoMudry::$monPdoMudry= new PdoMudry();
		}
		return PdoMudry::$monPdoMudry;  
	}

/**
 * Retourne tous les avions sous forme d'un tableau associatif
 *
 * @return le tableau associatif des avions
*/
    public function getLesAvions()
    {
        $req = "SELECT matricule, numSerie, codeInterne, avion.idModele, libelle, nbrSiegesMax FROM avion INNER JOIN modele ON modele.idModele = avion.idModele";
        $res = PdoMudry::$monPdo->query($req);
        $lesLignes = $res->fetchAll();
        return $lesLignes;
    }

/**
 * Retourne tous le personnels sous forme d'un tableau associatif
 *
 * @return le tableau associatif du personnels
*/
	public function getLePersonnels()
	{
		$req = "SELECT * FROM personnel";
		$res = PdoMudry::$monPdo->query($req);
		$lesLignes = $res->fetchAll();
		return $lesLignes;
	}

/**
 * Retourne tous les mouvements sous forme d'un tableau associatif
 *
 * @return le tableau associatif des mouvements
*/
	public function getLesMouvements()
	{
		$req = "SELECT * FROM mouvement";
		$res = PdoMudry::$monPdo->query($req);
		$lesLignes = $res->fetchAll();
		return $lesLignes;
	}

/**
 * Retourne tous les aéroports sous forme d'un tableau associatif
 *
 * @return le tableau associatif des aéroports
*/
	public function getLesAeroports()
	{
		$req = "SELECT * FROM aeroport";
		$res = PdoMudry::$monPdo->query($req);
		$lesLignes = $res->fetchAll();
		return $lesLignes;
	}




}




?>