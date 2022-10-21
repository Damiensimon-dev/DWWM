<?php



class Mytable{
    const USER = "root";
    const PASSWD = "";
    const SERVER = "localhost";
    const BASE = "entrainement";
    private $nameCol = array();
    private $stmt;
    private $donneesCols = array();



    public function __construct(string $_table){
    
    $dsn = "mysql:dbname=".self::BASE.";host=".self::SERVER;

    try {

        $connnexion = new PDO($dsn,self::USER,self::PASSWD);
        $sql="SELECT * from ".$_table;
        $this->stmt = $connnexion->query($sql);
       // var_dump($stmt->fetchAll());

    } catch (PDOException $e) {

        printf("Échec de la connexion : %s\n", $e->getMessage());
        exit();

    }
}

    public function getStmt(){
        return $this->stmt;
    }

    public function recupererNomCol(){
        
        for ($i=0; $i <$this->stmt->columnCount(); $i++) { 
            $tabInfo = $this->stmt->getColumnMeta($i);
            // echo "nomCol : ".$tabInfo["name"]."<br>";
            $this->nameCol[$i] = $tabInfo['name'];
        }
        
        return $this->nameCol;
    }



    public function recupererDonnees(){

        $this->donneesCols= $this->stmt->fetchAll(PDO::FETCH_NUM);
        
        return $this->donneesCols;
        
    }

    public function recupById(){

    }

    

}




?>