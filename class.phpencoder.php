<?
class CPhpEncoder {

	var $soft_name  = 'PatilWeb Encryption';
	var $soft_version  = '2.22';
	var $compress = true;
	var $encode_repeat = 7;

	function show_main() {
?>
<p align="center">&nbsp;</p>
<p align="center"><a href="?coding=encoder">Encoding</a></p>
<p align="center"><a href="up.php">Encoding Multiple Files/Projects Zip File</a></p>
<?
	}

	function show_example_decode() {
?>
<br /><br />
<form action="decoder.php" method="post" enctype="multipart/form-data">
<div align="center">
<h2><span class="style1"></span><? echo $this->soft_name.' ver. '.$this->soft_version; ?></h2>
  PHP Script : 
  <input type="file" name="php_script" /> 
  <input type="submit" value="Decode" />
</div>
</form>
<div align="center">
  <table width="600" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td><br />
      <strong>EXAMPLE :</strong></td>
    
  </tr>
</table>
  <table width="600" border="1">
  <tr>
    <td>
<pre>
<strong>
&lt;?php
Encoder : <? echo $this->soft_name.' ver. '.$this->soft_version; ?><br />WEB : <br />*/<br />$Q9337B1C152C55D08306E1F2B51EED962=&quot;eNptWMuWqry2fqDT2CRInWWzEAKihCLkAukB4RSScFlKKfL0O/U39u6c4Rg2FJIw53ebBPn8vHw7FyK8oYHEtLfPj3OICur0/hn5ZxbxnwoetSzP32rk7+vtc7sOn4cgX0rCzt/ZzZ9VTF7Z7c+zjfqX/M86Xt+Ox7kqvL1+/8Gn2/wM8vlfX8PrX7/XnT+dy/U945P+7/p2LZ/p4zkv/LxAvmlG/JQRf59jadc7fKfF4ZXZ+7jDT+dg/q5j4rTB/Ly6/tz+95w/VZk86yj8aeHjd8+/15dzSRAK8p2c0qHdSZCgLExhvn+6+Z6EhOIgpdrNgtAhAfPI4Nwk8zZu5K642rCDiquznlpnOWFDpIjWQ+4YV0W8yAc5FRHyGw2QdEBMyyVTOt/SKH1hmpQckBObyFdxWv+qEm14Qu+Mpu7V6VMSsV0NhKi92ruBHRp42Ei53NuIXLuw7ylVzmXnHg3klYJPtxG4rtwzlCPPGP2058KHlMtzc1tzLqRHoz/vrDQ4n5KHiueDnL4hY+RLDfijgvnvB6S6Be3tOFKgvQaGoCv5V3o63ivwDUnweW+GpJeDiQpgHlwsVwoXio0/FGV/lrSXGKCZmx7UERbUXSDRqmRjT8VoEuaQgUx9VIykLBy5YqjecuI5C7nDWE+xRi4BcshKFMjy+02RSgsX37rxcCgMypjTn9pSnpTxaa2TRzM+nDZK7umOSA2WB40Ry4dkpGPo5M56J6WZBfNC+7+0+zzzUcVq6gPbn72C324zkC/mogyXBLesfbEQ/OXQA02ER45ST0IHkMDAIiJRQ8nMx40So/Z8wrCxyOgY+Gt7fOq0FJVbuczNIXelg8NkZrSFijNPjluSCfDbL1hHJs3CxbN9/2CU3VuxfKTDGeKhv8rRuWM9O2p0DnxCOQGqVDT5KSY1ZtHjlbo95+FRpox/YIZeOQSnnJkb3TGVcH0KRkZW4rEo5Ug07xu+7HxPMjqqMzfJgrUnakFQvfs3BvKtm+TOTL8W3NZyJ+eiJCGLjWgQv6dG36lASQ1I1iG52RrHBGFT2X3S6LA3MXc7DaL2tAZUrJ4UADUjd5pdPlWEsy5UMAuS1WLewyFOcq2idsw3EpKXoJ87Dh9PiUyoKKltbacmVn+bEj0v8HjoAvPG4zGRbH63DvawSQhmy1ZRk+ISfdEy3XiY8FwvYWXkUGjisNufvQj7WeltJcY/Ydavgsm+dZcwHz3LE/IjIf/hHM2CJ2kKZdHac1geHhrTh+mgsDLMlezhKV6BItxci58P7vQYF4+tshiiI3kQvRSp3bMdV87Cb4/H/k/lor8Wy0Wq+3NnFq/a9Z5Zptc8eYkwd9JorVLAB6lJYLFB2+jwrBEHF7idGOUmnfjChQr4oH4KgUThkOsVgtj+fqcu7+3zXKVzDGqTpAWwiIrxm4VeVDMp1M4FH3rIb2vBYiKV4CWh/iVj2yBN8sPC5CrjJeE6fbe7gY1et2KSLjGfsGV4TEN+LgJMMDzANDSZ1SHf7kXrgO1EbGcGt6zR+NSApK+DJMkdr7S69NVNfciipKTAIK6BaCaVVOMyS5a/eehsdZy8lPiGvOxjTnEmNd9zYLU74vAK2VsINdYGgyw0O57MSAT+K5H6KyN1bsbZoRoULUTPamq3NJCwcXpteedWcEvtmUyh+1c3hE4xbqfcqC/G+02IrU5NuNESQ+zoX+xzxvXGAlznzNZ1kBYfy1darB+pKyUdUd6YaisECfCYaOsnJxFuZW04aw3JFSdWz4kvqH62gLs0PD7z21oxg0kWfILCWa4YzFZH5I9AFhcDeqRaVdnp+EWd9N66/sEeoErDDUnKq1ZUWzvJC+NmoML8UIZzy1W/AaHFrkS5YM8O9VMRm4Hpfk7HCiiznMmOvBb4Sw5xlIkFF1av6gDNXUQSNmEkRPoq9OHNmVUgR+4dCt3cLIMaU4eJ5daUyvZ19ghL+osjw7pYr/WIU7L35urgotLkUVPzoIanJFZhA2RfCQXsM6/VaAIFV8RGLoSWvmDmpVhSqOg4F9EK0uDs1SK5FtMMCmHGlqK5EstXC7exhvrZaKu6yP+qAzLVg6IsUjfMe65QstXh2ZFB+GqEl+UjD5mQggi51UL5adA/23DrG7GRmiYudf3k+rYaWC4/bewfOi6LxvhQRd6dc/5s4Lqm8AHqMb1LjtxaoAOLMKuhOTDjFxmVZQv6gEOz8DhhDTw+uOE/IkAlndQbh/lTIf/D+mSJd6u5vH3a3ljDkXULkxg768P6F8XiaPWl/8knc23C1ePubGu+JV2x9q1edBZZnYPWl7WxHFk0Hdc41wSRcf0it/WqdlthzgmOF566vqzdxZdTv2GKpxbJrAvIQo2JU4h9y/9L6/x5tfD8ZkxRofFdlmbIKX9YP12z2GocR88ahBvWZ4stVNdjr5lelov1bezKkho1d3GSXYHPmSZJGz7cDC0n6x1DrY+nLlp+Cte/tK46K8p3MSQzjnhZD3zGAH8UUQjaUNq6yrwIzdSN+V2MSY9v64rD7c0dULUoucjdamL5fUg1RwySt70/rCDYeczeVuJAagiRuykrYzxbwwuOkwkP5m35wGsNVqxXkgpvt9i70QgvltuHAgJUuUtZDMpJJ3+z+57q+PPFEJ5zapyMow8aoDGnvsGQn7HA0NYnuTqyxmDZODJ7G7I3GxSo9XrISu0Rg1Eb9zVhXoVHteD3WtcDulAz72mJB4a4bEeZNEjFbAjfxchvnCZWeSzXXH9oSkwq/g2l2+e2rjqLeU3Hx0GUZCEwPBDgmzpaeVOSTaElqcXDobdjTwTSNT9vKrBRIEBa6vBguXGxHH4Wu7m3jro07Bd3S4LN8uyY96ChubURpraHgc0HBxZK3gTm2QyfTxGjSZyOTGkGCFhoytm7AuQm2J+NUX9uAmLrM7+th1uvTZj1QE6jb69hL++6hy4G/F5PqieAH1K7ghA2r3AcWF5es8DmIrRAFmLP9pEUO/5pjPLU6MXtoF+dwGfqLF4DZkC1ooWbuJ3VfMtFwx3Lb0CiLjyuTTzvXQRq6coL3dWX5GolwHoXVHdlf29C3HfGt9otOR5x37iI1ZTs1PqB9dKBwu1mNafmcPlrdRFXjvPqKOoJMpdOc5qP0uIsv3NEPKz5VZiFyhhprvtDtSf3nL32bsQ/2OZJYU3fziaiZSZqHSkKuMzqtJa5cxSS53ebAWmLWpfZDK3CB+Sj+ulim7yRrUGQTFJv1lMNLxip5ZSUVyh1KlpXTLPDhdWzmAGh1x85KofSdm8DbirLFTtzpMQsRTd6onGwY714YzB35fvhFkHysD76UPrhkhFU6cieNsuMqkw8MZCK8sX6BDiJWOqWL6gyykjnz507RnaGJ4Li3eoT74wNw8AfLyA5WY/nck9hG66aFatDrRo1rtxFYGcEtgzpoF2rMW86+EFlZxUaob/1zs8dTygZuGRCv7jNS8RZkTLmLI2ahFXrq1WThgGnKtZnpxeXntavLORfVOCrgpgW41ELgzzrt07qGkeIh9dRNUiY7NaX02LS7m+mwNzOjWK71lD9CLEkTaifNCRlBaxPl8vD+jfIAhWQMAkZJ19ttF1F4IvKZo7Wzi0MPg41XEcKjxOO0LWdPt9FNFvPwE41pKD6nRlC8rD1ORfueVeO5+VO/+v1X1e4cVb6dhbBidyT0mbel+X3TzE6m8WKU5Wfu8WGy6J+52PrXsAv7z7fVusOhKG8NgvORCKr6fPQDlblfnMn5I/a+EDa8QIP1r3G/kSNH2C2/ZVsq7vx+2D7qItAA+Icy9zlHzTmkfUK1tkch91wJ8xcKqpAvktNI+DXKLfZzHzgsoIsQFwJAHIX7XT0XF4m9xp9voqpdxvdvlJbV+Iom1/7XtyOQ2Pll0XO1mqZti5ZMG0PbeCPdSnnjqmD1a8bDnBPbZ1T2mfWR+P81/NoEkn37Ek7h0rre51OcFccId/7zWLL5n7rqb85iHGUj1jUtA+uu5qtZv6wKT/IEbh2BrBYZM/KJA86JYZxH9g9f3J3iSs3Oac2Adfa8XItD3LggNLqySPlY87di4tMo8kNh+sTv4+iAP3WiDVL3fDVRoaS4s/T6n+ewur5O+vKkI8XOD+F7m8YJlyWi5OJ2WsZgRnvz+2I70XEb/R0hA33R2WzJ4n7vr6d/9c+X9+c+ltVYmN79n8y4v+8j7hE6kP9824CvNqR7+37/7nmRIhN9E4+nF37/Sa2DljbOd5J33Z62vM99PD+vdk8ATJWLZdCL9n+53/+DStb0ro=&quot;;eval(base64_decode(gzuncompress(base64_decode($Q9337B1C152C55D08306E1F2B51EED962))));?&gt;</strong>
</pre>	</td>
  </tr>
</table>
<br />
<table width="600" border="1">
  <tr>
    <td>
<pre>
<strong>
<a href="up2.php">Decoding Multiple Files/Projects Zip File</a
<span class="red">&lt;?
</span>	<span class="blue">function</span> view() {
		<span class="blue">echo</span> <span class="red">'Hello :-)</span>';
	}
	view();
<span class="red">?&gt;</span>
</strong>
</pre>
	</td>
  </tr>
</table>
</div>
<?
	}

