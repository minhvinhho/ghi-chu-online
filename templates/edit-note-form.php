<?php

// Lệnh SQL lấy dữ liệu note theo ID
$sql_get_data_note = "SELECT * FROM notes WHERE user_id = '$data_user[id_user]' AND id_note = '$get_id'";

// Lấy dữ liệu
$data_note = $db->fetch_assoc($sql_get_data_note, 1);

?>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h3 class="text-primary">Chỉnh sửa ghi chú</h3>
			<form method="POST" onsubmit="return false;" id="formEditNote">
				<div class="form-group">
	    			<label for="user_signin">Tiêu đề</label>
	    			<input type="text" class="form-control" id="title_edit_note" value="<?php echo $data_note['title'];  ?>">
	  			</div>
	  			<div class="form-group">
	    			<label for="pass_signin">Nội dung</label>
	    			<textarea class="form-control" id="body_edit_note" rows="5"><?php echo $data_note['body'];  ?></textarea>
	  			</div>
	  			<input type="hidden" value="<?php echo $data_note['id_note']; ?>" id="id_edit_note">
	  			<a href="index.php" class="btn btn-default">
					<span class="glyphicon glyphicon-arrow-left"></span> Trở về
				</a>
				<button class="btn btn-primary" id="submit_edit_note">
				<span class="glyphicon glyphicon-ok"></span> Lưu
				</button>
	  			<button class="btn btn-danger pull-right" data-toggle="modal" data-target="#modalDeleteNote">
					<span class="glyphicon glyphicon-trash"></span> Xoá
				</button>				
	  			<!-- Tải xuống -->
					<a href="downloads.php?id_note=<?php echo $data_note['id_note']; ?>" class="btn btn-default">
					<span class="glyphicon glyphicon-save"></span> Tải file ghi chú
				</a>
				<!--  -->
				</button>
	  			<br><br>
	  			<div class="alert alert-danger hidden"></div>
			</form>
		</div>
	</div>
</div>