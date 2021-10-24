<!DOCTYPE html>
<html lang="en">

<head>
    <title>JavaJam Coffee House</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <?php 
        @ $db = new mysqli('localhost', 'f32ee', 'f32ee', 'f32ee');
        if(mysqli_connect_errno()){
            echo 'Error: Could not connect to database. Please try again later.';
        exit;
        }

        $query="SELECT * FROM salesTable INNER JOIN priceTable
        ON salesTable.product_id = priceTable.id";
        $result = $db -> query($query);
        $rowNum = $result->num_rows;
        $array = array();
        for ($i=0; $i < $rowNum; $i++){
            $row = $result->fetch_assoc();
            $row['revenue']=$row['quantity']*$row['price'];
            array_push($array,$row);
        }
        foreach ($array as $key => $value) {
            if($array[$key]['type'] == "Single" || $array[$key]['type'] == "Endless Cup"){
                $singleQuantity += $array[$key]['quantity'];
                $singleRevenue += $array[$key]['revenue'];
            }       
            elseif($array[$key]['type'] == "Double"){
                $doubleQuantity += $array[$key]['quantity'];
                $doubleRevenue += $array[$key]['revenue'];
            }
        }
    ?>

    <div id="wrapper">
        <header>
            <h1>
                <img src="assets/javajamlogo.png" alt="Logo">
            </h1>
        </header>
    
        <div id="columns">
            <div id="leftcolumn">
                <nav>
                    <ul>
                        <b> 
                            <li><a href="index.html">Home</a></li>
                            <li><a href="menu.php">Menu</a></li>
                            <li><a href="music.html">Music</a></li>
                            <li><a href="jobs.html">Jobs</a></li>
                            <li><a href="adminMenu.php">Edit Price</a></li>
                            <li><a href="adminReport.php">Sales Report</a></li>
                        </b>
                    </ul>
                </nav>
            </div> 
            
            <div id="rightcolumn">
                <h2>Sales quantities by product categories</h2>
                <?php
                    if ($singleRevenue > $doubleRevenue) {
                        echo "<h3>Category that generated highest dollar sales: Single</h3>";
                    }

                    else if ($singleRevenue == $doubleRevenue){
                        echo "<h3>Both categories generated the same amount of dollar sales</h3>";
                    }
                    else {
                        echo "<h3>Category that generated highest dollar sales: Double</h3>";
                    }

                ?>

                <div class="content">
                    <table class="reportTable">
                        <tr>
                            <th style = "text-align: left; padding-left: 0px">Product</th>
                            <th>Product Category</th>
                            <th>Dollar Sales</th>
                            <th>Quantity</th>                          
                        </tr>
                            
                        <?php 
                            foreach($array as $key=>$value) {
                                if($array[$key]['type'] == "Single" || $array[$key]['type'] == "Endless Cup"){
                                    echo "<tr><td style = \"text-align: left\">{$array[$key]['coffeename']}</td>";
                                    echo "<td>Single</td>";
                                    echo "<td>\${$array[$key]['revenue']} </td>";
                                    echo "<td>{$array[$key]['quantity']} </td></tr>";                                   
                                }
                            }
                            echo "<tr><td style=\"text-align:right; padding-right:10px;\" colspan=\"3\">
                                    <b>Total Quantity (Single):</b>
                                </td>
                                <td>
                                    <b>$singleQuantity</b>
                                </td></tr>"
                            ;
                        ?>

                        <?php 
                            foreach($array as $key=>$value) {
                                if($array[$key]['type'] == "Double"){
                                    echo "<tr><td style = \"text-align: left\">{$array[$key]['coffeename']} </td>";
                                    echo "<td>Double</td>";
                                    echo "<td>\${$array[$key]['revenue']} </td>";
                                    echo "<td>{$array[$key]['quantity']} </td></tr>";                                   
                                }
                            }
                            echo "<tr><td style=\"text-align:right; padding-right:10px;\" colspan=\"3\">
                                    <b>Total Quantity (Double):</b>
                                </td>
                                <td>
                                    <b>$doubleQuantity</b>
                                </td></tr>"
                            ;
                        ?>
                        </tr> 
                    </table>                   
                </div>                  
            </div>  
        </div> 
        
        <footer>
            <small><i>Copyright &copy; 2014 JavaJam Coffeee House</i></small><br>
            <small><i><a href="mailto:XinJie@Lin.com">XinJie@Lin.com</a></i></small>
        </footer>
    </div>
</body>
<script type="text/javascript" src="report.js"></script>
</html>