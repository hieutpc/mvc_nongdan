<div class='itemlist'>
    <h3 align="center"> Admin - Item list </h3>
    <table border='1px' align="center">
        <tr>
            <td> ID </td>
            <td> Thumb </td>
            <td> Title </td>
            <td> Status </td>
            <td> Action </td>
        </tr>

        <?php
            foreach ($itemPage as $value) {
?>

        <tr>
            <td> <?= $value['id'] ?> </td>
            <td> <img src=" <?= $value['image'] ?> " width='42' height='42' alt='image'>; </td>
            <td> <?= $value['title'] ?> </td>
            <td> <?= $value['status'] ? 'Enabled' : 'Disabled' ?> </td>
            <td>
                <a href="index.php?controller=admin&action=detail&id=<?= $value['id']; ?>"> Show </a>
                <a href="index.php?controller=admin&action=edit&id=<?= $value['id']; ?>"> Edit </a>
                <a href='index.php?controller=admin&action=delete&id=<?= $value['id']; ?>'> Delete </a>
            </td>
        </tr>
        <?php
}
?>
    </table>
    <div align='center'>
        <?php
            require_once "./mvc/views/admin/pagination.php";
            // echo '<pre>';
            // print_r($data);
        ?>
    </div>

    <div align="center"> <a href="index.php?controller=admin&action=add" "> Add new item </a> </div>

</div>