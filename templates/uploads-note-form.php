<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h3 class="text-primary">Tải ghi chú lên</h3>
            <div class="list-group">
	<form action="upload_file.php" enctype="multipart/form-data" method="POST">
    <input type="hidden" type="text" name="user_id" value="<?php
        echo $data_user['id_user'];
    ?>">
    <h3>Tiêu đề</h3>
    <input  type="text" name="title"> <br>
    <h3>Chọn file: </h3>
    <input class="btn btn-primary" type="file" name="uploadFile"><br> 
    <input class="btn btn-primary" type="submit" name="submit" value="Upload">
	</form>
    </div>
        </div>
        </div>
    </div>
</body>
</html>