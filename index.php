<?php
    include "logic.php"
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blogs</title>
    <link href="normalize.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <nav class="nav">
          <a href="#" class="toggle-button">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
          </a>
          <ul class="nav-items">
            <li class="item">
              <a href="#skill-achievement" class="nav-link">
                <span class="link-text link">BloggersSpot</span>
              </a>
            </li>
            
            <li class="item">
              <a href="#blogs" class="nav-link">
                <span class="link-text link">BLOGS</span>
              </a>
            </li>

            <li class="item">
              <a href="#home" class="nav-link">
                <span class="link-text link">ABOUT</span>
              </a>
            </li>

            <li class="item">
              <a href="login.html" class="nav-link">
                <span class="link-text link">Sign In</span>
              </a>
            </li>
          </ul>
        </nav>
    </header>
    <main>
        <section class="home" id="home">
          <div class="content">
            <div class="tagline">
              <h1 class="name">Blog Site</h1>
              <h3 class="name">Jaypee Institue of Information Technology</h3>
            </div>
            <p>
              Create a Unique and Beautiful Blog easily...
            </p>
          </div>
        </section>
        <section class="blogs" id="blogs">
          <div class="upper-content">
            <a class="add-blogs" href="addPost.php">Be Creative here</a>
          </div>
          <div class="tagline">
              <h1 class="name">Blog with the best</h1>
          </div>
          <div class="row">
              <?php foreach($query as $q){ ?>
                  <div class="card-body">
                      <h2 class="card-title"><?php echo $q['title'];?></h2>
                      <p class="card-text"><?php echo substr($q['content'], 0, 50);?>...</p>
                      <a href="viewBlog.php?id=<?php echo $q['id']?>" class="btn btn-light">Read More <span class="text-danger">&rarr;</span></a>
                  </div>
              <?php }?>
          </div>
        </section>
    </main>
    <br>
    <hr>
    <footer>
      <div class="contact-us">
        <h1>Contact Us</h1>
        <form method= "POST" action="">
          <div class="container">
            <label for="name">Name:    </label><input type="text" name="name" id="#name" />
          </div>
          <br>
          <div class="container">
            <label for="email">Email:   </label>
            <input type="email" name="email" id="#email" />
          </div>
          <br>
          <div class="container">
            <label for="message">Message: </label>
            <input type="text" class='message' name="message" id="#message" />
          </div>
          <br>
          <button type="submit">Submit</button>
        </form>
      </div>
      <br>
      <div class="cc">
        <p>developed with &hearts;</p>
      </div>
    </footer>
    <script src="script.js"></script>
</body>
</html>