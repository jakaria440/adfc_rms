<?php
include 'db_connection.php';
include 'header.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){
  $item_en = $_POST["item_en"];
  $item_bn = $_POST["item_bn"];

  // Insert data into the database
  $sql = "INSERT INTO costing_items (item_en, item_bn) VALUES ('$item_en', '$item_bn')";

  if (mysqli_query($conn, $sql)) {
    echo "Data inserted into database!";
    header("Location:cost-item.php");
    
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
          <label for="exampleFormControlInput1" class="form-label">খরচের খাত(বাংলায়)</label>
          <input type="text" required name="item_en" class="form-control" id="exampleFormControlInput1" placeholder="ভ্যান ভাড়া">
        </div>
        <div class="row mb-3">
          <label for="exampleFormControlInput1" class="form-label">খরচের খাত(ইংরেজী)</label>
          <input type="text" required name="item_bn" class="form-control" id="exampleFormControlInput1" placeholder="Van Fare">
        </div>
        <input type="submit" class="btn btn-info" value="সংরক্ষন করুন"/>
      </div>
    </form>
    </div>
<?php include 'footer.php'; ?>
</body>

</html>