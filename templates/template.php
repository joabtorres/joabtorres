</html>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Joab Torres Alencar</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo BASE_URL ?>assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo BASE_URL ?>assets/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="<?php echo BASE_URL ?>assets/fontawesome/css/brands.min.css">
    <link rel="stylesheet" href="<?php echo BASE_URL ?>assets/fontawesome/css/solid.min.css">
    <link rel="stylesheet" href="<?php echo BASE_URL ?>assets/css/style.css">
    <script src="<?php echo BASE_URL ?>assets/bootstrap/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <?php template::getInstance()->loadViewInTemplate($viewName, $viewData); ?>
</body>

</html>