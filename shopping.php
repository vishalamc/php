<!DOCTYPE html>
<html>
	<head>
			<title> My Shopping App</title>
			<style>
			body{
				background-color: purple;
				color: white;
			}
		</style>
		
		</head>

		<body>
			<table border="2" height="50%" width="50%" align="center">
				<tr><td colspan="3">Select Item from your choice</td></tr>
				<tr>
					<td>Pizza</td><td><img src="pizza.jpg" height="55px" width="76px"></td>
					<td><input type="checkbox" name="items" value="pizza">
					<input type="number" placeholder="Enter Quantiy" name="txtpizza">
					</td>
				</tr>

				<tr>
					<td>Burger</td><td><img src="burger.jpg" height="55px" width="76px"></td>
					<td><input type="checkbox" name="items" value="burger">
					<input type="number" placeholder="Enter Quantiy" name="txtburger">
					</td>
				</tr>

				<tr>
					<td>Coke</td><td><img src="coke.jpg" height="55px" width="76px"></td>
					<td><input type="checkbox" name="items" value="coke">
						<input type="number" placeholder="Enter Quantiy" name="txtcoke">
					</td>
				</tr>
				<tr><td><h4 id="result"></h4> </td></tr>
				<tr><td colspan="3" align="center">
					<button id="btn">Submit</button>
				</td></tr>
				<script>
document.getElementById('btn').onclick = function() {
  var markedCheckbox = document.getElementsByName('items');
  for (var checkbox of markedCheckbox) {
    if (checkbox.checked)
      document.body.append(checkbox.value + ' ');
  }
}
</script>
			</table>

		</body>

</html>