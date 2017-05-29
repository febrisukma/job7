<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>.:Febri Sukmawati|Latihan Form Input Pengunjung:.</title>
</head>

<body>
<?php
if (isset($_POST['send']))
{
echo"Nama : ".$_POST["nama"]."<br>";
echo"Alamat : ".$_POST["alamat"]."<br>";
echo"e-mail : ".$_POST["email"]."<br>";
echo"Komentar Anda : ".$_POST["komentar"]."<br><br>";
}
?>

Terima kasih sudah berkunjung . . .
</body>
</html>
