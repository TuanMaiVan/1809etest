<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form name="convertdungluong" action="" method="post">
    <label>Nhập chuỗi</label>
    <input type="text" name="chuoi" value="<?php echo $chuoi;?>">
    <input type="submit" name="enter" value="enter">
</form>
<?php
$chuoi = '';
if(isset($_REQUEST['enter'])){

    $chuoi = $_REQUEST['chuoi'];
    echo strlen($chuoi);
}else{

};

?>
</body>