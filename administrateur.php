<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Administration</title>
    <link rel="stylesheet" href="styles/style2.css">
  <link rel="stylesheet" href="styles/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="font/fontawesome/css/all.min.css">

</head>

<body>

  <?php include "header.php"; ?>
  <div class="container-fluid">
    <div class=" my-5 row">
      <div class="col-3 bg-danger"></div>
      <div class="col-6">  <!-- zone de connexion -->
        <div>       
          <form class="my-5 form-ad d-flex flex-column my-2" action="verification.php" method="POST">
            <h1 class="d-flex  justify-content-center connexion">Connexion</h1>
            <div class="  d-flex justify-content-center">
                  <img class=" img-user-admin my-4" src="images/logouser.PNG" alt="">
            </div> 
            <div class=" my=5 ">
              <label class="label-adm  mb-5  py-3  col-4"><b>Nom d'utilisateur:</b></label>
              <input  class="" type="text" placeholder="Entrer le nom d'utilisateur" name="username" required>
            </div> 
            <div class=" my=5 ">
              <label  class="label-adm mb-3 py-3  col-4 "><b>Mot de passe:</b></label>
              <input class="px-1 " type="password" placeholder="Entrer le mot de passe" name="password" required>
            </div>
            <div  class=" d-flex flex-columns  mt=5  ">
      
            
            </div>
            <div class="row">
             <div class="col-2    ">
                      
                    <input class="  my-5 px-5 d-flex justify-content-center text-center  bg-danger"  type="submit" id='submit' value='Envoyer' >
             </div>
              <div class="col-8  ">
                <p class="  mt-5 mb-1  text-center"><a a class="" href=""> Nom d'utilisateur/mot de passe </a>oublié?</p>
                <p class="  mt-0 pr-3 text-center "><a class="  " href="inscription.php"> vous n'avez pas de compte?</a>s'inscrire</p>
              </div>
              <div class="col-2   ">
                      <input class="  mr-5  my-5 px-5 d-flex justify-content-center text-center  bg-danger" type="submit" id='submit' value='Effacer ' > 
                 
             </div>
            </div>
            
          </form>     
        </div>  
      </div>
      <div class="col-3 bg-danger"></div>
      </div>
    </div>
  </div>
  <?php include ("footer.php")?>
</body>
</html>

      
     
  
