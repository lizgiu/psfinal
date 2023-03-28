<!DOCTYPE html>
<html>
  <head>
    <title>Paradigm Skateboards</title>
    <link rel="icon" type="image/x-icon" href="/images/WrldWdeStkr.png" />
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="/assets/css/style.css" />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Courier+Prime&display=swap"
    />
    <style>
      /* body,h1,h2,h3,h4,h5,h6 {font-family: "Inter", sans-serif}
      .bar-block .bar-item {padding:20px} */
    </style>
  </head>
  <body>
    <div class="products">
      <div class="container">
        <h1><a href="index.html">PARADIGM SKATEBOARDS</a></h1>

        <div class="nav" class="noDecoration">
          <a class="nav" href="/index.php">Home</a>
          <a href="pages/blog.html">Blog</a>
        </div>

        <hr />
        

        <div class="product-items">
          <?php include('includes/products.php'); ?>

        </div>
      </div>
    </div>

    <div class="links" class="noDecoration">
      <h1>Quick links</h1>
      <a href="pages/blog.html">Blog</a>
      <a class="links" href="returns.html">Returns and Exchanges</a>
      <a class="links" href="terms.html">Terms of Service</a>
      <a class="links" href="shipping.html">Shipping Information</a>
      <a class="links" href="privacy.html">Privacy Policy</a>
      <a class="links" href="contact.html">Contact</a>
    </div>

    <div class="newsletter-subscription">
      <form action="#" method="post">
        <label for="email">Subscribe to our newsletter:</label>
        <input
          type="email"
          id="email"
          name="email"
          placeholder="Your email address"
        />
        <button type="submit">Subscribe</button>
      </form>
    </div>

    <div>
      <footer>
        <div class="third">
          <p>© 2023 Paradigm Skateboards</p>
        </div>
      </footer>
    </div>
  </body>
</html>
