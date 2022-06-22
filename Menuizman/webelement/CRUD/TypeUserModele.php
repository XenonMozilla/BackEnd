<?php

class ModeleTypeUser{ //changer nom modele

    private $idc;
    private function connexion() {

    $this->idc = new PDO("mysql:host=localhost;  dbname=menuiz-jo", 'root', '');
    }

    //C

    public function createTu(){ // changer nom fonct et info
        $this -> connexion($Type);
        $res = $this->idc->prepare("INSERT into t_d_usertype_uty(UTY_TYPE) values(?)");
        $res -> execute($Type);
    }


    //R

    public function readTuAll(){
        $this -> connexion();
        $res = $this->idc->prepare("SELECT * from t_d_usertype_uty");
        $res -> execute();
        return $res;
    }


    //U

        public function UpdateTu($UtId, $Type){
        $this -> connexion();
        $res = $this->idc->prepare("UPDATE t_d_usertype_uty SET UTY_TYPE = ? where UTY_ID = ".$UtId."");
        $res -> execute($Type);
    }

    //D

    public function DeleteTu(){
        $this -> connexion($UtId);
        $res = $this->idc->prepare("DELETE t_d_usertype_uty where UTY_ID = ".$UtId."");
        $res -> execute();
    }

}

?>