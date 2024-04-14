<?php

$server = "localhost";
$user = "root";
$password = "";
$database = "cab";
$con = mysqli_connect($server, $user, $password, $database);

if (!$con) {
    die("Connection Error");
}

$query = "select *from info";
$ans = mysqli_query($con, $query);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    
    <?php include("fetch_css.php");?>
</head>

<body>
    <table id="modal">
        <thead>
            <tr>
                <td>CRN</td>
                <td>Action</td>
                <td>Date</td>
                <td>Time</td>
                <td>Requester Name</td>
                <td>Requester Contect</td>
                <td>View</td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <?php
                while ($tr = mysqli_fetch_assoc($ans)) {
                  
                ?>
                    <td><?php echo $tr['CRN'] ?></td>
                    <td><i class="material-icons">motorcycle</i></td>
                    <td><?php echo $tr['Date'] ?></td>
                    <td><?php echo $tr['Time'] ?></td>
                    <td>UserName</td>
                    <td>User Contact</td>
                    <td><button id="myBtn<?php echo $tr['CRN']?>" style="border:none;background-color: Transparent;"><i class="material-icons">visibility</i></button></td>
            </tr>
        <?php
        include("assign.php");
                }
        ?>

        </tbody>
    </table>
    <div id="myModal" class="modal">

<!-- Modal content -->
<div class="modal-content">
  <span class="close">&times;</span>
  <div class="myModal">
    <h2>Assign Vehicle and Driver</h2>
    <hr>
    <br>
    <h4>Select Vehicle</h4>
    <div class="vehicle">
      <table border="1">
        <thead>
          <tr>
            <td>Select</td>
            <td>Model</td>
            <td>Vehicle Number</td>
            <td>Capacity</td>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><input type="radio" name="car-assign"></td>
            <td>XUV</td>
            <td>Ts 12 UV 4567</td>
            <td>5</td>
          </tr>
          <tr>
            <td><input type="radio" name="car-assign"></td>
            <td>Swift</td>
            <td>Ts 12 UV 6789</td>
            <td>7</td>
          </tr>
          <tr>
            <td><input type="radio" name="car-assign"></td>
            <td>Creta</td>
            <td>Ts 12 AS 9090</td>
            <td>8</td>
          </tr>
        </tbody>
      </table>
    </div>

    <h4>Select Driver</h4>
    <div class="Driver">
      <table>
        <thead>
          <tr>
            <td>Select</td>
            <td>Driver</td>
            <td>Driver Mobile Number</td>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><input type="radio" name="driver-assign"></td>
            <td>Nishant</td>
            <td>9898898998</td>
          </tr>
          <tr>
            <td><input type="radio" name="driver-assign"></td>
            <td>Sohan Sahil</td>
            <td>7890098765</td>
          </tr>
          <tr>
            <td><input type="radio" name="driver-assign"></td>
            <td>Sashi Sah</td>
            <td>9898898990</td>
          </tr>
        </tbody>
      </table>
      <h4>Remark</h4>
      <input type="text" placeholder="Message" style="width: 97.5%; height:30px;font-size: large;">
      <div class="btn">
        <button id="btn">Assign</button>
      </div>          
    </div>
</div>
</div>
<script>
  // Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

  // When the user clicks on <span> (x), close the modal
span.onclick = function() {
  document.getElementById("modal").style.filter = "blur(0px)";
  document.getElementById("myModal").style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == document.getElementById("myModal")) {
    document.getElementById("modal").style.filter = "blur(0px)";
    document.getElementById("myModal").style.display = "none";
  }
}
  </script>

</body>

</html>