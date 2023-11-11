<?php
include 'db_connection.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){
  $item_en = $_POST["menu_en"];
  $item_bn = $_POST["menu_bn"];
  $price = $_POST["menu_price"];

  // Insert data into the database
  $sql = "INSERT INTO food_menus (menu_en, menu_bn,menu_price) VALUES ('$item_en', '$item_bn','$price')";

  if (mysqli_query($conn, $sql)) {
    echo "Data inserted into database!";
    header("Location:food-menu.php");
    
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }

}
  

?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Daily Posting-ADFC</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Bengali:wght@200;400&display=swap" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</head>

<body style="font-family: 'Noto Sans Bengali', sans-serif;">
  <h1 class="text-center">Menu with Prices - ADFC</h1>
  <div class="container">
    <form method="POST" action="" class="row justify-content-center">
      <div class="col-6">
        <div class="row mb-3">
          <label for="exampleFormControlInput1" class="form-label">মেন্যু (বাংলায়)</label>
          <input type="text" required name="menu_en" class="form-control" id="exampleFormControlInput1" placeholder="বার্গার">
        </div>
        <div class="row mb-3">
          <label for="exampleFormControlInput1" class="form-label">মেন্যু (ইংরেজী)</label>
          <input type="text" required name="menu_bn" class="form-control" id="exampleFormControlInput1" placeholder="Burger">
        </div>
        <div class="row mb-3">
          <label for="exampleFormControlInput1" class="form-label">মূল্য (ইংরেজী)</label>
          <input type="text" required name="menu_price" class="form-control" id="exampleFormControlInput1" placeholder="60">
        </div>
        <input type="submit" class="btn btn-info" value="সংরক্ষন করুন"/>
      </div>
    </form>
  </div>

</body>

</html>