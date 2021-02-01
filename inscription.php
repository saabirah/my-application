<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>connexion</title>
  <link rel="stylesheet" href="styles/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="font/fontawesome/css/all.min.css">
  <link rel="stylesheet" href="styles/style.css">
  
</head>

<body>
  <header>
<?php include("header.php") ?>
  </header>
  <div class="container-fluid pl-0 ml-0">
      <div class=" my-1 mx-0 row">
             <!-- zone d'inscription administrateur -->
        <div  class="col-3  "></div>
        <div class=" border  my-5 col-lg-6 col-md-12 col-sm-12 col-xd-12  bg-white  p-2">
      
          <form class=" p-0  " action="traitement1.php" method="post">
            <div class=" p-0 d-flex flex-columns" >
            <div id="boder" class="   col-4">
                <h5 class=" py-3 px-0 mx-0 bg-grey text-center mt-2 ">Créer un compte admin</h5>
                <img  class=" mt-5  pt-5 bg-info2 "src="images/user.PNG" alt="">
            </div>
            
              <table class="mt-5 m-2 col-8 " id="table2">
                <tr class="P-2">
                  <td><label for="colFormLabelLg" class="ml-3">Nom:</label>  </td>
                  <td><input type="text" name="Nom" class=" my-3 form-control form-control-lg" id="colFormLabelLg1" required> </td>
                </tr>
                <tr class="">
                  <td> <label for="colFormLabelLg" class="ml-3 ">Prenom(s):</label></td>
                  <td> <input type="text" name="Prenom" class=" my-3 form-control form-control-lg border" id="colFormLabelLg1" required></td>
                </tr>
                  <tr class="">
                  <td> <label for="colFormLabelLg" class="ml-3">Email:</label></td>
                  <td><input type="text" name="EMAIL" class="my-3 form-control form-control-lg" id="colFormLabelLg1" required></td>
                </tr>
                  <tr class="">
                  <td> <label for="colFormLabelLg" class="ml-3 ">Nom d'utilisateur</label></td>
                  <td> <input type="text" name="User" class="my-3 form-control form-control-lg border" id="colFormLabelLg1" required>     </td>
                </tr>
                <tr class="">
                  <td> <label for="colFormLabelLg" class="ml-3 ">Mot de passe</label></td>
                  <td> <input type="password" name="password" class=" my-3 form-control form-control-lg border" id="colFormLabelLg1" required></td>
                </tr>
                <tr class=" ">
                  <td></td>
                  <td class="text-center"> <button type="submit" class="btn btn-warning mt-3 mb-2">SOUMETTRE</button></td>
              </table>
                 </tr>
            </div>
            </form>

           <div class="d-flex justify-content-around mb-2">
              <a href="list_apprenant.php"><button type="button"    class="btn btn-warning  btn-lg btn-block mt-5  ">Supprimer un compte admin </button></a>
             <a href="administrateur.php"><button type="button"  class="btn btn-warning btn-lg btn-block mt-5 ml-4  mr-0 ">Retour page precedente </button></a> 
          </div>

        </div>
      </div>
    </div>
    
<?php include("footer.php") ?>
  
</body>
</html>

      
                    <!--<?php
                  if(isset($_GET['erreur'])){
                      $err = $_GET['erreur'];
                      if($err==1 || $err==2)
                          echo "<p style='color:red'>Utilisateur ou mot de passe incorrect</p>";
                  }
                  ?> -->
  
  
