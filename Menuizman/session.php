<?php
 
session_start();
if ($_SESSION["connecter"] != "yes") {
header("location:webelement/login-out/login.php");
exit();
}
if (date("H") < 18)
$bienvenue = "Bonjour et bienvenue "  .
$_SESSION["prenom_nom"];
else
$bienvenue = "Bonsoir et bienvenue "  .
$_SESSION["prenom_nom"];
?>
 
<!DOCTYPE  html>
<html>
<head>
<meta  charset="utf-8"  />
<title>MenuizMan - Acceuil</title>
<link rel="stylesheet" href="CSS/style.css">
<style>
* {
font-family: arial;
}
h2 {
text-align: center;
color: pink;
}
a {
color: blue;
text-decoration: none;
float: right;
}
a:hover {
text-decoration: underline;
}
 
</style>
</head>
<body>
<?php include "webelement/include/header.php";?>
<h2 class="bienvenue"><?php  echo  $bienvenue  ?></h2>

<?php

include 'webelement/include/produits.php'

//  $mysqlConnection = new PDO('mysql:host=localhost;dbname=menuiz-jo;charset=utf8', 'root', '');
//  $produitStatement = $mysqlConnection->prepare('SELECT * FROM T_D_PRODUCT_PRD');

//  $produitStatement->execute();
//  $produits = $produitStatement->fetchAll();
// echo '<main>';
//  echo '<div id="product-box" class="box-container">';
//     echo '<h1 class="title"> Nos produits : </h1>';

// /* Création d'un formulaire pour chaque produit de la base de données. */

// foreach ($produits as $produit) {
            
//             echo '<a href="produit.php?IdProduit='.$produit['PRD_ID'].'" id="card-'.$produit['PRD_ID'].'" class="card-produit card-'.$produit['PRD_ID'].'">';
//                 echo '<img src="data:image/jpeg;base64,'.base64_encode($produit['PRD_PICTURE']).'" alt="Produit : ID = '.$produit['PRD_ID'].'"/>';
//                 echo '<div id="product-'.$produit['PRD_ID'].'" class="container-product">';
//                     echo '<h3 class="card-title">'. $produit['PRD_DESCRIPTION'].' </h3>';
//                     echo '<p class="prix">'.$produit['PRD_PRICE'].'€</p>';
//                     echo '</div>';
//             echo '</a>';
//     }
//     echo '</div>';
//     echo '</main>';
    ?>
</body>
</html>