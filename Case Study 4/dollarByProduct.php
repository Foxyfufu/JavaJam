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
            echo 'Error: Could not connect to database.  Please try again later.';
        exit;
        }
        $query="SELECT * FROM priceTable INNER JOIN salesTable
        ON salesTable.product_id = priceTable.id";
        $result = $db -> query($query);
        $rowNum = $result->num_rows;
        $array = array();
        for ($i=0; $i < $rowNum; $i++){
            $row = $result->fetch_assoc();
            $row['revenue']=$row['quantity']*$row['price'];
            array_push($array,$row);
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
                <h2>Total dollar sales by products</h2>
                <?php
                    $javaRevenue = $array[0]['revenue'];
                    $cafeRevenue = $array[1]['revenue'] + $array[2]['revenue'];
                    $cappuRevenue = $array[3]['revenue'] + $array[4]['revenue'];
                    $totalRevenue = $javaRevenue + $cafeRevenue + $cappuRevenue;
                    $greatest = max($javaRevenue, $cafeRevenue, $cappuRevenue);

                    if($javaRevenue == $greatest)
                        echo "<h3>Highest Revenue generated from: Just Java</h3>";
                    else if($cafeRevenue == $greatest)
                        echo "<h3>Highest Revenue generated from: Cafe Au Lait</h3>";
                    else if($cappuRevenue == $greatest)
                        echo "<h3>Highest Revenue generated from: Iced Cappuccino</h3>";
                ?>

                <div class="content">
                    <table class="reportTable" style = "border: 0">
                        <tr>
                            <th style = "text-align: left; padding-left: 0px">Product</th> 
                            <th>Dollar Sales (Single)</th>      
                            <th>Dollar Sales (Double)</th>
                            <th>Subtotal</th>                                            
                        </tr>
                        
                        <?php
                            echo "<tr><td style = \"text-align: left\">Just Java</td>";
                            echo "<td>\${$javaRevenue}</td>";
                            echo "<td>-</td>";
                            echo "<td>\${$javaRevenue}</td></tr>";
                        ?>   

                        <?php
                            echo "<tr><td style = \"text-align: left\">Cafe au Lait</td>";
                            echo "<td>\${$array[1]['revenue']}</td>";
                            echo "<td>\${$array[2]['revenue']}</td>";
                            echo "<td>\${$cafeRevenue}</td></tr>";
                        ?>

                        <?php
                            echo "<tr><td style = \"text-align: left\">Iced Cappuccino</td>";
                            echo "<td>\${$array[3]['revenue']}</td>";
                            echo "<td>\${$array[4]['revenue']}</td>";
                            echo "<td>\${$cappuRevenue}</td></tr>";
                        ?>

                        <?php
                            echo "<tr><th style=\"text-align:right; padding-right:10px;\" colspan=\"3\">Grand Total: </th>";
                            echo "<td>\${$totalRevenue}</td><?th>";
                        ?>
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