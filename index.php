<!DOCTYPE html>
<html lang="fr">

<!-- la class simple_html_dom est requis pour le parse du flux recupéré-->
<?php require 'simple_html_dom.php';?>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Exemple scraping PHP">
    <meta name="author" content="Etheve Samuel">

    <title>scrapPHPindeed</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/business-frontpage.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                </button>
                <ul class="nav navbar-nav navbar-right">
                  <li><a href="#search">Search</a></li>
                </ul>
            </div>

        </div>
        <!-- /.container -->
    </nav>

    <!-- Image Background Page Header -->
    <header class="business-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="tagline">A fond l'emplois !!!!</h1>
                </div>
            </div>
        </div>
    </header>

    <!-- Page Content -->
    <div class="container">



        <!-- appel du script -->
        <div id="indeed"></div>

        <hr>


        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Samuel 2017</p>
                </div>
            </div>
            <!-- /.row -->
        </footer>

    </div>

    <div id="search">
        <button type="button" class="close">×</button>
          <form action="scrap.php" method="post">
            <input type="search" value="" name="motclef" id="envoi" placeholder="entrer le metier (ex: développeur)" />
              <button type="submit" class="btn btn-primary" name="envoi">Rechercher</button>
          </form>
    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <script src="js/search.js"></script>

        <script>
          	$(function()
          		{
          			$("#indeed").load("scrap.php");
          		});
    		</script>


</body>

</html>
