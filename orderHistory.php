<?php
    include 'includes/header.php';
    include 'includes/left-bar.php';
    include 'config/database.php';
?>
<div class="col-md-10" style="
    background-image: url('images/order.jpg'); 
    background-size: cover; 
    background-position: center; 
    min-height: 670px;
    color: white;">
    <br/>
    <?php
        
    echo "<div class='col-md-2 game'>";
        echo "<center><h4 style='color:black;'><u>Product Image</u></h4></center>";
    echo "</div>";
    echo "<div class='col-md-3 game'>";
        echo "<center><h4 style='color:black;'><u>Product Name</u></h4></center>";
    echo "</div>";
    echo "<div class='col-md-2 game'>";
        echo "<center><h4 style='color:black;'><u>Price Per Unit</u></h4></center>";
    echo "</div>";
    echo "<div class='col-md-1 game'>";
        echo "<center><h4 style='color:black;'><u>Quantity</u></h4></center>";
    echo "</div>";
    echo "<div class='col-md-3 game'>";
        echo "<center><h4 style='color:black;'><u>Options</u></h4></center>";
    echo "</div>";
    echo "<div class='col-md-1 game'>";
        echo "<center><h4 style='color:black;'><u>Null</u></h4></center>";
    echo "</div>";
    
        if(isset($_REQUEST['orders'])) {
            $profile = $_REQUEST['orders'];
        } else {
            $profile = $_SESSION['suid'];
        }
        $uid = $_SESSION['suid'];
        $sum = 0;
        $res = mysqli_query($link, "SELECT * FROM cart WHERE uid='$profile' AND isOrdered='1'") or die(mysqli_error($link));
        while ($arr = mysqli_fetch_row($res)) {
            $pid = $arr[1];
            $res1 = mysqli_query($link, "SELECT * FROM product WHERE id='$pid'") or die(mysqli_error($link));
            while ($arr1 = mysqli_fetch_row($res1)) {
                echo "<div class='col-md-1 game' style='height:120px;top:45px'>";
                    echo "<div class='game-add'><button name='add' value='$arr[1]' class='btn btn2' type='submit'>$arr[4]</button></div>";
                echo "</div>";
                echo "<div class='col-md-1 game' style='height:120px;top:45px'>";
                    echo "<div class='game-add'><button name='add' value='$arr[1]' class='btn btn2' type='submit'>$arr[5]</button></div>";
                echo "</div>";
                echo "<div class='col-md-2 game'>";
                    echo "<a href='$arr1[2]'><img src='$arr1[2]' style='height:100px' alt='$arr1[4]'/></a>";
                echo "</div>";
                echo "<div class='col-md-3 game' style='height:120px;top:50px'>";
                    echo "<div class='game-title'>$arr1[4]</div>";
                echo "</div>";
                echo "<div class='col-md-2 game' style='height:120px;top:50px'>";
                    echo "<div class='game-title'>$$arr1[3]</div>";
                echo "</div>";
                echo "<div class='col-md-1 game' style='height:120px;top:50px'>";
                    echo "<input type='textbox' name='quantity' placeholder='$arr[2]' style='height:35px;width:80px;color:black;' name='a'/>";
                echo "</div>";
                echo "<div class='col-md-1 game' style='height:120px;top:45px'>";
                    $sum = ($arr[2] * $arr1[3]);
                    echo "<div class='game-add'><a href='ordercfm.php'><button name='subject' value='$arr[1]' class='btn btn2' type='submit'>$;$sum</button></a></div>";
                echo "</div>";
                echo "<div class='col-md-1 game' style='height:120px;top:45px'></div>";
                $sum = $sum + ($arr[2] * $arr1[3]);
            }    
        }
    ?>
    <?php
        include 'includes/dashboardMenu.php';
    ?> 
<?php include 'includes/footer.php'?>
