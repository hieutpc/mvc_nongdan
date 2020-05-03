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
            <td> <?php echo $value['id'] ?> </td>
            <td> <?php echo "<img src=" . $value['image'] . "alt='image'>"; ?> </td>
            <td> <?php echo $value['title'] ?> </td>
            <td> <?php echo $value['status'] ? 'Enabled' : 'Disabled' ?> </td>
            <td>
                <a href="index.php?controller=client&action=detail&id=<?php echo $value['id']; ?>"> Show </a>
                <a href="index.php?controller=client&action=edit&id=<?php echo $value['id']; ?>"> Edit </a>
                <a href='index.php?controller=client&action=delete&id=<?php echo $value['id']; ?>'> Delete </a>
            </td>
        </tr>
        <?php
}
?>
    </table>
    <div align='center'>
        <?php
            require_once "./mvc/views/client/pagination.php";
            // echo '<pre>';
            // print_r($data);
        ?>
    </div>

    <div align="center"> <a href="index.php?controller=client&action=add" "> Add new item </a> </div>

</div>