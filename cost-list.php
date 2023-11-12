<?php
include 'db_connection.php';
include 'functions.php';
include 'header.php';
?>
<h3 class="text-center"> মেন্যুভিত্তিক বিক্রয়ের পরিমাণ</h3>
<div class="container">
  <div class="d-flex justify-content-center">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">খরচের খাত(বাংলায়)</th>
          <th scope="col">খরচের খাত(ইংরেজী)</th>
          <th scope="col">পদক্ষেপ</th>
        </tr>
      </thead>
      <tbody>
        <?php

        getList('costing_items', ['item_en', 'item_bn']);

        ?>
      </tbody>
    </table>
  </div>
</div>
<?php include 'footer.php'; ?>
</body>

</html>