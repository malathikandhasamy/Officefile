<!-- <?php
$file = $_POST['filename'];
$file = "../text.txt";
$handle = fopen("$file" ,"r");
if(!$handle)
{
	echo"file can't be open";
}
else{
	echo "The file successfully created and Opened";
}
fclose($handle);
?> 
 -->



<?php
$file = $_POST['filename'];
$file1 ='../'.$file;
$fp = fopen($file1,'w');
//fwrite($fp,$content);
fclose($fp);
chmod('var/www/html/filesphp/'.$file,0777);
if(!$fp)
{
	echo"file cant open";
}
else{
	echo "file selected successfully";
}
?>