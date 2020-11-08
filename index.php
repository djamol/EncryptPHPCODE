<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1250" />
<?
require('class.phpencoder.php');
$PhpEncoder = new CPhpEncoder();
?>
<title><? echo $PhpEncoder->soft_name.' ver. '.$PhpEncoder->soft_version; ?></title>
<link href="phpencoder.css" rel="stylesheet" type="text/css" />
<?
	if (file_exists('personal_phpencoder.aroha.sk.php')) require('personal_phpencoder.aroha.sk.php');
?>
</head>
<body>
<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td style="border-right-color:#000000; border-right-style:solid" width="150" valign="top">
	  <div align="center">
  	  <p><a href="?coding=encoder">Encoding</a></p>
	  <p><a href="http://sourceforge.net/project/showfiles.php?group_id=209720">Download</a></p>
	  <a href="http://sourceforge.net/donate/index.php?group_id=209720"><img src="http://images.sourceforge.net/images/project-support.jpg" width="88" height="32" border="0" alt="Support This Project" /></a>
	  <p><a href="http://validator.w3.org/check?uri=referer"><img
	        src="http://www.w3.org/Icons/valid-xhtml10-blue"
    	    alt="Valid XHTML 1.0 Transitional" width="88" height="31" border="0" /></a></p>
	  <p>
	    <? $PhpEncoder->google_ad_120x140(); ?>
	  </p>
	  </div>	</td>
    <td valign="top">
<?
if (empty($_GET['coding'])) {
	$PhpEncoder->show_main();
} elseif ($_GET['coding']=='decoder') {
	$PhpEncoder->show_example_decode();
} elseif ($_GET['coding']=='encoder') {
	$PhpEncoder->show_example_encode();
}
?></td>
    <td valign="top"><div align="center">

      <p>&nbsp;</p>
    </div></td>
  </tr>
</table>
</body>
</html>