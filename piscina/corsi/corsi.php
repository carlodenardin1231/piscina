<?php
session_start();
include '../config/config.php';

if($_SESSION['username']!=$u||$_SESSION['password']!=$p){
  header("Refresh:0; url=../logout.php");
}


?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Area | Pages</title>
    <!-- Bootstrap core CSS -->
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../bootstrap/css/style.css" rel="stylesheet">
    <script src="http://cdn.ckeditor.com/4.6.1/standard/ckeditor.js"></script>
    <script href="../bootstrap/js/jquery-1.8.3.min"></script>
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
    <script>

      // FUNZIONE PER FILTRARE COGNOMI
      function myFunction() { 
        var input, filter, table, tr, td, i;input = document.getElementById("myInput");
        filter = input.value.toUpperCase();
        table = document.getElementById("myTable");
        tr = table.getElementsByTagName("tr");

        for (i = 0; i < tr.length; i++) {
          td = tr[i].getElementsByTagName("td")[0];
          if (td) {
            if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
              tr[i].style.display = "";
            } else {
              tr[i].style.display = "none";
            }
          } 
        }
      }
   
    </script>
  </head>
  <body>

    <nav class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">AdminStrap</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Welcome, admin</a></li>
            <li><a href="../logout.php">Logout</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <header id="header">
      <div class="container">
        <div class="row">
          <div class="col-md-10">
            <h1><span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Corsi </h1>
          </div>
        </div>
      </div>
    </header> 

    

    <section id="main">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <div class="list-group">
              <a href="../index.php" class="list-group-item active main-color-bg">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Dashboard
              </a>
              <a href="../utenti/utenti.php" class="list-group-item"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Utenti </a>
              <a href="corsi.php" class="list-group-item"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Corsi <span class="badge"></span></a>
            </div>

          </div>
          <div class="col-md-9">
            <!-- Website Overview -->
            <div class="panel panel-default">
              <div class="panel-heading main-color-bg">
                <h3 class="panel-title">Corsi</h3>
              </div>
              <div class="panel-body">
                <form action="add_corso.php" method="post">
                  <div class="panel panel-default">
                    <div class="panel-body" style="height:62px">
                      <div class="form-inline"> 

                          <div class="form-group">
                            <label>Nome:</label>
                            <input type="text" name="nome" class="form-control">
                          </div>

                          <div class="form-group">
                            <label>Turni:</label>
                            <select class="form-control" name="turni">
                              <option disabled>-</option>
                              <option value="1">1</option>
                              <option value="2">2</option>
                              <option value="3">3</option>
                              <option value="4">4</option>
                              <option value="5">5</option>
                              <option value="6">6</option>
                            </select>
                          </div>
                        
                        
                          <div class="form-group">
                            <label>Orari:</label>
                            <select class="form-control" name="orari">
                              <option disabled>-</option>
                              <option value="1">1</option>
                              <option value="2">2</option>
                              <option value="3">3</option>
                              <option value="4">4</option>
                              <option value="5">5</option>
                              <option value="6">6</option>
                            </select>
                          </div>

                          <div class="form-group">
                            <button type="submit" class="btn btn-info">Aggiungi Corso</button>
                          </div>

                      </div>
                    </div>
                  </div>
                </form>
                
                <div class="panel panel-default">
                  <div class="panel-heading main-color-bg">
                    <h3 class="panel-title"></h3>
                  </div>
                  <div class="panel-body">
                    
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>
