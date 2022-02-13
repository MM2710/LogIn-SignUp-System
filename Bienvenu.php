 <?php
 session_start();
 //test d'authentification
 if($_SESSION['valider']!="oui"){
      header("Location:Login.php");
     
 }
 ?>
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenu-Liste des étudiants</title>
    <link rel="stylesheet" href="Bienvenu_style.css">
   
    
</head>

<body>
<header class="scroll">
     <h1> La liste des étudiants </h1>
     <a class="dcnx" href="includes/deconnexion.php"> Déconnexion </a>
     
</header>
    <?php 
    $server="localhost";
    $db_name="log in";
    $user="root";
    $password="";
    
    $cnx=mysqli_connect($server, $user, $password, $db_name) or die("Erreur de Connexion avec DB!!!");
    echo "<center>";
    echo "<table>";
    echo "<tr>". "<th>"."CNE". "</th>". "<th>"."Nom". "</th>"."<th>"."Prenom". "</th>".
   "<th>"."Email". "</th>"."<th>"."Photo". "</th>"."</tr>";
   $result=mysqli_query($cnx, "SELECT *FROM users");
    while( $tab=mysqli_fetch_assoc($result) ){
       
        echo "<tr>";
        echo "<td>". $tab['CNE']."</td>";
        echo "<td>". $tab['Nom']."</td>";
        echo "<td>". $tab['Prenom']."</td>";
        echo "<td>". $tab['Email']."</td>";
        echo "<td>"."<img src=".$tab['photo'].">"."</img>"."</td>";

        echo "</tr>";

    }
    echo "</table>";
    echo "</center>";
    ?>
</body>

<script>
    $(window).on("scroll", function(){
        if($(window).scrollTop()){
             $('header').addClass('scroll');
     }
        else {
             $('header').removeClass('scroll');
          }
    })


</script>
</html>