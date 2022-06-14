
<header>
<?php 
    $utilisateur = "";
?>
        <nav>
            <?php
            if($utilisateur == ""){
                echo '<a href="login.php">Connectez-vous ici</a>';
            }
            else{
                echo "<h3> Utilisateur : ".$utilisateur."</h3>";
            }
            
            
            ?>
            <a href="index.php">Accueil</a>
           
           
           
            <img class="logo headLogo" src="img\MenuizMan_logo.png" alt="logo">
        </nav>
</header>