<?php
include_once 'includes/calc.inc.php';
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action="" method="post">
      <input type="text" name="num1" placeholder="Number 1...">
      <input type="text" name="num2" placeholder="Number 2...">
      <select name="oper">
        <option type="text" value="none">None</option>
        <option type="text" value="add">Add</option>
        <option type="text" value="sub">Subtract</option>
        <option type="text" value="mul">Multiply</option>
        <option type="text" value="div">Divide</option>
      </select>
      <button type="submit" name="submit">Submit</button>
    </form>
    <?php



    $number1 = $_POST['num1'];
    $number2 = $_POST['num2'];
    $operator = $_POST['oper'];

    $calc = new Calculator;
    echo $calc->Calc($number1, $number2, $operator);
     ?>

  </body>
</html>
