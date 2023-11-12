<?php
include 'header.php';
include 'functions.php';
?>
<div class="row">
    <div class="col-12">
        <div class="page_title_box d-flex flex-wrap align-items-center justify-content-between">
            <div class="page_title_left d-flex align-items-center">
                <h3 class="f_s_25 f_w_700 dark_text mr_30">Dashboard</h3>
                <ol class="breadcrumb page_bradcam mb-0">
                    <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
                    <li class="breadcrumb-item active">Analytic</li>
                </ol>
            </div>
            <div class="page_title_right">
                <div class="page_date_button d-flex align-items-center">
                    <img src="img/icon/calender_icon.svg" alt>
                    <?= date('d, F Y', strtotime(date("Y-m-d"))); ?>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row ">
    <div class="col-xl-8 ">
        <div class="white_card mb_30 card_height_100">
            <div class="white_card_header">
                <div class="row align-items-center justify-content-between flex-wrap">
                    <div class="col-lg-4">
                        <div class="main-title">
                            <h3 class="m-0">Monthly Sales Report</h3>
                        </div>
                    </div>
                    <div class="col-lg-4 text-end d-flex justify-content-end">
                        <select class="nice_Select2 max-width-220">
                            <option value="1">Show by month</option>
                            <option value="1">Show by year</option>
                            <option value="1">Show by day</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="white_card_body">
                <div id="management_bar"></div>
            </div>
        </div>
    </div>
    <div class="col-xl-4 ">
        <div class="white_card card_height_100 mb_30 user_crm_wrapper">
            <b>Current Month's</b>
            <div class="row">
                <div class="col-lg-6">
                    <div class="single_crm">
                        <div class="crm_head d-flex align-items-center justify-content-between">
                            <div class="thumb">
                                <img src="img/crm/businessman.svg" alt>
                            </div>
                            <i class="fas fa-ellipsis-h f_s_11 white_text"></i>
                        </div>
                        <div class="crm_body">
                            <h4><?= getMonthlyData(date('m'), date('Y'), 'sales') ?></h4>
                            <p>Sales</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="single_crm ">
                        <div class="crm_head crm_bg_1 d-flex align-items-center justify-content-between">
                            <div class="thumb">
                                <img src="img/crm/customer.svg" alt>
                            </div>
                            <i class="fas fa-ellipsis-h f_s_11 white_text"></i>
                        </div>
                        <div class="crm_body">
                            <h4><?= getMonthlyData(date('m'), date('Y'), 'cash') ?></h4>
                            <p>Cash</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="single_crm">
                        <div class="crm_head crm_bg_2 d-flex align-items-center justify-content-between">
                            <div class="thumb">
                                <img src="img/crm/infographic.svg" alt>
                            </div>
                            <i class="fas fa-ellipsis-h f_s_11 white_text"></i>
                        </div>
                        <div class="crm_body">
                            <h4><?= getMonthlyData(date('m'), date('Y'), 'bazar') ?></h4>
                            <p>Bazar</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="single_crm">
                        <div class="crm_head crm_bg_3 d-flex align-items-center justify-content-between">
                            <div class="thumb">
                                <img src="img/crm/sqr.svg" alt>
                            </div>
                            <i class="fas fa-ellipsis-h f_s_11 white_text"></i>
                        </div>
                        <div class="crm_body">
                            <h4><?= getMonthlyData(date('m'), date('Y'), 'costing') ?></h4>
                            <p>Costings</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<?php include 'footer.php'; ?>

</body>
</html>