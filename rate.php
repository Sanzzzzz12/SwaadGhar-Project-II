<?php
// Include database connection
include "connect.php";

// Process the form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['rate'])) {
    $user_id = isset($_SESSION['id']) ? $_SESSION['id'] : null; // Get the logged-in user ID
    if ($user_id === null) {
        // If user is not logged in, redirect to login page
        header("Location: login.php");
        exit;
    }

    $item_id = intval($_POST['item_id']);
    $rating = intval($_POST['star']);
    $comment = mysqli_real_escape_string($con, trim($_POST['comment']));

    // Sentiment analysis based on keywords
    $positive_words = ['good', 'great', 'awesome', 'tasty', 'delicious', 'amazing', 'yummy', 'fresh'];
    $negative_words = ['bad', 'worst', 'terrible', 'awful', 'disgusting', 'stale', 'bland'];
    $sentiment = 'neutral';

    // Check if the comment contains any positive words
    foreach ($positive_words as $word) {
        if (stripos($comment, $word) !== false) {
            $sentiment = 'positive';
            break;
        }
    }

    // Check if the comment contains any negative words
    if ($sentiment === 'neutral') {
        foreach ($negative_words as $word) {
            if (stripos($comment, $word) !== false) {
                $sentiment = 'negative';
                break;
            }
        }
    }

    // Check if the user has already rated this item
    $check_query = "SELECT * FROM ratings WHERE userid = '$user_id' AND pid = '$item_id'";
    $result = mysqli_query($con, $check_query);

    if (mysqli_num_rows($result) > 0) {
        // If the user has already rated, update the rating and comment
        $update_query = "UPDATE ratings SET rating = '$rating', comment = '$comment', sentiment = '$sentiment' WHERE userid = '$user_id' AND pid = '$item_id'";
        mysqli_query($con, $update_query);
    } else {
        // If the user hasn't rated, insert a new rating and comment
        $insert_query = "INSERT INTO ratings (userid, pid, rating, comment, sentiment) VALUES ('$user_id', '$item_id', '$rating', '$comment', '$sentiment')";
        mysqli_query($con, $insert_query);
    }
}
?>

<!-- Product Rating Form (HTML) -->
<form action="" method="POST">
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
