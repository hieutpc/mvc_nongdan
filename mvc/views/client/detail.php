<!-- http://localhost/mvc_nongdan/index.php?controller=client&action=detail&id=12 -->
<div class='itemdetail'>
    <a class='list' href='index.php?controller=client&action=show'> Back </a>
    <h3> <?php echo $dataID[0]['title']; ?> </h3>
    <table>
        <tr>
            <td>
                <image src="<?= $dataID[0]['image']?>" alt='image' width='42' height='42'>
            </td>
            <td>
                <input type='text' name='itemtitle' value="<?php echo $dataID[0]['description'] ?>">
            </td>
        </tr>
    </table>
    <?php
?>
</div>

