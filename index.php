<?php
function password($number)
{
    $pw = '';
    for ($i = 0; $i < $number; $i++) {
        $pw .= chr(rand(32, 126));
    }
    return $pw;
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
                <form action="./index.php" method="GET">
                    <div class="mb-3 row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                        <div class="col-2">
                            <input type="number" class="form-control" name="pass" id="inputPassword">
                            <button class="btn btn-primary my-3" type="submit">submit</button>
                        </div>
                        <div class="col-5">
                            <span>
                                <?php echo password($_GET['pass']) ?>
                            </span>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>