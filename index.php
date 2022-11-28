<?php
    include "logic.php"
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mohit's Legacy</title>
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
              <a href="#home" class="nav-link">
                <span class="link-text link">about</span>
              </a>
            </li>
            <li class="item">
              <a href="#skill-achievement" class="nav-link">
                <span class="link-text link">skills & work</span>
              </a>
            </li>
            <li class="item">
              <a href="#portfolio" class="nav-link">
                <span class="link-text link">Portfolio</span>
              </a>
            </li>
            <li class="item">
              <a href="#blogs" class="nav-link">
                <span class="link-text link">Blogs</span>
              </a>
            </li>
          </ul>
        </nav>
    </header>
    <main>
        <section class="home" id="home">
          <div class="content">
            <div class="tagline">
              <h1 class="name">Mohit Sharma</h1>
              <h3 class="name">Student at Queen Mary University of London</h3>
            </div>
            <p>
            My aim is to become an expert in full stack development,
            <br> to achieve this I'm pursuing my undergraduate degree in computer science and further I'll be doing masters as well. <br>
             I Believe this is going to be a great experience and journey to become an expert in my work.
            </p>
          </div>
        </section>
        <section class="skill-achievement" id ="skill-achievement">
          <br>
          <div class="div1">
            <div class="edu-div">
                <h1 class="sec2-h">EDUCATION</h1>
                <h2>Queen Mary University of London</h2>
                <p>Bachelor of Science - BS, Computer Science</p>
                <p>2020 - 2024</p>
                <br>
                <br>
                <h2>Prince Academy of Higher Edu..</h2>
                <p>High School Diploma, High School/Secondary Certificate Programs</p>
                <p>2018 - 2020</p>
              </div>
              <div class="experiences">
                <h1 class="sec2-h">Internships and Experience</h1> 
                <h1>Apple consumer online service</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo repellat 
                <br>  
                eius sapiente eligendi ut incidunt nemo natus tempora temporibus exercitationem</p>
                <p>more coming soon... :D</p>
              </div>
          </div>
          <div class="div2">
            <div class="skill">
              <div class="skill tech">
                <h1 class="sec2-h">TECH | Primary skills</h1>
                <h2>PHP</h2>
                <h2>Java</h2>
                <h2>Python</h2>
                <h2>HTML</h2>
                <h2>Marketing</h2>
                <h2>Sales</h2>
                <h2>Research</h2>
              </div>
              <br><br>
              <div class="other skill">
                <h1 class="sec2-h">Secondary / social skills skills</h1>
                <h2>English</h2>
                <h2>Communication</h2>
                <h2>Presentation</h2>
                <h2>Project management</h2>
              </div>
           </div>
          </div>
        </section>
        <section class="portfolio" id="portfolio">
             <h1>Projects coming Very soon 😀..</h1>
        </section>
        <section class="blogs" id="blogs">
          <div class="upper-content">
            <a class="add-blogs" href="addPost.php">Add new Blog</a>
            <?php if(isset($_REQUEST['info'])){?>
                <?php if($_REQUEST['info'] == "added"){?>
                  <h1 class="success">Post has been added successfully</h1>
                <?php }else if($_REQUEST['info'] == "updated"){ ?>
                  <h1 class="success">Post has been updated</h1>
                <?php }else if($_REQUEST['info'] == "delete"){ ?>
                  <h1 class="success">Post has been DELETED</h1>
                <?php } ?>
            <?php }  ?>
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
    <footer>
      <div class="contact-us">
        <h1>Contact me, </h1>
        <form action="">
          <div class="container">
            <label for="name">Name:    </label><input type="text" name="name" id="#name" />
          </div>
          <br>
          <div class="container">
            <label for="email">Email:   </label><input type="text" name="email" id="#email" />
          </div>
          <br>
          <div class="container">
            <label for="message">Message: </label><input type="text" class='message' name="message" id="#message" />
          </div>
          <br>
          <button type="submit">Submit</button>
        </form>
      </div>
      <div class="cc">
        <p>developed by Mohit Sharma &copy;</p>
      </div>
    </footer>
    <script src="script.js"></script>
</body>
</html>