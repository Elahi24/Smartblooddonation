<html>
  <head>
    <title>donorsfinder</title>
    <link rel="stylesheet" href="searchdonor.css" />
  </head>

  <body>
    <div class="topnav">
      <a class="active" href="./htmlpage.php">About</a>

      <a href="./our_branches.php">Hospitals</a>
      <a href="./searchdonors.php">Request</a>
      <a href="./index.php">Home</a>
    </div>

    <h1
      style="
        color: dodgerblue;
        text-align: center;
        font-size: 60px;
        margin: 20px;
      "
    >
      Are you looking for a donor?
    </h1>

    <h3
      style="
        color: orangered;
        text-align: center;
        font-size: 40px;
        margin: 20px;
      "
    >
      Give detail & save your closest one
    </h3>
    <form action="connection.php" method="post">
      <div class="main">
        <!--<div class="imgcontainer">-->
        <img class="img-hands" src="img/Blood box.jpg" alt="hands" />
      </div>

      <div class="container">
        <label for="message"><b>message</b></label>
        <input
          type="text"
          placeholder="Enter Your Message"
          name="umessage"
          required
        />

        <button type="submit">Send</button>
      </div>
    </form>
  </body>
</html>
