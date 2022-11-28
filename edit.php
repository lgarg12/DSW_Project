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
        <h1>Enter Updated content</h1>
        <?php foreach($query as $q){?>
            <form method="GET">
                <input type="text" hidden name="id" value="<?php echo $q['id']; ?>">
                <input type="text" name="title" placeholder="Blog Title" class="title" value="<?php echo $q['title']; ?>"><br>
                <textarea name="content" class="" cols="30" rows="10"><?php echo $q['title']; ?></textarea><br>
                <button type="Submit" class="btn" name="update">Add Post</button>
            </form>
        <?php } ?>
   </div>
   <script>
        const button = document.querySelector(".btn");
        const title = document.querySelector(".title");
        const content = document.querySelector("textarea");

        buttom.addEventListener('click',()=>{
            if(title.value == "" || content.innerText == ""){
                event.preventDefault();
            }
        });
   </script>
</body>
</html>