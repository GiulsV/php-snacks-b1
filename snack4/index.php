<!-- Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Numeri casuali</title>
</head>
<body>
    <h2>Snack 4</h2>
<?php
   $randomNumbers = [];

   while (count($randomNumbers) < 15) {
       $number = rand(1, 100);

       if(!in_array($number, $randomNumbers)){
           $randomNumbers[] = $number;
           echo  "<ul><li>". $number ."</li></ul>";
       }
       
   }

//    var_dump($randomNumbers);
echo "<h3>Array length: " . count($randomNumbers). "</h3>";

?>

</body>
</html>