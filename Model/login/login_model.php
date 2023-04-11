<?php
function checklogin() {
    include_once('Config/connect.php');
    $user = $_POST['user_name'];
    $pass = $_POST['pass_word'];
    $sql = "SELECT * FROM user WHERE user_name = '$user' AND pass_word = '$pass'";
    
    $count = mysqli_query($connect, $sql);
    $count_1 = mysqli_num_rows(mysqli_query($connect, $sql));
    if($count_1 == 0) {

        return 0;
    }else {
        //login đúng
        $_SESSION['user'] = $user;
        $_SESSION['pass'] = $pass;
        foreach ($count as $item){
            $_SESSION['user_level'] = $item['user_level'];
        }
        return 1;
        
    }
    include_once('Config/close_connect.php');
}
switch($action) {
    case 'checklogin' : $check = checklogin(); break;
}
?>