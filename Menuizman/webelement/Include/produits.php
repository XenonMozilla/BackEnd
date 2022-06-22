<?php
include "functions.php";
$produitModel=new ModeleProduct(0);
$produitStatement=$produitModel->lireProduits();
$produits = $produitStatement->fetchAll();

echo '<div id="product-box" class="box-container">';
// On affiche chaque produit un à un
foreach ($produits as $produit) {
     

// echo "<p> ". $produit['PRD_DESCRIPTION']." </p>";



    echo '<div id="card-'.$produit['PRD_ID'].'" class="card-produit card-'.$produit['PRD_ID'].'">';
    echo '<div name ="idProduit" id="produit'.$produit['PRD_ID'].'" class="produits">';
    echo '<div class ="container-image">';
    echo '<form action="page_produit.php" method="GET">';
    echo '<a href="page_produit.php?idProduit='.$produit['PRD_ID'].'"><img src="data:image/jpeg;base64,'.base64_encode($produit['PRD_PICTURE']).'" alt="Produit : ID = '.$produit['PRD_ID'].'"/>';
    
    echo '<p class="titre">'.$produit['PRD_DESCRIPTION'].'</p>';
    echo '<p class="prix">'.$produit['PRD_PRICE'].' </p>';
    echo '</a></div> ';
    echo '</div>';
    echo '</div>';
    echo '</form>';
}
    echo '</div>';
