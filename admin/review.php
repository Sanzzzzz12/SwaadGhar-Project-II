<?php include "header.php"; ?>
<?php include "connect.php"; ?>
<style type="text/css">

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
    .del {
        background: #dc3545;
        color: white;
    }
    .view-link:hover, .delete-link:hover {
        
        opacity: 0.8;
    }

</style>
<div class="content">
	<table border=1 width="100%" cellspacing="3" cellpadding="5" style="box-shadow: 5px 4px 10px 2px;">

		<tr>
			<th>ID</th><th>NAME</th><th>REVIEW</th><th>COMMENTS</th><th>REMOVE</th>
		</tr>
		<?php 
			$s = mysqli_query($con,"select * from review");
			while($r = mysqli_fetch_array($s))
			{
			?>
				<tr align=center>
					<td><?php echo $r['id']; ?></td>
					<td><?php echo $r['name']; ?></td>
					<td><?php echo $r['review']; ?></td>
					<td><?php echo $r['description']; ?></td>
					<td><a href="delreview.php?a=<?php echo $r['id']; ?>" class="del">DELETE</a></td>
				</tr>	
		<?php	
			}
		?>


	</table>	


</div>
<?php include "footer.php"; ?>