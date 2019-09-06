<?php
$name = "";
$phone = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = test_input($_POST["userName"]);
    $phone = test_input($_POST["userTel"]);
}


function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);

  return $data;
}

?>
<?php

echo $name;
echo $phone;

?>