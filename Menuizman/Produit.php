

<head>
    <title>MenuizMan - </title>
    <link rel="stylesheet" href="CSS/style.css">
</head>

<?php
session_start();
 include("webelement/include/connexion.php");
 if(isset($_GET['IdProduit']))
{
    $leProduct = $pdo->prepare("select * from t_d_product_prd WHERE PRD_ID=".$_GET['IdProduit']);
    $leProduct -> execute();

    $contentProduct = $leProduct -> fetchAll();
} 

?>
<body>
    <?php 
        include "webelement/include/header.php";

        echo '<h1>'.$contentProduct[0]['PRD_DESCRIPTION'].'</h1>';
        echo '<img src="data:image/jpeg;base64,'.base64_encode($contentProduct[0]['PRD_PICTURE']).'"/>';
        echo '<p>'.$contentProduct[0]['PRD_DEFINITION'].'</p>';
        include "webelement/include/footer.php";
    ?>
</body>
