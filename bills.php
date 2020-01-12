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
    <h1>Hello, world!</h1>

    <div class="dropdown">
                <label for="exampleInputEmail1">Company name : </label>
                <select name="companyname">
                  
                  <option value="<?php $companyname='null1'; ?>" selected>Select company:</option>
        
                  <option  value="<?php $companyname='Sai (malad)'; ?>">Sai (malad)</option>
                  <option value="<?php $companyname='Raju bhai (kandivali)'; ?>">Raju bhai (kandivali)</option>
                  <option value="<?php $companyname='bijay bhai (malad)'; ?>">bijay bhai (malad)</option>
                  <option value="<?php $companyname='Mukesh bhai (bhyander)'; ?>">Mukesh bhai (bhyander)</option>
                </select>
                </div>

    <div class="container">
    <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Bills no.</th>
      <th scope="col">Company Name</th>
      <th scope="col">Amount</th>
      <th scope="col">Money Status</th>
    </tr>
  </thead>
  <tbody>
  <?php 
    $connection = new mysqli('localhost','root','','SP_Enterprise');
    echo $companyname;
    if($companyname=="null1"){
    $sql= "select * from bill";}
    else{
        $sql = "select * from bill where companyname='$companyname'";
    }
    $result=$connection->query($sql);
    while($row=mysqli_fetch_array($result)){
        ?>
    <tr>
      <th scope="row"><?php echo $row['billno']; ?></th>
      <td><?php echo $row['companyname']; ?></td>
      <td><?php echo $row['amount']; ?></td>
      <td>blank</td>
    </tr>
    <?php 
    } 
?>
<?php 

$sql1="select sum(amount) from bill";
$result1=$connection->query($sql1);
while($row=mysqli_fetch_array($result1)){
    ?>
    <tr>
      <th scope="row">--------</th>
      <th>Total</th>
      <th><?php echo $row['sum(amount)']; ?></th>
      <td>----</td>
    </tr>
<?php
 }
?>
  </tbody>
</table>
</div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>