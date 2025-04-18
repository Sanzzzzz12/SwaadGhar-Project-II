<?php
session_start();
if (isset($_SESSION['admin'])) {
    include "header.php"; 
?>
<div style="background-color: white; width: 98%; margin: 0 auto;">
    <br>
    <?php
    include "connect.php";

    if (!isset($_GET['pid']) || !isset($_GET['uid'])) {
        die("Missing Product ID or User ID.");
    }

    $pid = mysqli_real_escape_string($con, $_GET['pid']);
    $uid = mysqli_real_escape_string($con, $_GET['uid']);

    $query = "SELECT addcart.price, addcart.p_id, addcart.qty, addcart.total, addcart.id, 
                     checkout.name, addcart.u_id, menu.image
              FROM addcart
              INNER JOIN checkout ON addcart.p_id = checkout.p_id 
              INNER JOIN menu ON menu.id = checkout.p_id  
              WHERE addcart.u_id = '$uid' AND checkout.p_id = '$pid'";

    $s = mysqli_query($con, $query);

    if (!$s) {
        die("Query Failed: " . mysqli_error($con));
    }
    ?>

    <table border="1" align="center" width="90%" cellspacing="10" cellpadding="12">
        <tr>
            <th>NO</th>
            <th>UserID</th>
            <th>Product ID</th>
            <th>Price</th>
            <th>Qty</th>
            <th>Total</th>
            <th>IMAGE</th>
        </tr>
        <?php while ($r = mysqli_fetch_array($s)) { ?>
        <tr>
            <td><?php echo $r['id']; ?></td>
            <td><?php echo $r['u_id']; ?></td>
            <td><?php echo $r['p_id']; ?></td>
            <td><?php echo $r['price']; ?></td>
            <td><?php echo $r['qty']; ?></td>
            <td><?php echo $r['total']; ?></td>
            <td><img src="<?php echo $r['image']; ?>" width="100" height="100"></td>
        </tr>
        <?php } ?>
    </table>
</div>

<?php 
    include "footer.php";
} else {
    header("Location: index.php");
    exit();
}
?>
