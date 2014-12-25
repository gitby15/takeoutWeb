<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/th/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/11509/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>餐厅</title>
</head>
<body>
<a href="/index.php/Home/User/showUserPage">返回首页</a>
<h2><?php echo ($rname); ?></h2>
<br/><br/>

<table>

	<tr>
		<th width="150">菜名</th>
		<th width="150">原价</th>
		<th width="150">优惠价</th>
	</tr>
	
	<tr>
		<th width="150"><a href="/index.php/Home/User/getOrder/did/<?php echo ($did[1]); ?>"><?php echo ($dname[1]); ?></a></th>
		<th width="150"><?php echo ($oprice[1]); ?></th>
		<th width="150"><?php echo ($nprice[1]); ?></th>
	</tr>
	
	<tr>
		<th width="150"><a href="/index.php/Home/User/getOrder/did/<?php echo ($did[2]); ?>"><?php echo ($dname[2]); ?></a></th>
		<th width="150"><?php echo ($oprice[2]); ?></th>
		<th width="150"><?php echo ($nprice[2]); ?></th>
	</tr>
	
	<tr>
		<th width="150"><a href="/index.php/Home/User/getOrder/did/<?php echo ($did[3]); ?>"><?php echo ($dname[3]); ?></a></th>
		<th width="150"><?php echo ($oprice[3]); ?></th>
		<th width="150"><?php echo ($nprice[3]); ?></th>
	</tr>
	
	<tr>
		<th width="150"><a href="/index.php/Home/User/getOrder/did/<?php echo ($did[4]); ?>"><?php echo ($dname[4]); ?></a></th>
		<th width="150"><?php echo ($oprice[4]); ?></th>
		<th width="150"><?php echo ($nprice[4]); ?></th>
	</tr>
	
	<tr>
		<th width="150"><a href="/index.php/Home/User/getOrder/did/<?php echo ($did[5]); ?>"><?php echo ($dname[5]); ?></a></th>
		<th width="150"><?php echo ($oprice[5]); ?></th>
		<th width="150"><?php echo ($nprice[5]); ?></th>
	</tr>
	

</table>
  
</body>
</html>