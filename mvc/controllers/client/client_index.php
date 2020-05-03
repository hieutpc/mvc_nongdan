<?php

if (isset($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = '';
}

$success = 0;
$edit_success = 0;
$del_success = 0;

switch ($action) {
    case 'show':{
            $data = $db->getAllData();
            $total_records = $db->num_rows();

            // Pagination
            $item_per_page = !empty($_GET['per_page']) ? $_GET['per_page'] : 5;
            $current_page = !empty($_GET['page']) ? $_GET['page'] : 1;
            $offset = ($current_page - 1) * $item_per_page;
            $total_pages = ceil($total_records / $item_per_page);
            $itemPage = $db->getPage($item_per_page, $offset);
            require_once './mvc/views/client/show.php';
            break;
        }
    case 'detail':{
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                $dataID = $db->showDetail($id);
            }
            require_once './mvc/views/client/detail.php';
            break;
        }
    default:{
            echo 'Action must be show/ detail';
        }
}
