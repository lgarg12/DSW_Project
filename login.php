<?php
    include "logic.php"
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <title>Blogs</title>

</head>
<body>
  <style>
@import url('https://fonts.googleapis.com/css2?family=Montserrat&family=Poppins&display=swap');
body{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    height: 100vh;
    width: 100vw;
    overflow-x: hidden;
    font-family: 'Montserrat', sans-serif;
}
header{
    width: 100vw;
}
header nav{
    width: inherit;
}
    .home {
    background-image: url("./img/backC.jpg");
    background-position: center;
    background-size: cover;
    background-repeat: no-repeat;
}

.nav-items{
    width: inherit;
    display: flex;
    justify-content: space-evenly;
    align-items: center;
    padding-left: 0;
}
.item{
    margin: 5px;
    display: flex;
    justify-content: center;
    align-items: center;
}
.item .nav-link{
    text-decoration: none;
    list-style: none;
    transition: 100ms ease;
}
.link:hover{
    text-decoration: underline;
    color: rgb(255, 255, 255);
    transition: 200ms ease;
}
.link-text{
    color: rgb(229, 229, 229);
    font-size: 2rem;
    font-weight: 400;
}

.hero {
  display:flex;
  gap:500px
}
 #Login_form{
  position:relative;
  margin-top:250px;
} 
    </style>
    <header class="home">
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
              <a href="#portfolio" class="nav-link">
                <span class="link-text link">Sign In</span>
              </a>
            </li>
          </ul>
        </nav>
    </header>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>


    <section class="hero">

    <div>
      <h1>
        welcome Back
      </h1>
    </div>

    <div id="Login_form">
    <form>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
  </div>



    </section>


</body>
</html>