	function decode() {
		header('Content-type: application/php');
		header('Content-Disposition: attachment; filename="decode_'.$_FILES['php_script']['name'].'"');
		$file = file_get_contents ($_FILES['php_script']['tmp_name']);
		$file = str_ireplace('eval(base64_decode($Q', '$decode_out = (base64_decode($Q', $file);
		eval('?>'.$file.'<?');
		echo '<?'.$decode_out;
	}
	
	function show_example_encode() {
?>
<br /><br />
<form action="encoder.php" method="post" enctype="multipart/form-data">
<div align="center">
<h2><span class="style1"></span><? echo $this->soft_name.' ver. '.$this->soft_version; ?></h2>
  PHP Script : 
  <input type="file" name="php_script" /> 
  <input type="submit" value="Encode" />
</div>
</form>

<div align="center">
  <table width="600" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td><br />
    <a href="up.php">Encoding Multiple Files/Projects Zip File</a><br />
      <strong>EXAMPLE :</strong></td>
    
  </tr>
</table>
  <table width="750" border="1">
  <tr>
    <td>
<pre>
<strong>

<span class="red">&lt;?
</span>	<span class="blue">function</span> view() {
		<span class="blue">echo</span> <span class="red">'Hello :-)</span>';
	}
	view();
<span class="red">?&gt;</span>
</strong>
</pre>
	</td>
    
  </tr>
</table>
<br />
<table width="750" border="1">
  <tr>
    <td><pre>
<strong>
&lt;?php
Encoder : <? echo $this->soft_name.' ver. '.$this->soft_version; ?><br />WEB : http://phpencoder.aroha.sk/<br />*/<br />$Q9337B1C152C55D08306E1F2B51EED962=&quot;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&quot;;
eval(base64_decode(gzuncompress(base64_decode($Q9337B1C152C55D08306E1F2B51EED962))));?&gt;</strong>
  </pre>
    </td>
  </tr>
</table>
</div>
<?
	}

