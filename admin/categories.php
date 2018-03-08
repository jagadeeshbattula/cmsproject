<?php include "includes/admin_header.php" ?>


    <div id="wrapper">

        <!-- Navigation -->
        <?php include "includes/admin_navigation.php" ?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Welcome Admin
                            <small>Author name</small>
                        </h1>
                        
                        <div class="col-xs-6">
                           
                        <?php insert_categories();  ?> <!-- function to add categories -->
                        
                        <!-- form to add categories -->  
                        <form action="" method="post">
                            <div class="form-group">
                               <lable>Add Category</lable>
                                <input class="form-control" type="text" name="cat_title">
                            </div>
                            <div class="form-group">
                                <input class="btn btn-primary" type="submit" name="submit" value="Add Category">
                            </div>
                        </form>
                        
                        
                        <?php  //update categories  
                            if(isset($_GET['edit'])){
                                $cat_id = $_GET['cat_id'];
                                
                                include "includes/update_categories.php";
                            } 
                        ?>
                        
                        </div>
                        
                       
                       <div class="col-xs-6">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Category</th>
                                    </tr>
                                </thead>
                                <tbody>
                                  
                                    <?php findAllCategories(); ?>
                                    <?php deleteCategories(); ?>
                                    
                                </tbody>
                            </table>
                        </div> 
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

   
   <?php include "includes/admin_footer.php" ?>x