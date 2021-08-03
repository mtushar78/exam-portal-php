<?php
require_once "quesitions.php";
session_start();
// print_r($_SESSION["user_name"]) ;

$point = 0;
$attempts=0;
if(isset($_POST) && !empty($_POST)){
    // echo "<br>";
//    print_r($_POST);
    $post_arr = $_POST;

    foreach($post_arr as $key => $val){

        // echo "key:     " . $key ."   value:       ". $val . "<br>";
        if(trim($val) == trim($qa["answers"][$key]["ca"])){
            $point = $point + 5;
            // echo "[if]value of point: ". $point . "<br>";
        }
        else{
            $point = $point - 3;
            // echo "(else) value of point: ". $point . "<br>";
        }

    }
    //if(!isset($_SESSION['attempts'])){
    if(!array_key_exists("attempts",$_SESSION)){
        $_SESSION['attempts'] = array();
        array_push($_SESSION['attempts'], $point);
    }else{
        array_push($_SESSION['attempts'], $point);
    }
    print_r($_SESSION['attempts']);
}
?>
<h1> <?php echo $_SESSION["user_name"] ;?>, Your Score Is: <br></h1>
<?php 
foreach($_SESSION['attempts'] as $key => $value){
?>
<label>Attempt <?php echo $key+1 . ",";?> Score: <?php echo $value . "<br>";?></label>
<?php } ?>
<a href="selection.php">Try again</a>
<a href="signout.php">Logout</a>
