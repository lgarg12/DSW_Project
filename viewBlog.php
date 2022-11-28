<?php
    include "logic.php"
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blogs</title>
    <style>
        body{
            padding: 0;
            margin:0;
            box-sizing: border-box;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        h1{
            font-size: 3rem;
        }
        p{
            font-size: 1.5rem;
        }
        .data{
            display:flex;
            flex-direction:column;
            justify:content:center;
            align-items:center;
        }
        .butns{
            display:flex;
        }
        .butns a,form>button{
            width:100px;
            font-size:1.5rem;
            margin:10px;
            background: black;
            color: white;
        }
        .butns a{
            text-decoration: none;
            border: 1px solid black;
            border-radius: 5px;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="data">
        <?php foreach($query as $q){ ?>
            <div>
                <h1><?php echo $q['title']; ?></h1>
                <p><?php echo $q['content']; ?></p>
            </div>
            <div class="butns">
                <a href="edit.php?id=<?php echo $q['id']; ?>">Edit</a>
                <form action="" method="POST">
                    <input type="text" hidden name="id" value="<?php echo $q['id']; ?>">
                    <button name="delete">Delete</button>
                </form>

            </div>
        <?php } ?>
    </div>
    
</body>
</html>