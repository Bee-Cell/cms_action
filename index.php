<?php
    include("./includes/db_connection.php");
    include("./includes/header.php");
    include("./includes/navigation.php");

?>

    

    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Blog Entries Column -->
            <?php
               

            ?>
            <div class="col-md-8">

                <h1 class="page-header">
                    Page Heading
                    <small>Secondary Text</small>
                </h1>

                <!-- First Blog Post -->

                <?php
                    $query = "SELECT *FROM posts";
                    $select_all_posts_query = mysqli_query($connection, $query);
                    while($row = mysqli_fetch_array($select_all_posts_query)){
                        ?>



                        <h2>
                            <a href="#"><?php echo $row['post_title']; ?> </a>
                        </h2>
                        <p class="lead">
                            by <a href="index.php"><?php echo $row['post_author']; ?></a>
                        </p>
                        <p><span class="glyphicon glyphicon-time"></span> Posted on  <?php echo $row['post_date']; ?> </p>
                        <hr>
                        <img class="img-responsive" src="http://placehold.it/900x300" alt="">
                        <hr>
                        <p><?php echo $row['post_content']; ?></p>
                        <a class="btn btn-primary" href="#">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>

                        <hr>

                <?php

                    }


                ?>
                

               

                <!-- Pager pagination -->
                <ul class="pager">
                    <li class="previous">
                        <a href="#">&larr; Older</a>
                    </li>
                    <li class="next">
                        <a href="#">Newer &rarr;</a>
                    </li>
                </ul>

            </div>

            <!-- Blog Sidebar Widgets Column -->
           
            <div class="col-md-4">

                <?php
                include("./includes/sidebar.php");
                ?>

            </div>

        </div>
        <!-- /.row -->

        <hr>

       <?php

       include("./includes/footer.php");
       ?>