<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP</title>
</head>
<body>
    <?php
   $suhu = 30;
    if ($suhu <= 20) {
         echo "Dingin";

    } elseif ($suhu <= 30) {
            echo "Sejuk";
    
        } elseif ($suhu <= 40) {
            echo "Panas";
    
        } else {
            echo "Sangat Panas";
        }
        
    ?>
</body>
</html>