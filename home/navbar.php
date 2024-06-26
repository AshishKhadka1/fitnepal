<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700;900&display=swap" rel="stylesheet">
</head>

<style>
  * {
    font-family: "Poppins", sans-serif;
    font-weight: 400;
    font-style: normal;
  }

  body {
    margin: 0;
    padding: 0;
    /* background-color: white; */
  }

  .navbar {
    background-color: #378ce7;
    display: flex;
    justify-content: space-between;
    overflow: hidden;
    text-align: right;
    padding: 25px 20px;
  }

  .navbar a {
    display: inline-block;
    text-align: center;
    text-decoration: none;
    font-size: 22px;
    margin-right: 20px;
    color: white;
  }

  .nav-links {
    display: flex;
    gap: 20px;
  }

  .navbar .logo {
    float: left;
    font-size: 22px;
    font-weight: bold;
    text-decoration: none;
  }

</style>

<body>
  <header class="navbar">
    <div>
      <a href="index.php" class="logo">FitNepal</a>

    </div>
    <div class="nav-links">
      <a href="index.php">Home</a>
      <a href="bmi.php">BMI</a>
      <a href="diet.php">Pricing</a>
      <a href="workout.php">About</a>
      <a href="?logout=true">Contact US</a>

    </div>

  </header>
</body>

</html>