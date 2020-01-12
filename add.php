
<?php

?>

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
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Sp Enterprise</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">BILLS <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Dropdown
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
            </li>
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>
      </nav>
    <h1>Hello, world!</h1>

    <div class="container" style="height: 100px; width: 500px;">
    <form method="POST" action="data.php">
        <div class="form-group">
            <?php
            $connection = new mysqli('localhost','root','','SP_Enterprise');
           // if(!$connection==false)
            //echo "connection done";
            //else 
            //echo "connection not done!!! ";

            $sql = "select max(billno) from bill";

            $result = $connection->query($sql);
            while($row=mysqli_fetch_array($result)){
?>
<label for="exampleInputEmail1">Bill no.</label>
          <input type="number" name="billno" value="<?php $row['max(billno)']=$row['max(billno)']+1; echo $row['max(billno)']; ?>"placeholder="<?php $row['max(billno)']=$row['max(billno)']+1; echo $row['max(billno)']; ?>" readonly>
          <?php
            }
            ?>
        </div>
    
        <div class="form-group">
            <div class="dropdown">
                <label for="exampleInputEmail1">Company name : </label>
                <select name="companyname">
                  
                  <option value="">Select company:</option>
        
                  <option  value="Sai (malad)">Sai (malad)</option>
                  <option value="Raju bhai (kandivali)">Raju bhai (kandivali)</option>
                  <option value="bijay bhai (malad)">bijay bhai (malad)</option>
                  <option value="Mukesh bhai (bhyander)">Mukesh bhai (bhyander)</option>
                </select>
                </div>
              </div>
    
        
        <div class="form-group">
            <label for="Amount">Amount:</label>
            <input type="number" name="amount" class="form-control" id="Amount" aria-describedby="emailHelp">
          </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>

        </div>




    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>l̥