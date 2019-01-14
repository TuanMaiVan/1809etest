<?php
echo '<br/>';
$browser = strpos($_SERVER['HTTP_USER_AGENT'],"iPhone");
if ($browser == true)
{
    echo 'Đây là iPhone';
}
else
{
    echo 'Đây không phải là iPhone';
}
$browser1 = strpos($_SERVER['HTTP_USER_AGENT'],"Chrome");
echo '<br/>';
if ($browser == true)
{
    echo 'Đây là Chrome';
}
else
{
    echo 'Đây không phải là Chrome';
}
echo $_SERVER['SERVER_NAME'];

?>