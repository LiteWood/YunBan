<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width" />
    <title>Azoid 云黑管理系统</title>
    <link href="https://cdn.jsdelivr.net/gh/ImJingLan/WebImage@4.2/lt5dweb/style.min.css" rel="stylesheet"/>
</head>
<body class="md-skin">
	<form action="./edit/" class="form-horizontal" method="post" enctype="multipart/form-data">
		<div id="loginbox">
			<div><h1 class="logo-name"></h1></div>
			<div class="form-group"><h3>Azoid 云黑管理系统</h3></div>
			
			<div class="form-group">
			玩家用户名 区分大小写
		        <input class="form-control" id="name" name="name" placeholder="玩家用户名 区分大小写" type="text" value="">
		        <span class="field-validation-valid" data-valmsg-for="AccountName" data-valmsg-replace="true"></span>
            </div>
            			
			<div class="form-group">
			原因
				<input class="form-control" id="slogen" name="slogen" placeholder="原因" type="text" value="" />
				<span class="field-validation-valid" data-valmsg-for="AccountName" data-valmsg-replace="true"></span>
			</div>
			
			<div class="form-group">
			截止时间 默认永久
				<input class="form-control" id="time" name="time" placeholder="" type="text" value="9999-12-31" />
				<span class="field-validation-valid" data-valmsg-for="AccountName" data-valmsg-replace="true"></span>
			</div>
			
			<div class="form-group">
			管理员名
				<input class="form-control" id="server" name="server" placeholder="管理员名" type="text" value="" />
				<span class="field-validation-valid" data-valmsg-for="AccountName" data-valmsg-replace="true"></span>
			</div>
			
			<div class="form-group">
			密码
				<input class="form-control" id="pw" name="pw" placeholder="管理员密码" type="password" />
				<span class="field-validation-valid" data-valmsg-for="Password" data-valmsg-replace="true"></span>
			</div>
			
			<div class="form-group">
			    <select name="code" style="width:150px;height:40px; font-size:120%">
			        <option value ="1">1.添加黑名单</option>
					<option value ="2">2.删除黑名单</option>
			    </select>
			</div>
			
			<div class="form-group">
				<input type="submit" class="btn btn-primary btn-block" value="提交" />
			</div>
			
			<p>© 2021 Lite Wood , All rights reserved.</p>
			
		</div>
	</form>
</body>
</html>