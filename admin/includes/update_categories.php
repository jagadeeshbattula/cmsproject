<form action="" method="post">
    <div class="form-group">
    <lable>Update Category</lable>
                                 
<?php
            
    if(isset($_GET['edit'])){
        $cat_id = $_GET['edit'];
        $query = "SELECT * FROM categories WHERE cat_id = {$cat_id}";
        $edit_categoryid_query = mysqli_query($connection, $query);
        while($row = mysqli_fetch_assoc($edit_categoryid_query)){
            $cat_id = $row['cat_id'];
            $cat_title = $row['cat_title'];
?>
                    
            <input type="text" value="<?php if(isset($cat_id)) {echo $cat_title;}  ?>" class="form-control" name="cat_title">
                                    
<?php
            }
        }
?>
                              

<?php //update category query
            
   if(isset($_POST['update_category'])) {
        $the_cat_title = $_POST['cat_title'];
        $query = "UPDATE categories SET cat_title = '{$the_cat_title}' WHERE cat_id = {$cat_id} ";
        $update_query = mysqli_query($connection, $query);
       if(!$update_query){
           die("query failed". mysqli_error($connection));
       }
                       
    }
?>                            
    </div>
    <div class="form-group">
        <input class="btn btn-primary" type="submit" name="update_category" value="Update">
    </div>
</form>