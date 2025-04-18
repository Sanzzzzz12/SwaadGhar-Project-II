<?php include "header.php";?>
	<?php include "connect.php"; ?>
   
	
<style>
    .content {
        text-align: center;
        padding: 20px;
    }
    table {
        width: 90%;
        margin: auto;
        border-collapse: collapse;
        background: white;
    }
    th, td {
        padding: 12px;
        text-align: center;
        border: 1px solid #ddd;
    }
    th {
        background:rgb(146, 112, 90);
        color: white;
        font-size: 18px;
    }
    tr:nth-child(even) {
        background: #f9f9f9;
    }
    tr:hover {
        background: #f1f1f1;
        transition: 0.3s;
    }
    a {
        text-decoration: none;
        padding: 6px 10px;
        border-radius: 5px;
    }
    .view-link {
        background: #007bff;
        color: white;
    }
    .delete-link {
        background: #dc3545;
        color: white;
    }
    .view-link:hover, .delete-link:hover {
        
        opacity: 0.8;
    }
</style>

<div class="content">
	<br><br>

    <table>
        <tr>
            <th colspan="8">PARCEL CLIENTS</th>
        </tr>
        <tr>
            <th>Product ID</th>
            <th>User ID</th>
            <th>Customer Name</th>
            <th>Mobile</th>
            <th>Email</th>
            <th>Address</th>
            <th>View Product</th>
            <th>Delete</th>
        </tr>
        <?php
        $s = mysqli_query($con,"SELECT * FROM checkout");
        while($r = mysqli_fetch_array($s))
        {
        ?>
        <tr>
            <td><?php echo $r['p_id']; ?></td>
            <td><?php echo $r['u_id']; ?></td>
            <td><?php echo $r['name']; ?></td>
            <td><?php echo $r['mobile']; ?></td>
            <td><?php echo $r['email']; ?></td>
            <td><?php echo $r['location']; ?></td>
            <td><a href="viewcart.php?pid=<?php echo $r['p_id']; ?>&uid=<?php echo $r['u_id']; ?>" class="view-link">View Product </a></td>
            <td><a href="delfood.php"class="delete-link">Delete</a></td>
        </tr>
        <?php
        }
        ?>
    </table>
</div>

