<?php
$title='update interface';
$hide_path=1;
include_once($_SERVER['DOCUMENT_ROOT'].'/global/header.php');

echo '<br />';
if(isset($_GET['golive']))
{
  echo '<p>'.exec('/var/www/golive').'</p>';
  echo '<p>Live site updated!</p>';
}
elseif(isset($_GET['updatesvn']))
{
  echo '<p>'.exec('/var/www/updatesvn').'</p>';
  echo '<p>Preview site updated.</p>';
}
else
{
  echo '<p><h3><a href="/x?updatesvn">Update the preview site now</a></h3></p>
  <p><h3><a href="/x?golive">Push changes to the live site now</a></h3></p>';
}

include_once($_SERVER['DOCUMENT_ROOT'].'/global/footer.php');
?>