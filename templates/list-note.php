<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h3 class="text-primary">Danh sách các ghi chú</h3>
            <div class="list-group">
                <?php
 
                // Lênh SQL lấy danh sách note theo ID user
                $sql_get_data_list_note = "SELECT * FROM notes WHERE user_id = '$data_user[id_user]' ORDER BY id_note DESC";

                // Nếu có 
                if ($db->num_rows($sql_get_data_list_note))
                {
                    // In danh sách ghi chú
                    foreach ($db->fetch_assoc($sql_get_data_list_note, 0) as $key => $data_list_note) {
                        // Chấm 3 chấm khi nội dung ghi chú dài hơn 300 ký tự
                        if (strlen($data_list_note['body']) > 300)
                        {
                            $data_list_note['body'] = substr($data_list_note['body'], 0, 100).' ...';
                        }
                        else
                        {
                            $data_list_note['body'] = $data_list_note['body'];
                        }
 
                        echo '
                            <a href="index.php?ac=edit_note&&id='.$data_list_note['id_note'].'" class="list-group-item ">
                                <h4 class="list-group-item-heading">'.$data_list_note['title'].'</h4>
                                <p class="list-group-item-text">'.$data_list_note['body'].'</p>
                             </a>         
                            ';
                    }                                               
                }
                // Ngược lại không có
                else
                {
                    // Hiển thị thông báo
                    echo '
                        <div class="alert alert-info">Hiện tại bạn chưa có ghi chú nào.</div>
                    ';
                }
                ?>
            </div>
        </div>
    </div>
</div>