<?php 
session_start();

if(@$_SESSION['clickLogin']=="oui" && @$_SESSION['cnx']="pas de connexion"){
  
   //@$message="Mauvais LogIn ou Mot de passe"."<br>";
   ?>
  <script>
  window.alert("Erreur de connexion: Mauvais Login ou Mot de passe");
  </script>
  <?php
  
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home-LogIn</title>
    <link rel="stylesheet" href="login_style.css">
</head>

<body>
    
    <center>
     <form action="includes/authentification.php" method="post">
       <table>
            <tr>
              <th id="authentification" colspan=2>Veuillez-vous authentifier:</th>
           </tr>
           <tr>
              <th><input type="text" name="prenom" placeholder="Entrer votre Prénom"></th>
           </tr>
           <tr>
              <th><input type="text" name="nom" placeholder="Entrer votre Nom"></th>
           </tr>
          
           <tr>
               <th ><input type="password" name="mp" placeholder="Mot de passe"></th>
           </tr>
           <tr>
              <th id="submit" colspan=2><input type="submit" name="Login" value="Entrer"></th>
              <!--<p><?php echo @$message ?></p>-->
           </tr>
           <tr><th id="signup" colspan=2>Vous n'avez pas de compte? <a href="sign up.php">Créer un compte</a></th></tr>
       </table>
    </form>
</center> 
 <?php session_destroy(); ?>
</body>
</html>