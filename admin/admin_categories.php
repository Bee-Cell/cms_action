
<?php
    
    include("./includes/admin_header.php");
    
?>
    <div id="wrapper">

        <!-- Navigation -->
        <?php
            include("./includes/admin_navigation.php");
        ?>
        <!-- Admin working area -->
          <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Welcome to the Admin Page
                            <small>Admin</small>
                        </h1>
                        <!-- one side -->
                        <div class="col-xs-6">

                            <?php
                            //insert function or action
                                insert_categories();
                            ?>
                            <form action="" method="POST">
                                <div class="form-group">
                                    <label for="cat_title">ADD CATEGORIES</label>
                                    <input type="text" class="form-control" name="cat_title">
                                </div>
                                <div class="form-group">
                                    <input type="submit" class="btn btn-primary" name="submitting_category" value="Add Category" >
                                </div>
                            </form>
                            <hr>

                            <!-- For the edit here -->
                            <?php

                                if(isset($_GET["edit_id"]))
                                {
                                    // $cat_id = $_GET["edit_id"]; // if we set here it is automatically passed to include file
                                    include("./includes/edit_categories.php");
                                }

                                
                            ?>



                           


                         </div>

                         <!-- Another side display -->

                         <div class="col-xs-6">
                            <table class="table table-bordered table-hover">
                                
                                    <!-- for displaying all categories  -->
                                    
                              
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Category Title</th>
                                        <th>EDIT || DELETE</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    //select all action
                                       find_all_categories();
                                    ?>

                                    <?php
                                        //for delete action 
                                       delete_selected_category();


                                    ?>
                                    
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


       

    </div>
    <!-- /#wrapper -->

   <?php
    include("./includes/admin_footer.php");
   ?>
