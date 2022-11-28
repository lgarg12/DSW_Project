<?php
                    // localhost, username, passweord, database
    $conn = mysqli_connect("localhost", "root", "", "Blogs");
    
    if(!$conn){
        echo "connection not establised";
    }

    $sql = "SELECT * FROM blogs";
    $query = mysqli_query($conn,$sql);



    if(isset($_REQUEST["new_post"])){
        $title = $_REQUEST['title'];
        $content = $_REQUEST['content'];
        
        // querry
        $sql = "INSERT INTO blogs(title,content) VALUES('$title','$content')";
        
        // merging querry with sql
        mysqli_query($conn, $sql);

        header("Location: index.php?info=added");
        exit();
    }

    if(isset($_REQUEST['id'])){
        $id = $_REQUEST['id'];

        $sql = "SELECT * FROM blogs WHERE id = $id";
        $query = mysqli_query($conn, $sql);
    }

    if(isset($_REQUEST["update"])){
        $id = $_REQUEST['id'];
        $title = $_REQUEST['title'];
        $content = $_REQUEST['content'];

        $sql = "UPDATE blogs SET title = '$title', content = '$content' WHERE id = $id";
        mysqli_query($conn, $sql);

        header("Location: index.php?info=updated");
        exit();
    }
    if(isset($_REQUEST['delete'])){
        $id = $_REQUEST['id'];

        $sql = "DELETE FROM blogs WHERE id = $id";
        $query = mysqli_query($conn, $sql);
        header("Location: index.php?info=delete");
        exit();
    }
?>