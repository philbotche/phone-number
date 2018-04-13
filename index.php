<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Philippe botche">

    <title>Cover Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/cover.css" rel="stylesheet">

    <!-- Main styles -->
    <link href="css/style.css" rel="stylesheet">

    <!-- Script
================================================== -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/main.js"></script>
</head>

<body class="text-center">

<div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
    <header class="masthead mb-auto">
        <div class="inner">

        </div>
    </header>

    <main role="main" class="inner cover">
        <h1 class="cover-heading">Sms Campaign</h1>
        <p class="lead">Générez des numéros de téléphone de tous les réseaux mobile ivoirien pour vos campagnes publicitaire .</p>
        <p class="lead">
            <span><a href="#" id="sel">Selectionnez le/les réseau(x) de votre choix</a></span>
        </p>
        <div class="container-operators">
            <ul class="operators">
                <li class="op" id="orange"><img src="images/orange.jpg" /></li>
                <li class="op" id="mtn" ><img src="images/mtn.jpg" /></li>
                <li class="op" id="moov"><img src="images/moov.jpg" /></li>
            </ul>
            <button class="btn btn-primary" data-toggle="modal" data-target="#PhoneNumbers" id="sender">Generez</button>
        </div>
        <div class="modal fade" id="PhoneNumbers">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title"> Vos numeros</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body" id="list">

                    </div>
                </div>
            </div>
        </div>

    </main>

    <footer class="mastfoot mt-auto">
        <div class="inner">

        </div>
    </footer>
</div>

</body>
</html>
