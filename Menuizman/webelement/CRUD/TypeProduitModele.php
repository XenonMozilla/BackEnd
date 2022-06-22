<?php

class ModeleTypeProduit{ //changer nom modele

    private $idc;
    private function connexion() {

    $this->idc = new PDO("mysql:host=localhost;  dbname=menuiz-jo", 'root', '');
    }

    //C

    public function createTp($desc){ // changer nom fonct et info
        $this -> connexion();
        $res = $this->idc->prepare("INSERT into t_d_producttype_pty(PTY_DESCRIPTION) values(?)");
        $res -> execute($desc);
    }


    //R

    public function readTpAll(){
        $this -> connexion();
        $res = $this->idc->prepare("SELECT * from t_d_producttype_pty");
        $res -> execute();
        return $res;
    }


    //U

        public function UpdateTp($TpId, $desc){
        $this -> connexion();
        $res = $this->idc->prepare("UPDATE t_d_producttype_pty SET PTY_DESCRIPTION = ? where PTY_ID = ".$TpId."");
        $res -> execute($desc);
    }

    //D

    public function DeleteTp($TpId){
        $this -> connexion();
        $res = $this->idc->prepare("DELETE t_d_producttype_pty where PTY_ID = ".$TpId."");
        $res -> execute();
    }

}

?>