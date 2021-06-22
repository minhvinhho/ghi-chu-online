<?php

include_once ('connect.php');

if(isset($_GET['id_note'])) {
    $id_note = $_GET['id_note'];
    $stat = $db->prepare("Select * from notes where id_note=?");
    $stat->bindParam(1, $id_note);
    $stat->execute();
    $data = $stat->fetch();

    $file = '/downloads' . $data['title'];

    if(file_exists($file)){
        header('Content-Description: ' . $data['description']);
        header('Content-Type: ' . $data['type']);
        header('Content-Disposition: ' . $data['disposition']. '; title="' . basename($file) . '"');
        header('Expires: ' . $data['expires']);
        header('Cache-Control: ' . $data['cache']);
        header('Pragma: ' . $data['pragma']);
        header('Content-Length: ' . filesize($file));
        readfile($file);
        exit;
    }
}
?>