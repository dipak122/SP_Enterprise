
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
  
    <style type="text/css">
        #Content
        {
            border: 3px solid blue;
            position: relative;
            height: 300px;
        }

        #divA
        {
            /* border: 3px solid red; */
            position: absolute;
            margin-right: 75px;
            left: 5px;
            top: 5px;
            bottom: 5px;
            right: 70%;
            align:center;
            padding:2em;        }

        #divB
        {
            /* border: 3px solid green; */
            position: absolute;
            right: 5px;
            top: 5px;
            bottom: 5px;
            left: 10%;
            margin-left: 25px;
           
        }
        



.web-page {
  padding: 15px;
  display: inline-block;
  width: 25%;
  min-width: 180px;
  max-width: 300px;
  height: 300px;
  margin: 10px;
  border: 2px black solid;
  overflow-y: scroll;
  text-align: left;
  background-color: white;
}

.dynamic-content {
  height: 100px;
  width: 100%;
  background-color: #0D47A1;
  color: #eee;
  text-align: center;
  line-height: 100px;
  font-size: 16px;
  font-weight: bold;
}
        #wrapper-2 {
  height: 0;
  overflow: hidden;
  transition: height 0.66s ease-out;
}
#wrapper-2.loaded {
  height: 100px;
}
    </style>
    <script>
    /* Simulate an ajax-loaded ad with a delayed DOM insertion */
setTimeout(function() {
  $('#wrapper-1').html('<div class="dynamic-content">Ad 😠</div>');
}, 2000);

setTimeout(function() {
  var el = $('#wrapper-2');
  el.html('<div class="dynamic-content">Ad 😊</div>');
  onLoad(el);
}, 2000);

function onLoad(element) {
  $(element).addClass('loaded');
}
    </script>
  </head>
  <body>
  <?php
  $u=0;
  require_once('header.php')
  ?>
   
  

    <div class="container " style="height: 100px; width: 500px; padding:6em" id="divB">

      <form method="POST" action="data.php">
        <div class="form-group">
            
              <?php

            $sql = "select max(billno) from bill";
            $connection = new mysqli('localhost','root','','SP_Enterprise');
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
                <select name="companyname" required>
                  
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
            <input type="number" name="amount" class="form-control" id="Amount" aria-describedby="emailHelp" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
      </div>
</div>

      




    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>l̥