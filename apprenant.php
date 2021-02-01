<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Application Simplon</title>
  <link rel="stylesheet" href="styles/style.css">
  <link rel="stylesheet" href="styles/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="font/fontawesome/css/all.min.css">
  
  <style>
    section {
      height: 100%;
      margin: 0;
    }

    .bg {
      background-image: url("images/bg-image2.jpg");
      height: 100%;
      background-size: cover;
      background-repeat: no-repeat;
      background-position center: ;

    }
  </style>
</head>

<body>
  
  <header>
<?php include("header.php") ?>
  </header>

  <section class="bg">
    <h1 class="h1 text-center pt-5">Application Simplon</h1>
    <div class="container-fluid mt-5 ">
      <div class="row mt-5">

        <div class="col-lg-6 col-md-12 col-sm-12 col-xd-12 px-5 mb-5">
          <div class="sectright"> 
            <img class="container-fluid p-0" src="images/photoblanc.jpg" alt="">
          </div>
        </div>
        
        <div class="col-lg-6 col-md-12 col-sm-12 col-xd-12  ">
          <h3 class="text-center h3">Enregistrer un apprenant</h3>
          <form class=" form col-lg-12 col-md-12 col-sm-12 col-xd-12  mb-4 pt-5 mt-2" action="traitement.php" method="post">
            
          <div class="form-group row pl-2 mb-4">
            <label for="colFormLabelLg" class="col-sm-4 col-form-label col-form-label-lg bg-white">Email:</label>
            <div class="col-sm-8">
               <input type="email" name="EMAIL" class="form-control form-control-lg" id="colFormLabelLg" required>
            </div>
          </div>
        <div class="form-group row pl-2 mb-4">
            <label for="colFormLabelLg" class="col-sm-4 col-form-label col-form-label-lg bg-white">Nom:</label>
            <div class="col-sm-8">
               <input type="email" name="NOM" class="form-control form-control-lg" id="colFormLabelLg" required>
            </div>
          </div>
          <div class="form-group row pl-2 mb-4">
            <label for="colFormLabelLg" class="col-sm-4 col-form-label col-form-label-lg bg-white">Prenom(s):</label>
            <div class="col-sm-8">
               <input type="email" name="NOM" class="form-control form-control-lg" id="colFormLabelLg" required>
            </div>
          </div>

        
          <div class="form-group row pl-2 mb-4">
            <label for="colFormLabelLg" class="col-sm-4 col-form-label col-form-label-lg bg-white ">Date de naissance</label>
            <div class="col-sm-8">
              <input type="date" name="DATE" class="form-control form-control-lg border" id="colFormLabelLg" required>
            </div>
          </div>
          <div class="form-group row  pl-2 mb-4">
              <label for="colFormLabelLg" class="col-sm-4 col-form-label col-form-label-lg bg-white ">Formation:</label>
              <div class="col-sm-8">
                <input list="Formations" name="FORMATION" class="form-control form-control-lg" id="colFormLabelLg"
                  required>
                <datalist id="Formations">
                  <option value="Dev web">
                  <option value="Droit">
                  <option value="Economie">
                  <option value="Finance">
                  <option value="communication">
                  <option value="Genie civil">
                  <option value="Anglais">
                  <option value="SEA">
                  <option value="Nouveau bahelier">
                  <option value="SIG">
                </datalist>
            </div>
            </div>
            <div class="text-center">
              <button type="submit" class="btn btn-primary mt-3 mb-0">Envoyez</button>
            </div>
          </form>
       <span class="a">  <a href="liste.php"><button type="button"  class=" btn btn-danger  btn-lg btn-block mt-5 mb-0 ">Consultez la liste des apprenants</button></a></span> 
        
        </div>
      </div>
    </div>
  </section>
  <script src="styles/autres/jquery-3.5.1.min.js"></script>
  <script src="styles/bootstrap/js/bootstrap.js"></script>
<?php include("footer.php") ?>
</body>

</html>