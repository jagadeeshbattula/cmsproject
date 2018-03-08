<?php

if(isset($_POST['create_post'])){
    
    $post_title = $_POST['title'];
    $post_category_id = $_POST['post_category_id'];
    $post_author = $_POST['author'];
    $post_status = $_POST['post_status'];
    $post_image = $_FILES['image']['name'];
    $post_image_temp = $_FILES['image']['tmp_name'];
    $post_tags = $_POST['post_tags'];
    $post_content = $_POST['post_content'];
    $post_date = date('d-m-y');
    $post_comment_count = 4;
    
    move_uploaded_file($post_image_temp, "../images/$post_image");
    
    $query = "INSERT INTO posts(post_category_id, post_title, post_author, post_date, post_image, post_content, post_tags, post_comment_count, post_status) ";
    $query .= "VALUES('{$post_category_id}','{$post_title}','{$post_author}',now(),'{$post_image}','{$post_content}','{$post_tags}','{$post_comment_count}','{$post_status}') ";
    $save_post_query = mysqli_query($connection, $query);
    if(!$save_post_query){
        die("query failed". mysqli_error($connection));
    }
    
}



?>
   

   
   
   
   
   
   <form action="" method="post" enctype="multipart/form-data">
    
    <div class="form-group">
        <lable>Post Title</lable>
        <input class="form-control" type="text" name="title">
    </div>
    
    <div class="form-group">
        <lable>Post Category Id</lable>
        <input type="text" class="form-control" name="post_category_id">
    </div>
    
    <div class="form-group">
        <lable>Post Author</lable>
        <input type="text" class="form-control" name="author">
    </div>
    
    <div class="form-group">
        <lable>Post Status</lable>
        <input type="text" class="form-control" name="post_status">
    </div>
    
    <div class="form-group">
        <lable>Post Image</lable>
        <input type="file" class="form-control" name="image">
    </div>
    
    <div class="form-group">
        <lable>Post Tags</lable>
        <input type="text" class="form-control" name="post_tags">
    </div>
    
    <div class="form-group">
        <lable>Post Content</lable>
        <textarea name="post_content" id="" cols="30" rows="10" class="form-control"></textarea>
    </div>
    
    <input type="submit" class="btn btn-primary" name="create_post" value="Submit Post">
 
</form>