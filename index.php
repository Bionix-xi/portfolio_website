<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Lucas de Ruijter</title>

    <link rel="stylesheet" href="CSS/reset.css">

    <link rel="preconnect" href="https://fonts.gstatic.com">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- jQuery library + fancybox-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css">
    <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Chakra+Petch:wght@600&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="CSS/portfolio.css">
</head>

<body>
    <?php include("page.php"); ?>
    <?php include("navbar.php"); ?>

    <div class="container">
    <br>
    <div class="paginanaam">
    <?php echo "Pagina: $paginanaam"; ?>
    </div>
    <br>
    <?php 
    if($paginanaam == "home") {
        include("home.php");
    }
    else {
        include("$paginanaam.php"); 
    }
    ?>
    </div>

</body>

</html>
