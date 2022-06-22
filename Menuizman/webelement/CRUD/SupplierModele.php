<?php

class Modele{ //changer nom modele

    private $idc;
    private function connexion() {

    $this->idc = new PDO("mysql:host=localhost;  dbname=menuiz-jo", 'root', '');
    }

    //C

    public function createSpl($Supl){ // changer nom fonct et info
        $this -> connexion();
        $res = $this->idc->prepare("INSERT into t_d_supplier_spl(SPL_NAME) values(?)");
        $res -> execute($Supl);
    }


    //R

    public function readSplAll(){
        $this -> connexion();
        $res = $this->idc->prepare("SELECT * from t_d_supplier_spl");
        $res -> execute();
        return $res;
    }


    //U

        public function UpdateSpl(){
        $this -> connexion($SupId, $Supl);
        $res = $this->idc->prepare("UPDATE t_d_supplier_spl SET SPL_NAME = ? where SPL_ID = ".$SupId."");
        $res -> execute($Supl);
    }

    //D

    public function DeleteSpl($SupId){
        $this -> connexion();
        $res = $this->idc->prepare("DELETE t_d_supplier_spl where SPL_ID = ".$SupId."");
        $res -> execute();
    }

}

?>