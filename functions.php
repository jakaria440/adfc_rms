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

function getMonthlyData($month, $year, $dataType) {
    global $conn;

    $sales = "SUM(van_fare) + 
                SUM(bazar) + 
                SUM(salary) + 
                SUM(chicken_bill) + 
                SUM(coffee_bill) + 
                SUM(cake_bill) + 
                SUM(maintenance) + 
                SUM(others_bill) + 
                SUM(other_cost_bill) + 
                SUM(due_cash) + 
                SUM(hand_cash)";
    $bazar = "SUM(bazar)";
    $costing = "SUM(van_fare) + 
                SUM(bazar) + 
                SUM(salary) + 
                SUM(chicken_bill) + 
                SUM(coffee_bill) + 
                SUM(cake_bill) + 
                SUM(maintenance) + 
                SUM(others_bill) + 
                SUM(other_cost_bill) + 
                SUM(due_cash)";
    $cash = "SUM(cash_in_home)";


    if($dataType == 'cash'){
        $sql = "SELECT ".$cash." as totalDataType FROM daily_cost WHERE MONTH(report_date) = '$month' AND YEAR(report_date) = '$year'";
                
    }elseif($dataType == 'bazar'){
        $sql = "SELECT ".$bazar." as totalDataType FROM daily_cost WHERE MONTH(report_date) = '$month' AND YEAR(report_date) = '$year'";
    }elseif($dataType == 'costing'){
        $sql = "SELECT ".$costing."as totalDataType FROM daily_cost WHERE MONTH(report_date) = '$month' AND YEAR(report_date) = '$year'";
    }else{
        $sql = "SELECT ".$sales." as totalDataType FROM daily_cost WHERE MONTH(report_date) = '$month' AND YEAR(report_date) = '$year'";
    }
    $result = mysqli_query($conn, $sql);
    if ($result) {
        $row = mysqli_fetch_assoc($result);
        return $row['totalDataType'];            
    } else {
        return 0;
    }

    
}

function getList($table, array $columns){
    global $conn;
    $sql = "SELECT * FROM ".$table;
    $sl =1;
    $result = mysqli_query($conn, $sql);
    
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $sl++ . "</td>";
            $columnCount = count($columns);
            for ($i = 0; $i < $columnCount; $i++) {
                echo "<td>" . $row[$columns[$i]] . "</td>";
            }
            
            echo '<td>
                    <a href="edit_page.php?id='.$row['id'].'&table='.$table.'" class="btn btn-primary btn-sm rounded-0" title="Edit">
                        <i class="fa fa-edit"></i>
                    </a>
                    <a href="delete_page.php?id='.$row['id'].'&table='.$table.'" class="btn btn-primary btn-sm rounded-0" title="Edit">
                        <i class="fa fa-trash"></i>
                    </a>                        
                </td>';
            echo "</tr>";
        }
    }
}



?>
