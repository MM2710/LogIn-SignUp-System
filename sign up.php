<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign UP</title>
    <link rel="stylesheet"  href="signup_style.css" >
</head>
<body>
    <?php 
    if(isset($_POST['signup'])){
    include_once("includes/connexion.php");
    @$CNE=$_POST['CNE'];
    @$Nom=$_POST['Nom'];
    @$Prenom=$_POST['Prenom'];
    @$Email=$_POST['Email'];
    @$pass=$_POST['pass'];
    @$photo=$_FILES['photo'];
    $sql="INSERT INTO users(CNE,Nom,Prenom,Email,pass,photo) VALUES
    ($CNE,'$Nom','$Prenom', '$Email', '$pass','$photo')";
    
    $result=mysqli_query($cnx, $sql); 
   
    header("Location:http://localhost/Login_Signup/Login.php"); 
    
    }
   

    ?>
    <center>
        <form action="" method="post" enctype="multipart/form-data">
            <table>
                <tr><th><h1>Créer un compte</h1></th></tr><br>
                <tr><th><input type="number"  name="CNE" placeholder="Entrer votre CNE"> <br></th></tr>
                <tr><th><input type="text" name="Nom" placeholder="Entrer votre Nom"> <br></th></tr> 
                <tr><th> <input type="text" name="Prenom" placeholder="Entrer votre Prenom"> <br></th></tr>
                <tr><th><input type="text" name="Email" placeholder="Entrer votre Email"> <br></th></tr>
                <tr><th><input type="password" name="pass" placeholder="Entrer votre Mot de passe"> <br></th></tr>
                <tr><th>Enter votre photo:<input type="file" name="photo"><br></th></tr>
                <tr><th> <input type="submit" name="signup" value="Sign UP"> 
                Vous avez déjà un compte?<a href="http://localhost/Login_Signup/Login.php">Log In</a></th></tr>



            </table>
        </form>
    </center>
</body>
</html>