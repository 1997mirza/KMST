<?php 
require_once('connection.php');
session_start();
    if(isset($_POST['Login']))
    {
       if(empty($_POST['UName']) || empty($_POST['Password']))
       {
            header("location:index.php?Empty= Popunite sva polja");
       }
       else
       {
             $sql="select * from korisnik where ime='".$_POST['UName']."' and password='".$_POST['Password']."'";

            $query = mysqli_query($con,$sql);
            $result = mysqli_fetch_all($query,MYSQLI_ASSOC);

            foreach ($result as $row) {
            $varijabla = $row[ime];
            $varijabla1 = "horman";
            session_start();
            $_SESSION["ime"] = $varijabla;
             $_SESSION["prezime"] = $varijabla1;
            }

          


            if($varijabla)
            {
                $_SESSION['User']=$varijabla;
                header("location:profil.php");
            }
            else
            {
                header("location:index.php?Invalid= Lozinka je pogrešna, pokušajte ponovo");
            }
       }
    }
    else
    {
        echo 'Kontaktirajte administratora';
    }

?>