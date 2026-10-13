<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shoes Store - Home</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>

    <!-- Reusable Navigation Bar -->
    <?php include 'nav.php'; ?>

    <!-- YOUR MAIN BODY CONTENT CONTINUES BELOW -->
    <main class="main-content">
      <section class="hero">
        <h1>Welcome to Shoes Store</h1>
        <p>Discover the latest footwear collections from top brands.</p>
        <a href="allbrands.php" class="shop-btn">Shop Now</a>
      </section>

      <section class="featured-products">
        <h2>Featured Shoes</h2>
        <!-- Your featured product cards / layout here -->
      </section>
    </main>

    <footer>
      <p>&copy; <?php echo date('Y'); ?> Shoes Store. All rights reserved.</p>
    </footer>
  </body>
</html>
