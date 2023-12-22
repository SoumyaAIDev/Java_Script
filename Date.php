<?php
date_default_timezone_set('Asia/Kolkata');
if(!isset($_COOKIE['visited']))
{
echo "New Visit!";
setcookie('visited', date('j/m/Y H:i:s a'), time() + 3600);
}
else
{
echo "Last Visited on ".$_COOKIE['visited'];
setcookie('visited', date('j/m/Y H:i:s a'));
}
?>
