<?php

require('class.phpencoder.php');
$PhpEncoder = new CPhpEncoder(); 
$zipFile= $_GET['url'];
echo '<font color="red">Original Zip File:'.$zipFile.'</font>';
$dir ='patilweb_encrypt';
$zip_obj = new ZipArchive;
$zip_obj->open($zipFile);
$zip_obj->extractTo($dir);

$paths =$PhpEncoder->getDirContents($dir);
foreach ($paths as $file){
        $name =basename($file); $path=$file;$ext = end(explode('.',$name));
   if(!is_dir($file) && ($ext =='php' || $ext =='inc')){
    rename($path,str_replace('.php','.bk.php',$path));
    	$PhpEncoder->encodeFile($path);
       echo '<br/>Done->'.$path.''; 
    }
}
$date = date('d-m-Y_hisa',time());
unlink($zipFile);

     $zip_name = $date.time();
    $PhpEncoder->zip_creation($dir,$zip_name);
        foreach ($paths as $file){
        unlink($file);
        }
echo '<font color="green">Encrypt Zip File:<a href="'.$zip_name.'">'.$zip_name.'</a></font>';

?>