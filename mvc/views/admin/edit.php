<div class='edititem'>
    <a class='list' href='index.php?controller=admin&action=show'> Item list </a>
    <h3> Edit </h3>
    <form action='' method='POST'>
        <table>
            <tr>
                <td> Title </td>
                <td> <input type='text' name='itemtitle' value="<?php echo $dataID[0]['title'] ?>"> </td>
            </tr>
            <tr>
                <td> Description </td>
                <td> <input type='text' name='itemdescription' value="<?php echo $dataID[0]['description'] ?>"> </td>
            </tr>
            <tr>
                <td rowspan="2">Image</td>
                <td>
                    <input type="file" name='itemthumb' value="<?php echo $dataID[0]['image'] ?>">
                </td>
            <tr>
                <td>
                    <image src="<?php $dataID[0]['image']?>" alt='image'>
                </td>
            </tr>
            <tr>
                <td> Status </td>
                <?php
$arr1 = array('<option value=1>Enabled</option>', '<option value=0>Disabled</option>');
$arr2 = array('<option value=0>Disabled</option>', '<option value=1>Enabled</option>');
$op_dis = $dataID[0]['status'] ? $arr1 : $arr2;
?>
                <td>
                    <select name="itemstatus">
                        <?php print_r($op_dis);?>
                    </select>
                </td>
            </tr>
            <tr>
                <td> &nbsp; </td>
                <td> <input type='submit' name='update_item' value='Update'> </td>
            </tr>
        </table>
    </form>
    <?php
if ($edit_success) {
    echo "<p style='color: green; text-align:center'> Edit successfully </p>";
}
?>
</div>