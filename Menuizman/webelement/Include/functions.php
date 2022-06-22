<?php

class ModeleProduct {
private $idc;
private function connexion() {

$this->idc = new PDO("mysql:host=localhost;  dbname=menuiz-jo", 'root', '');
}


//Fonction pour creer de nouveau article
public function createPrd(){ 
    $this -> connexion($spl, $pty, $desc, $guaran, $pic, $price, $def);
    $res = $this->idc->prepare("INSERT into t_d_product_prd (SPL_ID, PTY_ID, PRD_DESCRIPTION ,PRD_GUARANTEE, PRD_PICTURE, PRD_PRICE, PRD_DEFINITION) values(?,?,?,?,?,?,?)");
    $res -> execute(array($spl, $pty, $desc, $guaran, $pic, $price, $def));
}


//Fonction pour afficher tous les produits
public function lireProduits() {
$this->connexion();
$res = $this->idc->prepare("SELECT * FROM T_D_product_PRD");
$res->execute();  
return $res;
}

//Fonction pour afficher les produits basés sur une recherche
public function RechercheProduits($recherche) {
$this->connexion();
$res = $this->idc->prepare("SELECT * FROM T_D_Product_PRD where PRD_DESCRIPTION like '%".$recherche."%'");
$res->execute();  
return $res;
}

//Fonction pour afficher un produit par rapport à son identifiant
public function RecupProduit($id) {
$this->connexion();
$res = $this->idc->prepare("SELECT * FROM T_D_Product_PRD where PRD_ID= ".$id."");
$res->execute();  
return $res;
}

public function UpdatePrd($prdId ,$spl, $pty, $desc, $guaran, $pic, $price, $def){
    $this -> connexion();
    $res = $this->idc->prepare("UPDATE t_d_Product_PRD SET SPL_ID = ?, PTY_ID = ?, PRD_DESCRIPTION = ?, PRD_GUARANTEE = ?, PRD_PICTURE = ?, PRD_PRICE = ?, PRD_DEFINITION = ? where PRD_ID = ".$prdId."");
    $res -> execute($spl, $pty, $desc, $guaran, $pic, $price, $def);
}

public function DeletePrd($prdId){
    $this -> connexion();
    $res = $this->idc->prepare("DELETE t_d_Product_PRD where PRD_ID = ".$prdId."");
    $res -> execute();
}

}

?> 
