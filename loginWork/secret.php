<?php
  if(!isset($_COOKIE["userName"])){
    setcookie("source",basename(__FILE__));
    header("location: login.php");
    // header("location: login.php?backurl=secret.php");
  }



?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Lag - Member Page</title>
<style type="text/css">
table tr:nth-of-type(1){
    font-size: 1.1em;
   color: black;
  }
  table tr:nth-of-type(2) td{
    color:blue;
  }
  table tr td a {
    display: inline-block;
    background-color: #bbb;
    color: #000;
    width: 80px;
    height: 30px;
    line-height: 30px;
    border-radius: 10px;
    text-decoration: none;
    font-size: 1.2em;
    font-weight: 600;
    /*margin: 10px 20px;*/
    border: 3px solid #555;
  }
  table tr a:hover{
    background-color: #555;
    color: #fff;
    
  }
</style>
</head>
<body>

<table width="300" border="0" align="center" cellpadding="5" cellspacing="0" bgcolor="#F2F2F2">
  <tr>
    <td align="center" bgcolor="#CCCCCC"><font color="">會員系統 － 會員專用</font></td>
  </tr>
  <tr>
    <td align="center" valign="baseline">~~~會員專用頁~~~</td>
  </tr>
  <tr>
    <td align="center" bgcolor="#CCCCCC"><a href="index.php">回首頁</a></td>
  </tr>
</table>


</body>
</html>