<html>


<head>

 <title>project</title>
 <link rel="stylesheet" href="lets.css">


</head>

<body>

 <div class="topnav">
  <a class="active" href="./htmlpage.php">About</a>

  <a href="./our_branches.php">Hospitals</a>
  <a href="./searchdonors.php">Request</a>
  <a href="./index.php">Home</a>
 </div>

 <div>

  <h1 style="color:dodgerblue;text-align:center;">Smart Blood Donation System</h1>
 </div>

 <form action="connection.php" method="post">
  <div class="main">
   <!--<div class="imgcontainer">-->
   <img class="img-hands" src="img/Blood box.jpg" alt="hands">
  </div>

  <div class="container">
   <label for="username"><b>Username</b></label>
   <input type="text" placeholder="Enter Username" name="username" id="username" required>


   <label for="address"><b>Adress</b></label>
   <input type="text" placeholder="Enter Adress" name="address" id="address" required>

   <label for="bdgroup"><b>BG</b></label>
   <input type="text" placeholder="Enter Blood Group" name="bdgroup" id="bg" required>

   <label for="agee"><b>AGE</b></label>
   <input type="text" placeholder="Enter Your Age" name="agee" id="age" required>


   <button type="submit" name="hello">Submit</button>

  </div>

  <div class="container" style="background-color:#f1f1f1">
   <button type="button" class="cancelbtn">Cancel</button>

  </div>
  </div>
  <!--main finished-->
 </form>


</body>

</html>