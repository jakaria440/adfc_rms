<?php
include 'db_connection.php';
include 'functions.php';
include 'header.php';
?>
<h3 class="text-center"> মেন্যু লিস্ট</h3>
<div class="container">
  <div class="d-flex justify-content-center">
      
      <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">মেন্যু (বাংলায়)</th>
            <th scope="col">মেন্যু (ইংরেজী)</th>
            <th scope="col">মূল্য (ইংরেজী)</th>
            <th scope="col">পদক্ষেপ</th>
          </tr>
        </thead>
        <tbody>
          <?php

          getList('food_menus', ['menu_en', 'menu_bn', 'menu_price']);

          ?>
        </tbody>
      </table>
      </div>
</div>
<?php include 'footer.php'; ?>
</body>

</html>