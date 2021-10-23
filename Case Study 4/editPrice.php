<?php
    @ $db = new mysqli('localhost', 'f32ee', 'f32ee', 'f32ee');

    if (mysqli_connect_errno()) {
        echo 'Error: Could not connect to database. Please try again later.';
        exit;
    }

    $query = "SELECT * FROM priceTable";
    $result = $db -> query($query);
    $arr_rows = $result -> num_rows;
    $array = array();
    for ($i =0; $i < $arr_rows; $i++) {
        $row = $result -> fetch_assoc();
        array_push($array, $row);
    }
?>

<?php
    $updatedJavaPrice=$_POST['updatedJavaPrice'];
    $updatedCafeSinglePrice=$_POST['updatedCafeSinglePrice'];
    $updatedCafeDoublePrice=$_POST['updatedCafeDoublePrice'];
    $updatedCappuSinglePrice=$_POST['updatedCappuSinglePrice'];
    $updatedCappuDoublePrice=$_POST['updatedCappuDoublePrice'];

    $priceUpdate = array(1=>$updatedJavaPrice, 2=>$updatedCafeSinglePrice, 3=>$updatedCafeDoublePrice, 4=>$updatedCappuSinglePrice, 5=>$updatedCappuDoublePrice);

    @ $db = new mysqli('localhost','f32ee','f32ee','f32ee');

    if(mysqli_connect_errno()){
        echo 'Error: Could not connect to database. Please try again later.';
	    exit;
    }
    foreach($priceUpdate as $ID => $updatedPrice) {
        if ($updatedPrice) {
            $query = "UPDATE priceTable SET price = ".$updatedPrice." WHERE id = ".$ID.";";
            $result = $db->query($query);

            if ($result) {          
                header("Refresh:0");       
              } else {
                  echo "<br>An error has occurred. The price was not updated. Please try again";
              }
        }
    }
?>