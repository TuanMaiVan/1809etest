
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form name="convertdungluong" action="" method="post">

    <input type="submit" name="submit" value="submit">
    <p>phiên bản php hiện tại </p>
</form>
<?php
if (isset($_REQUEST['submit'])){
    echo 'PHP version:' . phpversion();
}else{
  echo '';
};
?>
</body>
</html>
