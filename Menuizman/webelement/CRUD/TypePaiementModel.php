<?php

class ModelePaiementType{ //changer nom modele

    private $idc;
    private function connexion() {

    $this->idc = new PDO("mysql:host=localhost;  dbname=menuiz-jo", 'root', '');
    }

    //C

    public function createPt($word){ // changer nom fonct et info
        $this -> connexion();
        $res = $this->idc->prepare("INSERT into t_d_paymenttype_pmt(PMT_WORDING) values(?)");
        $res -> execute($word);
    }


    //R

    public function readPtAll(){
        $this -> connexion();
        $res = $this->idc->prepare("SELECT * from t_d_paymenttype_pmt");
        $res -> execute();
        return $res;
    }


    //U

        public function UpdatePt($PtId, $word){
        $this -> connexion();
        $res = $this->idc->prepare("UPDATE t_d_paymenttype_pmt SET PMT_WORDING = ?  where PMT_ID = ".$PtId."");
        $res -> execute($word);
    }

    //D

    public function DeletePt($PtId){
        $this -> connexion();
        $res = $this->idc->prepare("DELETE t_d_paymenttype_pmt where PMT_ID = ".$PtId."");
        $res -> execute();
    }

}

?>