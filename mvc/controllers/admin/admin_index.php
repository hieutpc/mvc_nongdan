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
            require_once './mvc/views/admin/show.php';
            break;
        }
    case 'edit':{
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                $dataID = $db->showDetail($id);
                // print_r($dataID);

                if (isset($_POST['update_item'])) {
                    $thumb = $_POST['itemthumb'];
                    $title = $_POST['itemtitle'];
                    $status = $_POST['itemstatus'];
                    echo 'here with' . $status;
                    $description = $_POST['itemdescription'];
                    $edit_success = ($db->updateData($id, $title, $description, $thumb, $status)) ? 1 : 0;
                    if ($edit_success) {
                        header('location: index.php?controller=admin&action=show');
                    }
                }

            }
            require_once './mvc/views/admin/edit.php';
            break;
        }
    case 'add':{
            if (isset($_POST['add_item'])) {
                $thumb = $_POST['itemthumb'];
                $title = $_POST['itemtitle'];
                $status = $_POST['itemstatus'];
                $description = $_POST['itemdescription'];
                $success = ($db->insertData($title, $description, $thumb, $status)) ? 1 : 0;
            }
            require_once './mvc/views/admin/add.php';
            break;
        }

    case 'delete':{
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                $del_success = ($db->deleteData($id)) ? 1 : 0;
                // $del_success = ($db->deleteData($id)) ? 'Delete Success' : 'Delete Failed';
                if ($del_success) {
                    header('location: index.php?controller=admin&action=show');
                } else {
                    echo 'Delete Failed';
                }
            }
            break;
        }
    case 'detail':{
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                $dataID = $db->showDetail($id);
            }
            require_once './mvc/views/admin/detail.php';
            break;
        }
    default:{
            echo 'Action must be add/ edit/ delete/ show/ detail';
        }
}
