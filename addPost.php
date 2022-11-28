<?php 
    include "logic.php"
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            padding: 0;
            margin:0;
            box-sizing: border-box;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            background: black;
            height:100vh;
        }
        .form{
            color:white;
        }
        .form form input,textarea{
            min-height:40px;
            margin:30px;
            width:500px;
            border: none;
            font-size:1.5rem;
        }
        .form form textarea{
            min-height:80px;
        }
        .form form button{
            border:none;
            padding:3px;
            font-size:1.5rem;
            background:white;
        }
    </style>
</head>
<body>
    <div class="form">
        <h1>Enter Content for Blog</h1>
        <form method="GET">
            <input type="text" name="title" placeholder="Blog Title" class="title"><br>
            <textarea name="content" class="" cols="30" rows="10"></textarea><br>
            <button class="btn" name="new_post">Add Post</button>
        </form>
   </div>
   <script>
       const button = document.querySelector(".btn");
        const title = document.querySelector(".title");
        const content = document.querySelector("textarea");

        buttom.addEventListener('submit',()=>{
            if(title.value == "" || content.innerText == ""){
                event.preventDefault();
            }
        });
   </script>
</body>
</html>