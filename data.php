<?php

$connection = new mysqli('localhost','root','','SP_Enterprise');

if(!$connection==false)
echo "connection  done";

else
echo "connection not done";

$billno=$_POST['billno'];
$companyname= $_POST['companyname'];
$amount = $_POST['amount'];

$sql = "insert into Bill (billno,companyname,amount) values('$billno','$companyname','$amount')";

$result = $connection -> query($sql);


if($result==true)
echo "data inserted successfully";
else
echo "data not inserted!!!";





?>