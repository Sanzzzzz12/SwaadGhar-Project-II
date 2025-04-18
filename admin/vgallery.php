<?php include "header.php"; ?>
<?php include "connect.php"; ?>
<style type="text/css">
	body {
		font-family: Arial, sans-serif;
	}

	.content {
		max-width: 1200px;
		margin: 0 auto;
		padding: 20px;
	}

	.gallery-nav {
		text-align: center;
		margin-bottom: 20px;
	}

	.gallery-nav a {
		text-decoration: none;
		color: #e63946;
		font-weight: bold;
		margin: 0 20px;
		font-size: 1.2em;
	}

	table {
		width: 100%;
		border-collapse: collapse;
	}

	td {
		width: 25%;
		padding: 15px;
		text-align: center;
	}

	.gallery-card {
		background-color: #fff;
		border-radius: 10px;
		box-shadow: 0 4px 8px rgba(0,0,0,0.2);
		padding: 10px;
		transition: transform 0.2s;
	}

	.gallery-card:hover {
		transform: scale(1.05);
	}

	.gallery-card img {
		width: 100%;
		height: 210px;
		object-fit: cover;
		border-radius: 8px;
	}

	.del {
		color: #e63946;
		text-decoration: none;
		display: inline-block;
		margin-top: 10px;
		font-weight: bold;
	}

	.del:hover {
		color: #1d3557;
		text-shadow: 1px 1px 2px #aaa;
	}
</style>

<div class="content">
	<div class="gallery-nav">
		<a href="gallery.php">Upload Gallery</a>
		<a href="vgallery.php">View Gallery</a>
	</div>

	<table>
		<?php
		$r = 0;
		$s = mysqli_query($con, "SELECT * FROM gallery");
		while ($row = mysqli_fetch_array($s)) {
			if ($r % 4 == 0) echo "<tr>";

			echo "<td>
					<div class='gallery-card'>
						<img src='{$row['image']}' alt=''>
						<a href='dgallery.php?id={$row['id']}' class='del'>Delete</a>
					</div>
				  </td>";

			if ($r % 4 == 3) echo "</tr>";
			$r++;
		}
		?>
	</table>
</div>

<?php include "footer.php"; ?>
