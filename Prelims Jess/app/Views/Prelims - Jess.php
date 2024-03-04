<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Adobo Website</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f2f2f2;
    }
    header {
      background-color: #ff9933;
      color: #fff;
      padding: 20px;
      text-align: center;
    }
    nav {
      background-color: #ffcc66;
      padding: 10px;
      text-align: center;
    }
    nav a {
      color: #fff;
      text-decoration: none;
      padding: 10px 20px;
    }
    nav a:hover {
      background-color: #ffbb33;
    }
    section {
      padding: 20px;
    }
    .container {
      width: 80%;
      margin: auto;
      overflow: hidden;
    }
    .item {
      float: left;
      width: 30%;
      margin: 1%;
      background-color: #fff;
      border-radius: 5px;
      box-shadow: 0 0 5px rgba(0,0,0,0.3);
      padding: 20px;
    }
  </style>
</head>
<body>
  <header>
    <h1>Welcome to Adobo Delights</h1>
  </header>
  <nav>
    <a href="#">Home</a>
    <a href="#">About</a>
    <a href="#">Menu</a>
    <a href="#">Contact</a>
  </nav>
  <section>
    <div class="container">
      <div class="item">
        <h2>Classic Adobo</h2>
        <p>The traditional Filipino adobo made with chicken or pork, soy sauce, vinegar, garlic, and spices.</p>
      </div>
      <div class="item">
        <h2>Adobo Flakes</h2>
        <p>Shredded adobo meat served with garlic rice and a fried egg.</p>
      </div>
      <div class="item">
        <h2>Adobo Pasta</h2>
        <p>Pasta tossed in adobo sauce with chicken, mushrooms, and bell peppers.</p>
      </div>
    </div>
  </section>
</body>
</html>
