<!-- http://localhost/mvc_nongdan/index.php?controller=client&action=show -->
<div class='itemlist'>
    <h3 align="center"> Client - Item list </h3>
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
            <td> <?=$value['id']?> </td>
            <td> <img src=" <?=$value['image']?>" alt='image' width='42' height='42'> </td>
            <td> <?=$value['title']?> </td>
            <td> <?=$value['status'] ? 'Enabled' : 'Disabled'?> </td>
            <td>
                <a href="index.php?controller=client&action=detail&id=<?=$value['id'];?>"> Show </a>
            </td>
        </tr>
        <?php
}
?>
    </table>
    <div align='center'>

        <?php require_once "./mvc/views/client/pagination.php";?>

    </div>
</div>