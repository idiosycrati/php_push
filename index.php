<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">   
    <title>Hello</title>
</head>
<body>
    <?php

        $name="Chris Anthony C. Panizales";
        $address = "Makati";
        $age = 21;
    
    ?>

    <center>
        <div>
            <div class="d1"><h1>Quick</h1></div>
            <div class="d2"><h1>Bio</h1></div>
        </div>
        <div>
            <h1>Name: <?php echo "$name"?></h1>
            <h3>Address: <?php echo "$address"?></h3>
            <h3>Age: <?php echo "$age"?></h3>
        </div>
    </center>
    
</body>
</html>