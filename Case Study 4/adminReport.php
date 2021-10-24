<!DOCTYPE html>
<html lang="en">

<head>
    <title>JavaJam Coffee House</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
</head>

<body>
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
                <h2>Click to generate daily sales report:</h2>
        
                <div class="content">
                    <table class="reportTable" style = "border: 0; text-align: left">
                        <tr>
                            <td>
                                <input type='checkbox' id='generateDollar' onclick='generateDollarByProduct()'>
                            </td>
                            <td>
                                <p><h3>Total dollar sales by products</h3></p>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <input type='checkbox' id='generateQuantity' onclick='generateQuantityByCategory()'>
                            </td>
                            <td>
                                <p><h3>Sales quantities by product categories</h3></p>
                            </td>
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