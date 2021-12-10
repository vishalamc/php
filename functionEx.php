<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Welcome to Login Portal</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<?php
function Withdrawal()
{
header("Location: withdrawal.php");
}
function Deposit()
{
   header("Location: deposit.php");
}
function CheckBalance()
{
   header("Location: balance.php");
}

    if(isset($_POST['btnsubmit']))
    {
        $struser=$_POST['txtusername'];
        $struserpwd=$_POST['txtuserpwd'];
        $strtransaction=$_POST['transaction'];
        $user="admin";
        $pwd="admin123";

      if (strcmp($struser, $user) !== 0 && strcmp($struserpwd, $pwd) !== 0 ) 
      {
             echo 'User Not Valid';
      }
        else {
                    switch($strtransaction)
                    {
                        case 'Withdrawal':
                        Withdrawal();
                        break;
                        case 'Deposit':
                        Deposit();
                        break;
                    }
             }
    }
    ?>
</head>
<body>
<div class="signup-form">
    <form method="post" enctype="multipart/form-data">
        <h2>Banking Transaction</h2>
        <p class="hint-text">Enter Customer ID</p>
        <input type="password" class="form-control" name="txtusername" placeholder="Enter Password" required="required">
        <div class="form-group">
        <p class="hint-text">Enter Password</p>
            <input type="password" class="form-control" name="txtuserpwd" placeholder="Enter Password" required="required">
        </div>
        <div class="form-group">
        <p class="hint-text">Select Operation:</p>
       <select name="transaction">
    <option value="">--- Select ---</option>
    <option value="Withdrawal">Withdrawal</option>
    <option value="Deposit">Deposit</option>
    <option value="CheckBalance">Balance Check</option>
</select>
        </div>
        <div class="form-group">
            <button type="submit" name="btnsubmit" class="btn btn-success btn-lg btn-block">Submit</button>
        </div>
        <div class="text-center">Don't have an account? <a href="register.php">Register Here</a></div>
    </form>
</div>
</body>
</html>