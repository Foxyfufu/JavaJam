<?php include "editPrice.php"; ?>
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
                            <li><a href="adminPrice.php">Edit Price</a></li>
                            <li><a href="adminReport.php">Sales Report</a></li>
                        </b>
                    </ul>
                </nav>
            </div> 
            
            <div id="rightcolumn">
                <h2>Click to update product prices:</h2>
        
                <div class="content">
                    <form action='adminPrice.php' method='post'>
                        <table class="musictable" style = "border: 0">
                            <tr>
                                <td>
                                    <input type='checkbox' id='javaRadio' onchange='editJava()'>
                                </td>
                                <th>Just Java</th>
                                <td>Regular house blend decaffeinated coffee, or flavour of the day.<br>
                                    <span>Endless Cup $<?php echo $array[0]['price'] ?></span>
                                    <div id="javaForm"></div>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <input type='checkbox' id='cafeRadio' onchange='editCafe()'>
                                </td>
                                <th>Cafe au Lait</th>
                                <td>House blended coffee infused into a smooth, steamed milk.<br>
                                    <span>Single $<?php echo $array[1]['price'] ?></span>
                                    <span>Double $<?php echo $array[2]['price'] ?></span>
                                    <div id="cafeForm"></div>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <input type='checkbox' id='cappuRadio' onchange='editCappu()'>
                                </td>
                                <th>Iced Cappuccino</th>
                                <td>Sweetened espresso blended with icy-cold milk and served in a chilled glass.<br>
                                    <span>Single $<?php echo $array[3]['price'] ?></span>
                                    <span>Double $<?php echo $array[4]['price'] ?></span>
                                    <div id="cappuForm"></div>                              
                                </td>
                            </tr>

                            <tr>
                                <td><input type='submit' id='submitButton'></td>
                            </tr>
                        </table>
                    </form>
                </div>                  
            </div>  
        </div> 
        
        <footer>
            <small><i>Copyright &copy; 2014 JavaJam Coffeee House</i></small><br>
            <small><i><a href="mailto:XinJie@Lin.com">XinJie@Lin.com</a></i></small>
        </footer>
    </div>
</body>
<script type="text/javascript" src="menu.js"></script>
</html>