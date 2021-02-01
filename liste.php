<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="font/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="styles/style.css">
</head>
<body>
<?php
require_once 'connexion.php';
?>
<?php include ('header.php ');?>

<div class="row py-2 d-flex justify-content-center">
  <h1 class=" h1 col-lg-8 offset- mt-5 mb-3 mr-0 ml-0 d-flex justify-content-around">LISTES DES APPRENANTS SIMPLON</h1>
  <span ><a href="apprenant.php"><button type="button" class="btn btn-outline-warning ml-2">Retour</button></a></span>
</div> <p class='  text-center'>

<table class="table col-lg-8 col-sm-12 col-md-12 offset-2 my-5">

 
  <thead>
    <tr>
      <th scope="col">EMAIL</th>
      <th scope="col">NOM</th>
      <th scope="col">PRENOM</th>
      <th scope="col">NAISSANCE</th>
      <th scope="col">FORMATION</th>
    </tr>
  </thead>
  <tbody>
    <tr>
    <?php
        try{
            $afficher=$db->query('SELECT*FROM monprojet order by EMAIL ASC');
            while($reccuperation=$afficher ->fetch()){
                echo "<tr>";
                echo "<td>" .$reccuperation['EMAIL']."</td>";
                echo "<td>" .$reccuperation['NOM']."</td>";
                echo "<td>" .$reccuperation['PRENOM']."</td>";
                echo "<td>" .$reccuperation['DATE']."</td>";
                echo "<td>" .$reccuperation['FORMATION']."</td>";
                echo "<tr>";
            }
            $afficher->closecursor();
        }
        catch(PDOException $e){
            print "erreur !:" . $e->getMessage() . "</br>";
            die();}
    
    ?>
        
    </tr>
        </table>
   
    <a href="apprenant.php"><p class='text-center'><button type="button" class="btn btn-outline-warning">Retour</button></p></a>
    <?php include ('footer.php');?>
 <style>
        td{
            color:black;
            border:1px black;*/
            
        }
    
    table {
background-color: rgb(255, 255, 255);
  margin-top: 40px;
  margin: 15px 15px 15px 15px;
 border: 3px solid rgb(240, 95, 95);
 box-shadow: 0 0 50px 0 rgba(240, 57, 57, 0.2), 0 5px 100px 0 rgba(206, 10, 10, 0.24);
 font-family: 'Times New Roman', Times, serif;
}
    </style>
</body>
</html>