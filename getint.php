<?php
  $SensorValue = $_GET["SensorValue"];
  echo "the number will add is: ";
   echo $SensorValue ;
  echo "<br><br>";

  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "sensor";
  
  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  
  $sql = "INSERT INTO sen_num (number)
  VALUES ('$SensorValue')";
  
  if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  
  $conn->close();
?>