<?php

$connection = new mysqli('localhost','root','','SP_Enterprise');

if(!$connection==false)
echo 'connection done \n';

else
echo "connection not done";
$companyname='bijay bhai (malad)';
$sql ="select * from bill where companyname='$companyname'";

$result = $connection -> query($sql);

while($row= mysqli_fetch_array($result)){
echo $row['companyname'];
}
if($result)
echo " data inserted successfully";
else
echo "data not inserted!!!";





?>