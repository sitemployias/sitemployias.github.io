<?php
session_start();
if($_SESSION["lang"] == "EN")
{
	include("en.php");
}
else
{
	include("th.php");
}
?>
<html>
<head>
<title><?php echo $strTitle;?></title>
<meta http-equiv="Content-Type" content="text/html; charset=windows-874">
</head>

<body>
<table width="452" border="1" cellpadding="1" cellspacing="1">
  <tr>
    <td><?php echo $strHome;?></td>
    <td><?php echo $strService;?></td>
    <td><?php echo $strAbout;?></td>
    <td><?php echo $strContact;?></td>
  </tr>
</table>
<br>
<br>
<?php echo $strDetail;?>
<br>
<br>
<br>
<strong>Language</strong><br>
<a href="change.php?lang=TH">TH</a> , <a href="change.php?lang=EN">EN</a>
</body>
</html>
