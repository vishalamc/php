<!DOCTYPE html>
<html>
	<head>
		<title>My Function Example</title>
		<style>
		body{
			background-color: purple;
			color: white;
		}
	</style>
	<?php
	    static $balance=1000;
        function Withdrawal()
		{
						
			$amt=$_POST['txtAmount'];
			
			if($amt<$GLOBALS['balance'])
			{

				$GLOBALS['balance']=$GLOBALS['balance']-$amt;
				echo "Updated Balance: ".$GLOBALS['balance'];
			}	
			else
			{
				echo "Balance not Sufficient";
			}
				
		}
		function Deposit()
		{
			$amt=$_POST['txtAmount'];
			
			$GLOBALS['balance']=$GLOBALS['balance']+$amt;
			echo "Updated Balance: ".$GLOBALS['balance'];
			
		}
		function CheckBalance()
		{
			
		}
			if(isset($_POST['btncheck']))
			{

				$choice=$_POST['combochoice'];
				switch($choice)
				{
					case 'Withdrawal':
					Withdrawal();
					break;
					case 'Deposit':
					Deposit();
					break;
					case 'Balance':
					CheckBalance();
				}
			}

	?>
	</head>
	<body>
		<form method="post">
			<table border="2" height="50%" align="center" width="50%">
				<tr><td colspan="2" align="center">Select Your operation</td></tr>
				
				<tr><td><input type="text" placeholder="Enter Amount" name="txtAmount"
				 ></div></td></tr>
				<tr><td>
					<select name="combochoice">
						<option>--Select---</option>
						<option value="Withdrawal">Withdrawal</option>
						<option value="Deposit">Deposit</option>
						<option value="Balance">Balance</option>
					</select>

				</td>
				</tr>
				
					<td colspan="2"><input type="submit" name="btncheck" value="SUBMIT"></td>
				</tr>

			</table>
		</form>
	</body>

</html>