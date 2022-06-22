<?php

class ModeleExpedition{ //changer nom modele

    private $idc;
    private function connexion() {

    $this->idc = new PDO("mysql:host=localhost;  dbname=menuiz-jo", 'root', '');
    }

    //C

    public function createExp($weight, $tracking, $sentdate){ // changer nom fonct et info
        $this -> connexion();
        $res = $this->idc->prepare("INSERT into t_d_expedition_exp(EXP_WEIGHT, EXP_TRACKINGNUMBER, EXP_SENTDATE) values(?,?,?)");
        $res -> execute();
    }


    //R

    public function readExpAll(){
        $this -> connexion();
        $res = $this->idc->prepare("SELECT * from t_d_expedition_exp");
        $res -> execute();
        return $res;
    }


    //U

        public function UpdateExp($ExId, $weight, $tracking, $sentdate){
        $this -> connexion();
        $res = $this->idc->prepare("UPDATE t_d_expedition_exp SET EXP_WEIGHT = ?, EXP_TRACKINGNUMBER = ?, EXP_SENTDATE = ? where EXP_ID = ".$ExId."");
        $res -> execute($weight, $tracking, $sentdate);
    }

    //D

    public function DeleteExp($ExId){
        $this -> connexion();
        $res = $this->idc->prepare("DELETE t_d_expedition_exp where EXP_ID = ".$ExId."");
        $res -> execute();
    }

}

?>