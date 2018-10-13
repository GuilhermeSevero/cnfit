<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CNFIT - Vida Saudável</title>
    <meta name="description" content="Página da CNFIT - Vida Saudável">
    <meta name="keywords" content="Low Carb, fit, fitness, saúde, dieta">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Pinyon+Script" rel="stylesheet">
    <link rel="stylesheet" href="css/styles-merged.css">
    <link rel="stylesheet" href="css/style.min.css">

    <!--[if lt IE 9]>
      <script src="js/vendor/html5shiv.min.js"></script>
      <script src="js/vendor/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <?php
        require_once('components/navbar.php');

        require_once('components/section-welcome.php');
        require_once('components/section-message.php');
        require_once('components/section-specialties.php');
        require_once('components/section-plans.php');
        require_once('components/section-menu.php');
        require_once('components/section-contact.php');

        require_once('components/footer.html');
     
        require_once('components/copyright.html');
    ?>

    <script src="js/scripts.min.js"></script>
    <script src="js/custom.js"></script>

</body>

</html>