<?php
include __DIR__ . "/function.php";
session_start();
$_SESSION['pass'] = $_GET['pass'];
if (empty($_SESSION['pass'])) {
    header("Location:./index.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <div class="container-fluid m-4">
        <div class="row">
            <div class="col">
                <p>
                    <?php echo password($_GET['pass']); ?>
                </p>
                <p>
                    password length:
                    <?php echo strlen(password($_GET['pass'])); ?>
                </p>
                <form action="./index.php">
                    <button class="btn btn-primary">Torna indietro</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>