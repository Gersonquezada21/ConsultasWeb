<?php   
$hostname = "34.139.80.38";
$dbname = "BD_CONSULTAS";
$username = "app_contweb";
$pw = 'YhQBBH5hXk';
$dbh = new PDO ("sqlsrv:Server=$hostname;Database=$dbname","$username","$pw");
    if($dbh){
        echo "Conectado";
    }else{
        echo "No conectado";
    }        
return($dbh);
