<?php
// Fetch top-rated products
$sql = "SELECT * FROM menu ORDER BY rating DESC LIMIT 6"; // Adjust this query as necessary
$result = mysqli_query($con, $sql);

while ($product = mysqli_fetch_assoc($result)) {
?>

    <!-- Display the product -->
    <div class="col-lg-4 col-md-6 special-grid drinks">
        <div class="gallery-single fix">
            <img src="admin/<?php echo $product['image']; ?>" class="img-fluid" alt="Image" style="width: 100%; height:auto;">
            <div class="why-text">
                <h4><?php echo $product['title']; ?></h4>
                <p><?php echo $product['description']; ?></p>
                <p>Rs <?php echo $product['price']; ?> /-</p>
            </div>
        </div>

        <!-- Rating Form -->
        <form action="rate.php" method="POST">
            <input type="hidden" name="item_id" value="<?php echo $product['id']; ?>">

            <div class="stars">
                <!-- Display Star Rating -->
                <?php for ($i = 5; $i >= 1; $i--): ?>
                    <input class="star star-<?php echo $i; ?>" id="star-<?php echo $i . '-' . $product['id']; ?>" type="radio" name="star" value="<?php echo $i; ?>" required>
                    <label class="star star-<?php echo $i; ?>" for="star-<?php echo $i . '-' . $product['id']; ?>"></label>
                <?php endfor; ?>
            </div>

            <!-- Comment Section -->
            <textarea name="comment" placeholder="Leave a comment..." rows="2" class="form-control mb-2" required></textarea>

            <!-- Submit Button -->
            <button type="submit" name="rate" class="btn btn-primary btn-sm">Submit Review</button>
        </form>
    </div>

<?php } ?>
