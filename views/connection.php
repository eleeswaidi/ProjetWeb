<?php


session_start();


$bdd = new PDO('mysql:host=127.0.0.1;dbname=projet', 'root', '');

if(isset($_POST['connecter'])) {
   $login = $_POST['login'];
   $password = $_POST['mdp'];
   $_SESSION["log"] = $login;
$_SESSION["psw"] = $password;
   if(!empty($login) AND !empty($password))

{
      $requser = $bdd->prepare("SELECT * FROM client WHERE login ='$login' and mdp ='$password' ");
      $requser->execute();
      $userexist = $requser->rowCount();

      if($userexist == 1)

      {

        $row=$requser->fetchAll();
        $_SESSION["cin"]=$row["0"]["cin"];
        $_SESSION["nm"]=$row["0"]["nom"];
        $_SESSION["pr"]=$row["0"]["prenom"];
        $_SESSION["tel"]=$row["0"]["tel"];
        echo   $_SESSION["nm"],$_SESSION["cin"];
         $userinfo = $requser->fetch();

         $_SESSION['login'] = $userinfo['login'];
        //$_SESSION['nom'] = $userinfo['nom'];
header("Location: divisima/index.php");
          }
         else {

              // session_destroy();
                    //echo "<script type='text/javascript'>alert('incorrecte ');
echo "hiiii";
//</script>";
  }






}

}

?>
