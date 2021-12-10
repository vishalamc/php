<?php
$balance=1000;
$GLOBALS['amount']=0;
function withdraw()
{
echo "Enter the amount".$GLOBALS['amount'];
echo "you entered:".$GLOBALS['amount'];
if($GLOBALS['amount']<$GLOBALS['balance'])
{
$GLOBALS['balance']=$GLOBALS['balance']-$GLOBALS['amount'];
echo "You withdraw the amount ".$GLOBALS['amount'];
echo "Updated amount is : ".$GLOBALS['balance'];
}
else{
echo "Balance is not sufficient in your Account";
}
}
withdraw();
function Deposite()
{

echo "Enter the Deposite amount".$GLOBALS['amount'];
echo "you entered:".$GLOBALS['amount'];

$GLOBALS['balance']=$GLOBALS['balance']+$GLOBALS['amount'];
echo "You diposite the amount ".$GLOBALS['amount'];
echo "Updated amount is : ".$GLOBALS['balance'];
}
Deposite();

function checkBalance()
{
echo "Balance is : ".$GLOBALS['balance'];

}
checkBalance();
?>