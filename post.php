<?php
$name = "";
$v1 = "";
$v2 = "";
$v3 = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $v1 = test_input($_POST["yy"]);
    $v2 = test_input($_POST["mm"]);
    $v3 = test_input($_POST["dd"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>
<?php
$name = $v1 + $v2 + $v3;
echo $name;
echo $v1;
echo $v2;
echo $v3;
?>