<style>
    a{
        display: block;
    }
</style>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DOCS</title>
</head>
<body>
<?php 
    $files = scandir(getcwd() . '/pages');
    for($i = 2; $i < count($files); $i++){
        echo '<a href="/pages/'. $files[$i] . '/index.html">'.$files[$i].'</a>';
    }
?>

</body>
</html>