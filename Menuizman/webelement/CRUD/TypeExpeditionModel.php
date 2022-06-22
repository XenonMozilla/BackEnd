<?php

class ModeleTypeExpedition{ //changer nom modele

    private $idc;
    private function connexion() {

    $this->idc = new PDO("mysql:host=localhost;  dbname=menuiz-jo", 'root', '');
    }

    //C

    public function createTe(){ // changer nom fonct et info
        $this -> connexion();
        $res = $this->idc->prepare("INSERT into t_d_expeditiontype_ety(ETY_WORDING) values(?)");
        $res -> execute();
    }


    //R

    public function readTeAll(){
        $this -> connexion();
        $res = $this->idc->prepare("SELECT * from t_d_expeditiontype_ety");
        $res -> execute();
        return $res;
    }


    //U

        public function UpdateTe($TeId, $word){
        $this -> connexion();
        $res = $this->idc->prepare("UPDATE t_d_expeditiontype_ety SET ETY_WORDING = ? where ETY_ID = ".$TeId."");
        $res -> execute($word);
    }

    //D

    public function DeleteTe($TeId){
        $this -> connexion();
        $res = $this->idc->prepare("DELETE t_d_expeditiontype_ety where ETY_ID = ".$TeId."");
        $res -> execute();
    }

}

?>