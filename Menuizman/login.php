<?php
session_start();
$host = "localhost";
$username = "root";
$password = "";
$database = "menuiz-jo";
$message = "";
try {
    $connect = new PDO("mysql:host=$host; dbname=$database", $username, $password);
    $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    if (isset($_POST["login"])) {
        if (empty($_POST["username"]) || empty($_POST["password"])) {
            $message = '<label>All fields are required</label>';
        } else {
            $query = "SELECT * FROM t_d_user_usr WHERE  USR_MAIL = :username AND USR_PASSWORD = sha1(:password)";
            $statement = $connect->prepare($query);
            $statement->execute(
                array(
                    'username'     =>     $_POST["username"],
                    'password'     =>     $_POST["password"],
                    // 'USR_FIRSTNAME'    =>     $_POST["firstname"],
                    // 'USR_LASTNAME'    =>     $_POST["lastname"]
                )
            );
            $users = $statement->fetchAll();

            $count = count($users);

            if ($count >= 1) {
                foreach ($users as $user) {


                    $_SESSION["name"] = $user['USR_FIRSTNAME'] . ' ' . $user['USR_LASTNAME'];
                    
                }
            
            header("location:index.php");
                
            } else {
                $message = '<label>Wrong Data</label>';
            }
        }
    }
} catch (PDOException $error) {
    $message = $error->getMessage();
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>MenuizMan - Login</title>
    </head>
        
    <body>
        <?php
            if (isset($message)) {
                echo '<label class="text-danger">' . $message . '</label>';
            }
        ?>

         <form method="post">
            <input type="text" class="LogEtPass" name="username" placeholder="Nom d'utilisateur">
            <input type="password" class="LogEtPass" name="password" placeholder="Mot de passe">
        
        

            <input type="submit" name="login" class="btn btn-primary" value="Login" />
        </form>
    </body>
</html>

