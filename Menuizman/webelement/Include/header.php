
<header>
        <nav>
            <a href="../../session.php">Accueil</a>
            <?php
            $nmbrElem = count($_SESSION['panier']['libelleProduit']);
            echo '<a href="../../Panier.php"> Panier ('.$nmbrElem.' article) </a>';
            ?>
            
            
            
            
           
           
           
            <img class="logo headLogo" src="../../img\MenuizMan_logo.png" alt="logo">
            <a href="webelement/login-out/logout.php">Se déconnecter</a>
        </nav>
</header>