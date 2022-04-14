<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  
<form action = "register2.php" method = "POST">
<?php
// define variables and set to empty values
$nameError = $emailError =  $nricError = $passError = $VpassError = "";
$name = $email = $nric = $state = $pass  = $Vpass = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameError = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
  }

  if (empty($_POST["nric"])) {
    $nricError = "NRIC is required";
  } else {
    $nric = test_input($_POST["nric"]);
  }

  if (empty($_POST["email"])) {
    $emailError = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
  }
    
  if (empty($_POST["state"])) {
    $state = "";
  } else {
    $state = test_input($_POST["state"]);
  }

  if (empty($_POST["password"])) {
    $passError = "Password is required";
  } else {
    $pass = test_input($_POST["password"]);
  }

  if (empty($_POST["Vpassword"])) {
    $VpassError = "Verify Password is required";
  } else {
    $Vpass = test_input($_POST["Vpassword"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>Registration Form</h2>
<p><span class="error">* required field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  <table width="350" border="1">
    <tbody> 
      <tr>
        <td width = "100">Nama</td>
        <td>:</td>
        <td><input type="text" name="name">
        <span class="error">* <?php echo $nameError;?></span></td>
      </tr>
      <tr>
        <td>NRIC</td>
        <td> : </td>
        <td><input type="text" name="nric">
        <span class="error">* <?php echo $nricError;?></span></td>
      </tr>
      <tr>
        <td>E-mail</td>
        <td> : </td>
        <td><input type="text" name="email">
        <span class="error">* <?php echo $emailError;?></span></td>
      </tr>
      <tr>
        <td>State</td>
        <td> : </td>
        <td><select name="states" id="states" required>
            <option value="Johor">Johor</option>
            <option value="Kedah">Kedah</option>
            <option value="Kelantan">Kelantan</option>
            <option value="Melaka">Melaka</option>
            <option value="Negeri Sembilan">Negeri Sembilan</option>
            <option value="Pulau Pinang">Pulau Pinang</option>
            <option value="Pahang">Pahang</option>
            <option value="Perak">Perak</option>
            <option value="Perlis">Perlis</option>
            <option value="Selangor">Selangor</option>
            <option value="Terengganu">Terengganu</option>
        </select></td>
      </tr>
      <tr>
        <td>Password</td>
        <td> : </td>
        <td><input type="password" id="password">
        <span class="error">* <?php echo $passError;?></span></td>
      </tr>
      <tr>
        <td>Verify Password</td>
        <td> : </td>
        <td><input type="password" id="vpassword">
        <span class="error">* <?php echo $VpassError;?></span></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>:</td>
        <td><input type="submit" name="submit" id="submit" value="Submit">
        <input TYPE = "RESET" NAME = "RESET" VALUE = "Reset"></td>
      </tr>
    </tbody>
  </table>
</form>
</body>
</html>
