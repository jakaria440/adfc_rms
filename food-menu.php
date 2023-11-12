<?php
include 'db_connection.php';
include 'header.php';


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
  <h3 class="text-center">Menu with Prices - ADFC</h3>
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
<?php include 'footer.php'; ?>
</body>

</html>