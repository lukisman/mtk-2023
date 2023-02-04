<?php
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$operator = $_POST['operator'];

switch ($operator) {
  case '+':
    $hasil = $num1 + $num2;
    break;
  case '-':
    $hasil = $num1 - $num2;
    break;
  case '*':
    $hasil = $num1 * $num2;
    break;
  case '/':
    $hasil = $num1 / $num2;
    break;
  default:
    $hasil = "Operator tidak dikenali";
}

echo "Hasil: $hasil";
?>