	function encode_string($string) {
		if (empty($this->encoding)) {
			$this->encoding = 1;
		} else $this->encoding++;
		$description = "\r\n".'/*'."\r\n".'Encoder : '.$this->soft_name.' ver. '.$this->soft_version."\r\n".'WEB : http://patilweb.com/'."\r\n".'*/'."\r\n".'';
		if ($this->encoding==$this->encode_repeat) {
			$string = $description."?>".$string;
		} else $string = "?>".$string;
		$string = base64_encode($string);
		if ($this->compress) {
			$string = base64_encode(gzcompress($string, 9));
		}
		$string_name = '$Q'.strtoupper(md5(time().rand(1,50000)));
		$out_put = $description;
		$out_put .= $string_name.'="'.$string.'";';
		if ($this->compress) {
			$string_name = 'gzuncompress(base64_decode('.$string_name.'))';
		}
		$string_name = 'base64_decode('.$string_name.')';
		$out_put .= 'eval('.$string_name.');';
		$out_put = '<?php '.$out_put.'?>';
		if ($this->encoding<$this->encode_repeat) {
			$out_put = $this->encode_string($out_put);
		}
		return $out_put;
	}

	function encode() {
		$file = file_get_contents ($_FILES['php_script']['tmp_name']);
		$out_put = $this->encode_string($file);
		header('Content-type: application/php');
		header('Content-Disposition: attachment; filename="encode_'.$_FILES['php_script']['name'].'"');
		echo $out_put;
	}
    function encodeFile($path) {
        $bkPHPname = str_replace('.php','.bk.php',$path);
		$file = file_get_contents ($bkPHPname);
		$out_put = $this->encode_string($file);
        unlink($bkPHPname);
        $myfile = fopen($path, "a+") or die("Unable to open file!");
        fwrite($myfile,  $out_put);
        fclose($myfile);
	}
    
	
	function google_ad_120x140() {
?>
<?
	}
    function getDirContents($dir, &$results = array()) {
    $files = scandir($dir);

    foreach ($files as $key => $value) {
        $path = realpath($dir . DIRECTORY_SEPARATOR . $value);
        if (!is_dir($path)) {
            $results[] = $path;
        } else if ($value != "." && $value != "..") {
            $this->getDirContents($path, $results);
            $results[] = $path;
        }
    }

    return $results;
}


 function zip_creation($source, $destination){
    $dir = opendir($source);
    $result = ($dir === false ? false : true);

    if ($result !== false) {


        $rootPath = realpath($source);

        // Initialize archive object
        $zip = new ZipArchive();
        $zipfilename = $destination.".zip";
        $zip->open($zipfilename, ZipArchive::CREATE | ZipArchive::OVERWRITE );

        // Create recursive directory iterator
        /** @var SplFileInfo[] $files */
        $files = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($rootPath), RecursiveIteratorIterator::LEAVES_ONLY);

        foreach ($files as $name => $file)
        {
            // Skip directories (they would be added automatically)
            if (!$file->isDir())
            {
                // Get real and relative path for current file
                $filePath = $file->getRealPath();
                $relativePath = substr($filePath, strlen($rootPath) + 1);

                // Add current file to archive
                $zip->addFile($filePath, $relativePath);
            }
        }

        // Zip archive will be created only after closing object
        $zip->close();

        return TRUE;
    } else {
        return FALSE;
    }


}
	
}
?>