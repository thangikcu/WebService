<?php
require_once '../dbConnect.php';

function dispInfo() {
    
    $maTinTuc = $_GET['maTinTuc'];
    
    $db = new Database();
    
    $db->prepare('DELETE FROM tin_tuc WHERE MaTinTuc = :maTinTuc');
    $db->bind(':maTinTuc', $maTinTuc);
    $db->execute();
    
    if ($db->getRowCount() > 0) {
        
        echo 'success';
        
    }
}

dispInfo();
?>