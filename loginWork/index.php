<?php 
  if(isset($_GET["logOut"])){
    setcookie("userName", "aaa" , time() - 60 * 60 * 24);
  }
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Lab - index</title>
<style type="text/css">
  table tr:nth-of-type(1){
    font-size: 1.1em;
   color: black;
  }
  table tr:nth-of-type(2) a{
    display: inline-block;
    background-color: #bbb;
    color: #000;
    width: 80px;
    height: 40px;
    line-height: 40px;
    border-radius: 10px;
    text-decoration: none;
    font-size: 1.2em;
    font-weight: 600;
    margin: 10px 20px;
    border: 3px solid #555;
  }
  table tr:nth-of-type(2) a:hover{
    background-color: #555;
    color: #fff;
    
  }
  
</style>
</head>
<body>

<table width="300" border="0" align="center" cellpadding="5" cellspacing="0" bgcolor="#F2F2F2">
  <tr>
    <td align="center" bgcolor="#CCCCCC">會員系統 - 首頁</td>
  </tr>
  <tr>
    <?php if(!isset($_COOKIE["userName"]) or isset($_GET["logOut"])):  ?>
    <td align="center" valign="baseline"><a href="login.php">→登入←</a> | <a href="secret.php">會員專區</a></td>
    <?php else: ?>
    <td align="center" valign="baseline"><a href="index.php?logOut=1">登出</a> | <a href="secret.php">會員專用</a></td>
    <?php endif ?>
  </tr>
  <tr>
    <td align="center" bgcolor="#CCCCCC">&nbsp;</td>
  </tr>
</table>


</body>
</html>