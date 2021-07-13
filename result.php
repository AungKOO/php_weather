<?php
$endpoint = "https://api.openweathermap.org/data/2.5/weather";

if ($_POST['city'] === "") {
    header("location: index.php?invalid=1");
    die();
}
$city = $_POST['city'] ?? "Tokyo";
$apiKey = ""; // * add your own api key;
$url = "$endpoint?q=$city&appid=$apiKey&units=metric";

$data = file_get_contents($url);
// echo $data;
$response_data = json_decode($data);
$temp = round($response_data->main->temp);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result</title>
    <!-- bootstrap link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">
</head>

<body class="text-center">
    <div class="wrap">
        <p>The weather is currently </p>
        <h1 class="h3">The temperature in is degrees Celcius</h1>
    </div>

</body>

</html>