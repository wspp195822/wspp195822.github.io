<?php
$servername = "localhost";
$username = "root";
$password = "lyh195822";
 
// 创建连接
$conn = new mysqli($servername, $username, $password);
 
// 检测连接
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
} 
echo "连接成功";
$user = 'select easy_user_id,easy_user,easy_password from easyuser';
mysqli_select_db($conn,'easymusic');
$login = mysqli_query( $conn, $user );
$lo = mysqli_fetch_array($login,MYSQLI_ASSOC);
$input_user = $_POST["fname"];
$input_pass = $_POST["age"];
if($input_user != $lo['easy_user'] or $input_pass != $lo['easy_password']){
    echo '密码或用户名错误';
}else{
    echo '欢迎登录';
}
?>