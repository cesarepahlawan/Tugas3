<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  

<?php
$nameErr = $nimErr= "";
$name = $nim= "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Nama kosong";
  } else {
    $name = test_input($_POST["name"]);
  }
  
  if (empty($_POST["nim"])) {
    $nimErr = "NIM kosong";
  } 
  else{
    $nim = test_input($_POST["nim"]);
  }
}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>LOGIN</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name">
  <span class="error"> <?php echo $nameErr;?></span>
  <br><br>
 	NIM: <input type="text" name="nim">
  <span class="error"> <?php echo $nimErr;?></span>
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

<?php
echo $name;
echo "<br>";
echo $nim;
echo "<br>"
?>

</body>
</html>