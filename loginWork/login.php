<?php
//判斷有無來源

$lastPage = "index.php";
if(isset($_COOKIE["source"])){
  $lastPage = $_COOKIE["source"];
  // echo $lastPage . "<br>";
}
// echo $lastPage . "<br>";


//登入
if(isset($_POST["btnOK"])){
  if($_POST["txtUserName"] != ""){
    setcookie("userName", $_POST["txtUserName"]);
    // header("location: " . $_GET["backurl"]);
    header("location: " . $lastPage);
    setcookie("source","aaa", time() - 60 * 60 * 24);
  }
}
//回首頁
if(isset($_POST["btnHome"])){
  header("location: index.php");
}

  


?>

<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>Lab - Login</title>
</head>
<style type="text/css">
  form table tr:nth-of-type(1) td{
    font-size: 1.1em;
   color: black;
  }
  form table tr:nth-of-type(4) input{
    display: inline-block;
    background-color: #bbb;
    color: #000;
    /*width: 60px;*/
    height: 40px;
    /*line-height: 40px;*/
    border-radius: 10px;
    text-decoration: none;
    font-size: 1.2em;
    font-weight: 600;
    /*margin: 10px 20px;*/
    border: 2px solid #555;
  }
  form table tr:nth-of-type(4) input:hover{
    background-color: #555;
    color: #fff;
  }
  form table tr:nth-of-type(2) input, form table tr:nth-of-type(3) input{
    border: none;
    border-bottom: 1px solid black;
    background-color: #eee;
  }
  form table tr:nth-of-type(2) input:focus, form table tr:nth-of-type(3) input:focus{
    /*background-color: #000;*/
    border: 2px solid black;
  }
</style>
<body>
<form id="form1" name="form1" method="post">
  <table width="300" border="0" align="center" cellpadding="5" cellspacing="0" bgcolor="#F2F2F2">
    <tr>
      <td colspan="2" align="center" bgcolor="#CCCCCC"><font color="">會員系統 - 登入</font></td>
    </tr>
    <tr>
      <td width="80" align="center" valign="baseline">帳號：</td>
      <td valign="baseline"><input type="text" name="txtUserName" id="txtUserName" /></td>
    </tr>
    <tr>
      <td width="80" align="center" valign="baseline">密碼：</td>
      <td valign="baseline"><input type="password" name="txtPassword" id="txtPassword" /></td>
    </tr>
    <tr>
      <td colspan="2" align="center" bgcolor="#CCCCCC">
      <input type="submit" name="btnOK" id="btnOK" value="登入" />
      <input type="reset" name="btnReset" id="btnReset" value="重設" />
      <input type="submit" name="btnHome" id="btnHome" value="回首頁" />
      </td>
    </tr>
  </table>
</form>
</body>
</html>