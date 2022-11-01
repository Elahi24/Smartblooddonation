<?php

    
    $conn = mysqli_connect("localhost:3307","root","","blood");
    if ($conn->connect_error){
         die("Connection failed: " . $conn->connect_error);
    }

 @$username=$_POST['username'];
 @$address=$_POST['address'];
 @$bg=$_POST['bdgroup'];
 @$age=$_POST['agee'];
 @$message=$_POST['umessage'];

 $sql = "INSERT INTO store (uname, adress, bg,age)
 VALUES ('$username', '$address', '$bg','$age')";
 if ($conn->query($sql) === TRUE) {
  header("Location: searchdonors.php");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
 $sql2 = "INSERT INTO message (message)
 VALUES ('$message')";

if ($conn->query($sql2) === TRUE) {
  header("Location: searchdonors.php");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>