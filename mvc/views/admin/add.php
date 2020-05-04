<!-- http://localhost/mvc_nongdan/index.php?controller=admin&action=add -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='style.css'>
    <title>Admin - Add a new item</title>
</head>

<body>
    <div class='content'>
        <div class='additem'>
            <a class='list' href='index.php?controller=admin&action=show'> Item list </a>
            <h3> Add a new item </h3>
            <form action='' method='POST' enctype="multipart/form-data">
                <table>
                    <tr>
                        <td> Image </td>
                        <td> <input type="file" name='itemthumb' placeholder="Thumb of item"> </td>
                    </tr>
                    <tr>
                        <td> Title </td>
                        <td> <input type='text' name='itemtitle' placeholder="Title of item"> </td>
                    </tr>
                    <tr>
                        <td> Status </td>
                        <td>
                            <select name="itemstatus">
                                <option value=1>Enabled</option>
                                <option value=0>Disabled</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td> Description </td>
                        <td> <input type='text' name='itemdescription' placeholder="Description of item"> </td>
                    </tr>
                    <tr>
                        <td> &nbsp; </td>
                        <td> <input type='submit' name='add_item'> </td>
                    </tr>
                </table>
            </form>
            <?php
if ($success) {
    echo $thumb;
    echo "<p style='color: green; text-align:center'> Insert successfully </p>";
}
?>
        </div>
    </div>
</body>

</html>