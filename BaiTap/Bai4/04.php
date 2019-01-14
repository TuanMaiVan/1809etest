<html>

<head>
    <title>Lấy địa chỉ Client IP trong PHP</title>
</head>
<body>

<?php
//Kiểm tra xem IP có phải là từ Share Internet
if (!empty($_SERVER['HTTP_CLIENT_IP']))
{
    $ip_address = $_SERVER['HTTP_CLIENT_IP'];
}
//Kiểm tra xem IP có phải là từ Proxy
elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
{
    $ip_address = $_SERVER['HTTP_X_FORWARDED_FOR'];
}
//Kiểm tra xem IP có phải là từ Remote Address
else
{
    $ip_address = $_SERVER['REMOTE_ADDR'];
}
?>
<form name="convertdungluong" action="" method="post">

    <input type="submit" name="submit" value="submit">
</form>
<?php

if ( isset($_REQUEST['submit'])){
    echo 'Đây là địa chỉ ip của bạn'.$ip_address;
}else {
}
?>
</body>
</html>