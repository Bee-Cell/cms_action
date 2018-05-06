
<?php
    include("../includes/db_connection.php");
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
                                if(isset($_POST["submitting_category"])){
                                    $title = $_POST["cat_title"];
                                    if($title =="" || empty($title)){
                                        echo "The field should not be empty";
                                    }
                                    else{
                                        $query = "INSERT INTO `categories`(`category_id`, `category_title`) VALUES (null,'$title')";
                                        $resultset = mysqli_query($connection, $query);

                                        if(!$resultset){
                                            die("Failed!".mysqli_error($connection));
                                        }
                                    }
                                    


                                }
                            ?>
                            <form action="" method="POST">
                                <div class="form-group">
                                    <label for="cat_title"> Add Category</label>
                                    <input type="text" class="form-control" name="cat_title">
                                </div>
                                <div class="form-group">
                                    <input type="submit" class="btn btn-primary" name="submitting_category" value="Add Category" >
                                </div>
                            </form>
                         </div>

                         <!-- Another side display -->

                         <div class="col-xs-6">
                            <table class="table table-bordered table-hover">
                                <?php
                                    
                                    $query = "SELECT *FROM categories";
                                    $select_all_categories_query = mysqli_query($connection, $query);

                                ?>
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Category Title</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        while($row = mysqli_fetch_array($select_all_categories_query)){
                                            ?>
                                                 <tr>
                                                    <td><?php echo $row["category_id"];?></td>
                                                    <td><?php echo $row["category_title"];?></td>
                                                </tr>
                                        <?php
                                        }
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
