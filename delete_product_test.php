

<?php include'connection.php'?>
<?php include'header.php'?>

<?php

    $delete = $_POST['delete_submit'];

    mysql_query("DELETE FROM shop WHERE item_name=$delete");
    ?>

    <section style="font-size: 22px; text-align: center;">
        <form action='remove_product.php' method='post' onsubmit="return confirm('Do you really want to delete this post?');">
            <p>
                Delete Post:&nbsp;
                <select name="delete">
                    <option value="1"><?php echo $item_name[1]; ?></option>
                    <?php
                    $result = mysql_query("SELECT item_name FROM shop");
                    while ($row = mysql_fetch_array($result)){
                        $blogvar  = array($row ['item_id'], $row ['item_price']);
                    ?>
                    <option value="1"><?php echo $item_name[1]; ?></option>
                    <?php
                    };
                    ?>
                </select>
                <p></p>
                <input type='submit' class='button' name='delete_submit' value='Delete'/>
            </p>
        </form>
    </section> 