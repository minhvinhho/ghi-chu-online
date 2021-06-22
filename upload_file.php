<?php
include_once ('connect.php');
if (isset($_POST['submit'])) {

    $title = $_POST["title"];
    $user_id = $_POST["user_id"];

    if ($_FILES['uploadFile']['name'] != null) {
        if ($_FILES['uploadFile']['type'] == "text/plain") {
            $path = "uploads/";
            $tmp_name = $_FILES['uploadFile']['tmp_name'];
            $name = $_FILES['uploadFile']['name'];
              
            move_uploaded_file($tmp_name, $path . $name);
                  
            $file = fopen("uploads/" . "$name", "r+");
           // $content = fgets($file, 4096);
           // $content =  file_get_contents($file, true, null, -1, 100);
            $content = fread($file, 4096);
            $carray = explode(",", $content);
            list($body) = $carray;

            $sql = "INSERT INTO `notes` (`user_id`,`title`, `body`,`date_created`) VALUES ('$user_id','$title','$body','" . date('Y-m-d H:i:s') . "')";
            $smt = mysqli_prepare($connect, $sql);
            if (mysqli_stmt_execute($smt)) {
                echo 'Tải lên thành công';
            } else {
                echo 'Không thể tải lên';
            }
        } else {
            echo "Kiểu file không phải text";
        }
    } else {
        echo "Bạn chưa chọn file upload";
    }
}
?>
	<a href="index.php" class="btn btn-default">
	  	<button class="glyphicon glyphicon-arrow-left">Trở về</button> 
	</a>