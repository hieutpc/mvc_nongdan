<div class='itemdetail'>
    <a class='list' href='index.php?controller=admin&action=show'> Back </a>
    <h3> <?php echo $dataID[0]['title']; ?> </h3>
    <table>
        <tr>
            <td>
                <image src="<?php $dataID[0]['image']?>" alt='image'>
            </td>
            <td>
                <input type='text' name='itemtitle' value="<?php echo $dataID[0]['description'] ?>">
            </td>
        </tr>
    </table>
    <?php
?>
</div>

