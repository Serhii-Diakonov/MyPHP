<!doctype html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport"
         content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <style>
       table{
           position: relative;
           top:50px;
           left:500px;
           border-collapse:collapse;
           border: 2px solid black;
        }
       td {
           min-width: 20px;
           text-align: center;
           padding: 5px;
           border:1px solid gray;
       }
   </style>
</head>
<body>
<div class="table">
<?php
$my_array = array(
    array(rand(0, 20), rand(0, 20), rand(0, 20), rand(0, 20), rand(0, 20), rand(0, 20), rand(0, 20), rand(0, 20), rand(0, 20), rand(0, 20)),
    array(rand(0, 20), rand(0, 20), rand(0, 20), rand(0, 20), rand(0, 20), rand(0, 20), rand(0, 20), rand(0, 20), rand(0, 20), rand(0, 20)),
    array(rand(0, 20), rand(0, 20), rand(0, 20), rand(0, 20), rand(0, 20), rand(0, 20), rand(0, 20), rand(0, 20), rand(0, 20), rand(0, 20)),
    array(rand(0, 20), rand(0, 20), rand(0, 20), rand(0, 20), rand(0, 20), rand(0, 20), rand(0, 20), rand(0, 20), rand(0, 20), rand(0, 20)),
    array(rand(0, 20), rand(0, 20), rand(0, 20), rand(0, 20), rand(0, 20), rand(0, 20), rand(0, 20), rand(0, 20), rand(0, 20), rand(0, 20))
);
echo "<table>";
for($i=0; $i<count($my_array); $i++){
    echo "<tr>";
    for($j=0; $j<count($my_array[0]); $j++){
        echo "<td>".$my_array[$i][$j]."</td>";
    }
    echo "</tr>";
}
?>
</div>
</body>
</html>