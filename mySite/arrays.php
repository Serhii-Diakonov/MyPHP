<?php
$days = ["Mon", "Tue", "Wed"];
echo "I like " . $days[0] . ", and hate " . $days[1] . " and " . $days[2] . ". <br>";
echo "Array Length: ".count($days)."<br>";
$days = ["Mon", "Tue", "Wed"];
for ($i = 0; $i < count($days); $i++) {
   echo $days[$i];
   echo "<br>";
}

$age = ["Mon" => "8:00", "Tue" => "9:00", "Wed" => "42"];
echo "Mon start at " . $age['Mon']."<br>";

foreach($age as $key => $value) {
   echo "Key=" . $key . ", Value=" . $value;
   echo "<br>";
}
?>