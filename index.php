
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Exploring Basic PHP Elements</title>
</head>
<body>
    <h1>Exploring Basic PHP Elements</h1>

    <p>Dominique Cronier</p>
    <p><?php echo date("F j, Y"); ?></p>

    <?php

    $topic = "PHP programming";   
    $year = 2026;                 
    $isServerSide = true;         
   
    function describeTopic($topic, $year) {
        return "I am learning " . $topic .
               " in " . $year . ".";
    }
   
    echo "<h2>" . describeTopic($topic, $year) . "</h2>";
    
    echo "<p>PHP runs mainly on the server to generate web content, " .
         "while JavaScript commonly runs in the browser to make pages interactive.</p>";

    echo "<p>Is PHP server-side? " .
         ($isServerSide ? "Yes" : "No") . "</p>";
    ?>
</body>
</html>
