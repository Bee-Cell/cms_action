   <!-- Blog Sidebar Widgets Column -->
   <div>

    
    
        <!-- Blog Search Well -->
                <div class="well">
                    <h4>Blog Search</h4>
                    <form action="search.php" method="POST">
                        <div class="input-group">
                            <input type="text" name="search_input" class="form-control">
                            <span class="input-group-btn">
                                <button name="submiting_search" class="btn btn-default" type="submit">
                                    <span class="glyphicon glyphicon-search"></span>
                            </button>
                            </span>
                        </div>
                    <!-- /.input-group -->
                    </form>
                    
                </div>

                <!-- Blog Categories Well -->
                <div class="well">
                    <h4>Blog Categories</h4>
                    <div class="row">
                        <div class="col-lg-12">
                            
                            <ul class="list-unstyled">
                            <?php
                                $query = "SELECT *FROM categories";
                                $select_all_category_query = mysqli_query($connection, $query);
                                while($row = mysqli_fetch_array($select_all_category_query)){

                                    
                                    echo "<li><a href='#'>{$row['category_title']}</a></li>";
                                }
                            ?>
                            </ul>
                        </div>
                        
                    </div>
                    <!-- /.row -->
                </div>

                <!-- Side Widget Well -->
                <div class="well">
                    <h4>Side Widget Well</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, perspiciatis adipisci accusamus laudantium odit aliquam repellat tempore quos aspernatur vero.</p>
                </div>

   </div>

               
