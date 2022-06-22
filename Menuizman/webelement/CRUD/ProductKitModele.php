<?php

class ModeleKit{ //changer nom modele

    private $idc;
    private function connexion() {

    $this->idc = new PDO("mysql:host=localhost;  dbname=menuiz-jo", 'root', '');
    }

    //C

    public function createKit($comp, $quant){ // changer nom fonct et info
        $this -> connexion();
        $res = $this->idc->prepare("INSERT into t_d_productkit_kit(PRD_ID_COMPONENT, KIT_QUANTITY) values(?,?)");
        $res -> execute($comp, $quant);
    }


    //R

    public function readKitAll(){
        $this -> connexion();
        $res = $this->idc->prepare("SELECT* from t_d_productkit_kit");
        $res -> execute();
        return $res;
    }


    //U

        public function UpdateKit($KitId, $comp, $quant){
        $this -> connexion();
        $res = $this->idc->prepare("UPDATE t_d_productkit_kit SET PRD_ID_COMPONENT = ?, KIT_QUANTITY = ? where PRD_KIT_ID = ".$KitId."");
        $res -> execute($comp, $quant);
    }

    //D

    public function DeleteKit($KitId){
        $this -> connexion();
        $res = $this->idc->prepare("DELETE t_d_productkit_kit where PRD_KIT_ID = ".$KitId."");
        $res -> execute();
    }
}
?>