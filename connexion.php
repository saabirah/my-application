<?php
try{
    $db=new PDO ('mysql:host=localhost; dbname=my_application_simplon','root','');
} catch(Exception $e) {
    die('Erreur: '.$e-> getMessage());
}
if (extension_loaded('PDO')){
 }
?>