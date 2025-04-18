
<style>
	body {
	background-color:rgb(243, 245, 247);
	/* Dark gray-blue background for admin feel */
	margin: 0;
	font-family: 'Poppins', sans-serif;
}

/* Header Styling */
.h {
	color: white;
	background-color: #23272a;
	/* Darker admin panel header */
	font-size: 2.5em;
	text-align: center;
	padding: 25px;
	font-weight: bold;
	letter-spacing: 2px;
	text-transform: uppercase;
	

}

/* Navigation Bar */
.mbg {
	background-color:rgb(32, 35, 39);
	/* Darker admin panel navbar */
	padding: 15px;
	
	text-align: center;
	
}

/* Menu Links */
.menu {
	color: white;

	font-family: "Century Gothic", sans-serif;
	font-size: 1.3em;
	padding: 12px 20px;
	text-decoration: none;
	display: inline-block;
	border-radius: 6px;
	transition: all 0.3s ease-in-out;
	border: 1px solid transparent;
}

/* Parcel Clients Special Styling */


/* Menu Hover Effects */
.menu:hover {
	color:rgb(206, 162, 128);
	/* Orange accent */
	background-color:rgb(213, 196, 145);
	
}

/* Logout Button */
.menu[style*="color: red;"] {
	font-weight: bold;
	background-color:rgb(233, 178, 178);
	border: 2px solid red;
	padding: 10px 16px;
	border-radius: 8px;
	transition: 0.3s;
}



/* Responsive Design */
@media (max-width: 768px) {
	.menu {
		font-size: 1.1em;
		padding: 10px;
		display: block;
		margin: 10px auto;
	}

	.mbg {
		padding: 10px;
	}
}
	</style>
<div class="h">Swaadghar  Restaurent</div>
<div class="mbg">
	<a href="after_login.php" class="menu">Parcel Clients</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<a href="food.php" class="menu">Food Menu</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<a href="gallery.php" class="menu">Gallery</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<a href="review.php" class="menu">Reviews</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<a href="food_cat.php" class="menu">Food Category</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<a href="logout.php" class="menu" style="color: red;">Logout</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	
</div>
<br><br>
