<!DOCTYPE html>
<html>
<head>
  <title>Program Pintar Matematika</title>
</head>
<body>
  <h1>Program Pintar Matematika</h1>
  <form action="hitung.php" method="post">
    <label for="num1">Angka Pertama:</label>
    <input type="text" id="num1" name="num1">
    <br><br>
    <label for="num2">Angka Kedua:</label>
    <input type="text" id="num2" name="num2">
    <br><br>
    <label for="operator">Operator:</label>
    <select id="operator" name="operator">
      <option value="+">+</option>
      <option value="-">-</option>
      <option value="*">*</option>
      <option value="/">/</option>
    </select>
    <br><br>
    <input type="submit" value="Hitung">
  </form>
</body>
</html>
