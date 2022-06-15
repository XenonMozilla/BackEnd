
<header>
<?php 
  session_start();

echo '<H1>Bienvenue ' . $_SESSION["name"] . ' !</H1>';
              echo '<a href="logout.php">Se déconnecter</a>'; ?>
        <nav>
        
            <a href="index.php">Accueil</a>
           
           
           
            <img class="logo headLogo" src="img\MenuizMan_logo.png" alt="logo">
        </nav>
</header>