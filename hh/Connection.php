<?php

    $con=mysqli_connect('localhost','root','','korisnici');

    if(!$con)
    {
        die(' Please Check Your Connection'.mysqli_error($con));
    }



?>