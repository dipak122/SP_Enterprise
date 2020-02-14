<?php
    if(isset($_POST['submit1'])){
        if(isset($_POST['status'])){
        $billno=$_POST['billno'];
        $connection1 = new mysqli('localhost','root','','SP_Enterprise');
        $sql1="Update bill set money_status=\"PAID\" where billno=$billno";
        
$result1 = $connection1->query($sql1);

echo $sql1;

if($result1==true){
echo "data inserted successfully";
echo "<script>alert(\"bill paid was successfully Done \")</script>";
$u=1;
}
else{
echo "data not inserted!!!";
//header("Location:header.php");

}}
else{
    echo "<script>alert(\"pls checked the check box\")</script>";
    header("Location:bill.php");
}
}

if($u==1){
    header("Location:bills.php");
}
?>