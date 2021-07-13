<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Weather</title>
    <!-- Bootstrap link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body class="text-center">
    <div class="wrap">
        <form action="result.php" method="post">
            <h1 class="h3 text-warning">Search Weather 🌤</h1>
            <?php if (isset($_GET['invalid'])) : ?>
                <div class="alert alert-danger">Incorrect or Invalid City Name</div>
            <?php endif ?>
            <div class="form-floating mb-3">
                <input type="text" name="city" id="floatingInput" class="form-control" placeholder="Yangon" requied>
                <label for="floatingInput">City Name</label>
            </div>
            <button class="w-100 btn btn-primary btn-lg" type="submit">Search</button>
        </form>
    </div>
</body>

</html>