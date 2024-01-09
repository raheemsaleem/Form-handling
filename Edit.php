<?php
$na = $_POST['na'];
$na = $_POST['fn'];
$pass = $_POST['pass'];
$em = $_POST['em'];
$nu = $_POST['nu'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="Save.php" method="post">
<label for="n">Name</label><br>
    <input type="text" name="na" value="<?php echo $na ; ?>" id="n"><br>
<label for="e">Email</label><br>
<input type="text" name="em" value="<?php echo $em; ?>" id="e"><br>
<label for="p">Password</label><br>
<input type="password" name="pass" value="<?php echo $pass ; ?>" id="p"><br>
<label for="n">Number</label><br>
<input type="text" name="nu" value="<?php echo $nu ; ?>" id="n"><br>
<button>
<a href="Save.php">Edit</a>
</button>    
</form>
</body>
</html>