<?php
// Database connection information
$host = "localhost";
$username = "root";
$password = "";
$database = "adfc";

// Create a database connection
$conn = mysqli_connect($host, $username, $password, $database);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
$state = 'none';
if (isset($_POST['submit'])) {
    // Get user input
    $report_date = $_POST["report_date"]?:date('Y-m-d');
    $van_fare = $_POST["van_fare"]?:0;
    $bazar = $_POST["bazar"]?:0;
    $salary = $_POST["salary"]?:0;
    $chicken_bill = $_POST["chicken_bill"]?:0;
    $coffee_bill = $_POST["coffee_bill"]?:0;
    $cake_bill = $_POST["cake_bill"]?:0;
    $maintenance = $_POST["maintenance"]?:0;
    $others_bill = $_POST["others_bill"]?:0;
    $customer_feedback = $_POST["customer_feedback"]?:0;
    $other_cost = $_POST["other_cost"]?:'N/A';
    $other_cost_bill = $_POST["other_cost_bill"]?:0;
    $due_cash = $_POST["due_cash"]?:0;
    $hand_cash = $_POST["hand_cash"]?:0;
    $paid_due = $_POST["paid_due"]?:0;
    $cash_in_home = $_POST["cash_in_home"]?:0;

  // Insert data into the database
  $sql = "INSERT INTO daily_cost (van_fare, bazar, salary, chicken_bill, coffee_bill, cake_bill, maintenance, others_bill, customer_feedback, other_cost, other_cost_bill, due_cash, hand_cash, paid_due, cash_in_home,report_date)
           VALUES ('$van_fare', '$bazar', '$salary', '$chicken_bill', '$coffee_bill', '$cake_bill', '$maintenance', '$others_bill', '$customer_feedback', '$other_cost', '$other_cost_bill', '$due_cash', '$hand_cash', '$paid_due', '$cash_in_home', '$report_date')";

  if (mysqli_query($conn, $sql)) {
    $state = 'block';
    echo "<script>showToast('Data inserted successfully');window.location.href = 'index.php';</script>";
    
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
}

// Close the database connection
mysqli_close($conn);
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
  <h1 class="text-center">Daily Costing - ADFC</h1>
  <div class="d-flex justify-content-center">
  <div id="toast" style="display: none; position: fixed; bottom: 10px; left: 10px; background-color: #333; color: #fff; padding: 10px; border-radius: 5px;">
        <!-- Toast message will appear here -->
    </div>

    <form  method="POST" action="">
      <input type="date" name="report_date" class="form-control" value="<?php echo date('Y-m-d'); ?>">
      <div style="padding:10px;"></div>
      <table class="table table-bordered border-primary" style="table-layout: fixed; width: 580px">
      <colgroup>
        <col style="width: 49px">
        <col style="width: 130px">
        <col style="width: 107px">
        <col style="width: 277px">
      </colgroup>
      <thead class="text-center">
        <tr>
          <th>ক্রঃনং </th>
          <th>খরচের খাত </th>
          <th>টাকার পরিমান </th>
          <th rowspan="8">বাকী বিক্রয়ের নোট</th>
        </tr>
      </thead>
      
        <tbody>
          <tr>
            <td>১।</td>
            <td>ভ্যান ভাড়া</td>
            <td><input type="number" required class="form-control input_amount" name="van_fare" /></td>
          </tr>
          <tr>
            <td>২।</td>
            <td>বাজার</td>
            <td><input type="number" class="form-control input_amount" name="bazar" /></td>
          </tr>
          <tr>
            <td>৩।</td>
            <td>বেতন</td>
            <td><input type="number" required class="form-control input_amount" name="salary" /></td>
          </tr>
          <tr>
            <td>৪।</td>
            <td>মুরগীর বিল</td>
            <td><input type="number" class="form-control input_amount" name="chicken_bill" /></td>
          </tr>
          <tr>
            <td>৫।</td>
            <td>কফি বিল</td>
            <td><input type="number" class="form-control input_amount" name="coffee_bill" /></td>
          </tr>
          <tr>
            <td>৬।</td>
            <td>কেক বিল</td>
            <td><input type="number" class="form-control input_amount" name="cake_bill" /></td>
          </tr>
          <tr>
            <td>৭।</td>
            <td>মেরামত</td>
            <td><input type="number" class="form-control input_amount" name="maintenance" /></td>
          </tr>
          <tr>
            <td>৮। </td>
            <td>অন্যান্য </td>
            <td><input type="number" class="form-control input_amount" name="others_bill" /></td>
            <td rowspan="8">বিশেষ নোট/কাস্টমারের মন্তব্য <textarea name="customer_feedback"></textarea></td>
          </tr>
          <tr>
            <td>৯। </td>
            <td><input type="text" class="form-control" name="other_cost" /></td>
            <td><input type="number" class="form-control input_amount" name="other_cost_bill" /></td>
          </tr>
          <tr>
            <td colspan="2">সর্বমোট খরচঃ </td>
            <td><span id="total_cost">0</span></td>
          </tr>
          <tr>
            <td colspan="2">বাকী বিক্রয়ঃ </td>
            <td><input type="number" class="form-control input_due" name="due_cash" /></td>
          </tr>
          <tr>
            <td colspan="2">আজকের ক্যাশঃ </td>
            <td><input type="number" required class="form-control input_cash" name="hand_cash" /></td>
          </tr>
          <tr>
            <td colspan="2">সর্বমোট বেচাকেনাঃ </td>
            <td><span id="total_sale">0</span></td>
          </tr>
          <tr>
            <td colspan="2">বকেয়া আদায় (যদি থাকে)ঃ </td>
            <td><input type="number" class="form-control due_collect" name="paid_due" /></td>
          </tr>
          <tr>
            <td colspan="2">বাড়ীর ক্যাশে জমাঃ </td>
            <td><input type="number" required class="form-control cash_home" name="cash_in_home" /></td>
          </tr>
        </tbody>

      </table>
      <input type="submit" class="form-control btn btn-success" name="submit" value="সংরক্ষন করি" />
      <div style="padding:10px;"></div>
    </form>
  </div>
  

  <script>
    $(document).ready(function() {
      $(".input_amount, .input_due, .input_cash").keyup(function() {
        calculateSum();
      });
    });

    function calculateSum() {
      var sum = 0;
      var totalSale = 0;

      $(".input_amount, .input_due, .input_cash").each(function() {
        if (!isNaN(this.value) && this.value.length !== 0) {
          if ($(this).hasClass("input_amount")) {
            sum += parseFloat(this.value);
          } else if ($(this).hasClass("input_due")) {
            totalSale = sum + parseFloat(this.value);
          } else if ($(this).hasClass("input_cash")) {
            totalSale += parseFloat(this.value);
          }
        }
      });

      $("#total_cost").html(sum.toFixed(2));
      $("#total_sale").html(totalSale.toFixed(2));
    }
  </script>
  <script>
        function showToast(message) {
            var toast = document.getElementById("toast");
            toast.innerText = message;
            toast.style.display = "block";
            setTimeout(function () {
                toast.style.display = "none";
            }, 3000); // Hide the toast after 3 seconds
        }
    </script>

</body>

</html>