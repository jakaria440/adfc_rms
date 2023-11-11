<?php
include 'db_connection.php';
include 'functions.php';
?>
<!DOCTYPE html>
<html lang="zxx">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>

  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <title>Welcome to ADFC</title>
  <link rel="icon" href="img/mini_logo.png" type="image/png">

  <link rel="stylesheet" href="css/bootstrap1.min.css" />

  <link rel="stylesheet" href="vendors/themefy_icon/themify-icons.css" />

  <link rel="stylesheet" href="vendors/niceselect/css/nice-select.css" />

  <link rel="stylesheet" href="vendors/owl_carousel/css/owl.carousel.css" />

  <link rel="stylesheet" href="vendors/gijgo/gijgo.min.css" />

  <link rel="stylesheet" href="vendors/font_awesome/css/all.min.css" />
  <link rel="stylesheet" href="vendors/tagsinput/tagsinput.css" />

  <link rel="stylesheet" href="vendors/datepicker/date-picker.css" />
  <link rel="stylesheet" href="vendors/vectormap-home/vectormap-2.0.2.css" />

  <link rel="stylesheet" href="vendors/scroll/scrollable.css" />

  <link rel="stylesheet" href="vendors/datatable/css/jquery.dataTables.min.css" />
  <link rel="stylesheet" href="vendors/datatable/css/responsive.dataTables.min.css" />
  <link rel="stylesheet" href="vendors/datatable/css/buttons.dataTables.min.css" />

  <link rel="stylesheet" href="vendors/text_editor/summernote-bs4.css" />

  <link rel="stylesheet" href="vendors/morris/morris.css">

  <link rel="stylesheet" href="vendors/material_icon/material-icons.css" />

  <link rel="stylesheet" href="css/metisMenu.css">

  <link rel="stylesheet" href="css/style1.css" />
  <link rel="stylesheet" href="css/colors/default.css" id="colorSkinCSS">
</head>

<body class="crm_body_bg">

  <nav class="sidebar">
    <div class="logo d-flex justify-content-between">
      <a class="large_logo" href="index-2.html"><img src="img/logo.png" alt></a>
      <a class="small_logo" href="index-2.html"><img src="img/mini_logo.png" alt></a>
      <div class="sidebar_close_icon d-lg-none">
        <i class="ti-close"></i>
      </div>
    </div>
    <ul id="sidebar_menu">
      <li class>
        <a class="has-arrow" href="#" aria-expanded="false">
          <div class="nav_icon_small">
            <img src="img/menu-icon/dashboard.svg" alt>
          </div>
          <div class="nav_title">
            <span>Select Menu</span>
          </div>
        </a>
        <ul>
          <li><a href="food-menu.php">Food Menu</a></li>
          <li><a href="cost-item.php">Cost Item</a></li>
          <li><a href="daily-cost.php">Daily Cost Posting</a></li>
          <li><a href="daily-sales.php">Daily Sales Item</a></li>
        </ul>
      </li>

    </ul>
  </nav>

  <section class="main_content dashboard_part large_header_bg">

    <div class="d-flex justify-content-center" style="font-family: 'Noto Sans Bengali', sans-serif;">
      
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
    <div class="footer_part">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <div class="footer_iner text-center">
              <p>2023 © Influence - Designed by <a href="#">
                  <i class="ti-heart"></i> </a><a href="#">
                  Dashboard</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  

  <script src="js/jquery1-3.4.1.min.js"></script>

  <script src="js/popper1.min.js"></script>

  <script src="js/bootstrap1.min.js"></script>

  <script src="js/metisMenu.js"></script>

  <script src="vendors/count_up/jquery.waypoints.min.js"></script>

  <script src="vendors/chartlist/Chart.min.js"></script>

  <script src="vendors/count_up/jquery.counterup.min.js"></script>

  <script src="vendors/niceselect/js/jquery.nice-select.min.js"></script>

  <script src="vendors/owl_carousel/js/owl.carousel.min.js"></script>

  <script src="vendors/datatable/js/jquery.dataTables.min.js"></script>
  <script src="vendors/datatable/js/dataTables.responsive.min.js"></script>
  <script src="vendors/datatable/js/dataTables.buttons.min.js"></script>
  <script src="vendors/datatable/js/buttons.flash.min.js"></script>
  <script src="vendors/datatable/js/jszip.min.js"></script>
  <script src="vendors/datatable/js/pdfmake.min.js"></script>
  <script src="vendors/datatable/js/vfs_fonts.js"></script>
  <script src="vendors/datatable/js/buttons.html5.min.js"></script>
  <script src="vendors/datatable/js/buttons.print.min.js"></script>

  <script src="vendors/datepicker/datepicker.js"></script>
  <script src="vendors/datepicker/datepicker.en.js"></script>
  <script src="vendors/datepicker/datepicker.custom.js"></script>
  <script src="js/chart.min.js"></script>
  <script src="vendors/chartjs/roundedBar.min.js"></script>

  <script src="vendors/progressbar/jquery.barfiller.js"></script>

  <script src="vendors/tagsinput/tagsinput.js"></script>

  <script src="vendors/text_editor/summernote-bs4.js"></script>
  <script src="vendors/am_chart/amcharts.js"></script>

  <script src="vendors/scroll/perfect-scrollbar.min.js"></script>
  <script src="vendors/scroll/scrollable-custom.js"></script>

  <script src="vendors/vectormap-home/vectormap-2.0.2.min.js"></script>
  <script src="vendors/vectormap-home/vectormap-world-mill-en.js"></script>

  <script src="vendors/apex_chart/apex-chart2.js"></script>
  <script src="vendors/apex_chart/apex_dashboard.js"></script>

  <script src="vendors/chart_am/core.js"></script>
  <script src="vendors/chart_am/charts.js"></script>
  <script src="vendors/chart_am/animated.js"></script>
  <script src="vendors/chart_am/kelly.js"></script>
  <script src="vendors/chart_am/chart-custom.js"></script>

  <script src="js/dashboard_init.js"></script>
  <script src="js/custom.js"></script>
</body>

</html>