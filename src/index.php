<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8"/>
<head>
    <title>A Boring Website</title>
</head>
<body>
    <h1>I'm in a Docker container</h1>

    <p>PHP ENV test</p>
    <?php 
        echo 'PHP current version: ';
        echo phpversion ();
    ?>
</body>
</html>
