<html><head>
<title>上载文件表单</title></head>
<body>
<form action="<?php echo $this->baseUrl; ?>newapi/getFile" method="post">
请选择文件：<br>
<input name="upload_file" type="file"><br>
<input type="submit" value="上传文件">
</form>
</body>
</html>
