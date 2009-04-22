<?php

//get the system path for the page of which this script is included
$cdirectory = $_SERVER['DOCUMENT_ROOT'].$_SERVER['PHP_SELF'];

//works only for index.php pages for now...
$cdirectory = str_replace('index.php','', $cdirectory);

$dir_handle = @opendir($cdirectory) or die('Unable to open directory.');

echo 'Directory Listing of '.$cdirectory.'<br />';
//list each item
while ($file = readdir($dir_handle)) 
{
  if ($file != '.DS_Store' and $file != '.svn' and $file != 'recent.php' and $file != 'index.php' and $file != 'template')
    echo '<a href="'.$file.'">'.$file.'</a><br/>';
}

//closing the directory
closedir($dir_handle);
?>