<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>登录界面</title>
  <style type="text/css">
    #form1
 {
  width:250px;
  height:250px;
  margin:20px auto;
  border:1px #039 solid;
  padding:20px 20px;
 }
  </style>
  <script type='text/javascript'>
 function freshVerify()
 {  
   document.getElementByIdx_x('verifyImg').src='/index.php/Home/Index/verify/'+Math.random();  
 }  
  </script>  
</head>
<body>
  <form name="form1" id="form1" method="post" action="/index.php/Home/Index/insert">
    注册帐号：<br /><br />
    帐号：<input type="text" name="username" id="user" maxlength="16" /><br /><br />
    密码：<input type="password" name="password" id="password" maxlength="16" /><br /><br />
    
   
    
    <input type="submit" name="btn1" id="btn1" value="注册或登录" />
    <input type="reset" name="btn2" id="btn2" value="重置" />
  </form>
</body>
</html>