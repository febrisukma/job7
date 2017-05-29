<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>.:Febri Sukmawati|Form:.</title>
</head>

<body>
<?php
$kampusku="STEKOM";
$alamat1="Jl. Majapahit 304 Semarang";
$alamat2="Jl. Majapahit 605 Semarang";
echo"<form action=\"linkform4.php\" method=\"post\">";
echo"Mengirim 3 variabel sekaligus ke halaman link4.php<br>";
echo"<input name=\"kampusku\" type=\"hidden\" value=\"$kampusku\">";
echo"<input name=\"alamat1\" type=\"hidden\" value=\"$alamat1\">";
echo"<input name=\"alamat2\" type=\"hidden\" value=\"$alamat2\">";
echo"<br><input name=\"kirim\" type=\"submit\" value=\"Kirimkan\">";
echo"</form>"
?>
</body>
</html>
