<?php
    require_once __DIR__ . '/config.php';

    $request = $_SERVER['REQUEST_URI'];
    $uri = $_SERVER['REQUEST_URI'];

    if (strpos($request, '/api/') ===  0) {
        include 'routes.php';
        return;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/css/main.css" />
    <link rel="icon" type="image/png" href="/assets/img/logo.png" />
</head>
<body>
    <?php
        include 'src/components/header.php';
        include 'routes.php';
        include 'src/components/footer.php';
    ?>
    <title><?php echo $title; ?> | <?php echo $_ENV['APP_NAME'] ?></title>
    <script src="/assets/js/scripts.js"></script>
</body>
</html>
<?php mysqli_close($conn); ?>