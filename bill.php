<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Hello, world!</title>
 
  </head>
  <body>
  <?php
 
  require_once('header.php') ?>
    <?php
            $connection = new mysqli('localhost','root','','SP_Enterprise');
            
             // if(!$connection==false)
            //echo "connection done";
            //else 
            //echo "connection not done!!! ";
            ?>
<div class="container" style="height:100px; width:800px; padding:6em 6em 6em 6em "       id="divB" >
      <?php
    
      if(isset($_POST['submit'])){
       // if(isset($_POST['billno'])){
      $billno=$_POST['billno'];
      $sql1="select * from bill where billno=$billno";
      $result1=$connection->query($sql1);
      
      while($row=mysqli_fetch_array($result1)){

      ?>
      <form method="POST" action="updatebill.php">
      <table class="table table-striped" id="table" name="table">
        <thead>
          <tr>
            <th scope="col">Bills no.</th>
            <th scope="col">Company Name</th>
            <th scope="col">Amount</th>
            <th scope="col">Money Status</th>
          </tr>
        </thead>
        <tbody>
          <tr>
          <th scope="row"><input type="hidden" name="billno" value=<?php echo $row['billno']; ?>><?php echo $row['billno']; ?></th>
            <td><?php echo $row['companyname']; ?></td>
            <td><?php echo $row['amount']; ?></td>
            <?php 
      if($row['money_status']=='PAID') { ?>
      <td style=" color: green;  font-weight: bold;"><?php echo $row['money_status']; ?></td>
      <td></td>
      <td></td>
      <?php } else { ?>
      <td><?php echo $row['money_status']; ?></td>
      <td style=" color: red;  font-weight: bold;"><input type="checkbox" name="status" value="paid">  Paid</td>
      <td><button type="submit" name="submit1">Submit</button></td>
     <?php } ?>
          </tr>

            <?php 
        }
      // }
      // else{
      //   header("Location:index.php");
      // }
      }
            ?>
        </tbody>
    </table>
    </form>
    </div>
    <br><br><br>
  
  
  

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>  
    </body>
  </html>

