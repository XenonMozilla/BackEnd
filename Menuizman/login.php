<head>
    <title>MenuizMan - Login</title>
</head>
        
<body>

    <?php
        if(isset($_GET['result'])  ){
            if($_GET['result'] == 'vide'){
                echo '<p>Il faut un pseudo et un mot de pass pour vous connecter</p>';
            }
            
        }
    ?>

    <form action="reponse.php" method="get">
        <input type="text" class="LogEtPass" name="username" placeholder="Nom d'utilisateur">
        <input type="password" class="LogEtPass" name="password" placeholder="Mot de passe">
        
        
        <button type="submit" class="btn btn-primary">Envoyer</button>

    </form>
    <a href="index.php">revenir a l'index</a>
</body>