<!DOCTYPE html>
<html>
<head>
	<title>Calculator</title>
</head>
<body>
	<h1>Magical Mystery Calculator</h1>
	<form method="post">
		<label for="num1">Enter a number:</label>
		<input type="number" name="num1" id="num1" required><br><br>
		
		<label for="num2">Enter another number:</label>
		<input type="number" name="num2" id="num2" required><br><br>
		
		<label for="operator">Select an operation:</label>
		<select name="operator" id="operator">
			<option value="+">Add (+)</option>
			<option value="-">Subtract (-)</option>
			<option value="*">Multiply (*)</option>
			<option value="/">Divide (/)</option>
		</select><br><br>
		
		<input type="submit" value="Calculate!">
	</form>

	<?php
		if(isset($_POST['num1']) && isset($_POST['num2']) && isset($_POST['operator'])) {
			$num1 = $_POST['num1'];
			$num2 = $_POST['num2'];
			$operator = $_POST['operator'];
			
			switch($operator) {
				case '+':
					$result = $num1 + $num2;
					break;
				case '-':
					$result = $num1 - $num2;
					break;
				case '*':
					$result = $num1 * $num2;
					break;
				case '/':
					$result = $num1 / $num2;
					break;
				default:
					$result = "Invalid operator";
			}
			
			echo "<p>Your magical mystery number is: $result!</p>";
		}
	?>
</body>
</html>