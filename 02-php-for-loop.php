<!DOCTYPE html>
<html>
<head>
	<title>Multiplication Table</title>
</head>
<body>
	<h1>Multiplication Table</h1>

	<form action="02-php-for-loop.php" method="post">
  		Enter a number: <input type="number" name="num"><br>
  		<input type="submit" value="Generate multiplication table">
	</form>

<?php
// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['num'])) {

    // Get the input number from the user
    $num = $_POST['num'];

    // Check if the input is actually a number
    if (is_numeric($num)) {
            
		// Display the multiplication table of the input number
    	echo "Multiplication table of $num: <br>";

		for ($i = 1; $i <= 10; $i++) {
			$result = $num * $i;
			echo "$num x $i = $result <br>";
		}
		
	// Else return error message
	} else {
		echo "Please enter a valid number.";
	}
}
?>

</body>
</html>