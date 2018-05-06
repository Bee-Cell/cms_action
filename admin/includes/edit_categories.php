 <!-- For the edit here -->
<?php
                                if(isset($_GET["edit_id"])){
                                    $category_id = $_GET["edit_id"];

                                   

                                    ?>
                                    <!-- form -->
                                     <form action="" method="POST">
                                        <div class="form-group">
                                            <label for="cat_title"> EDIT CATEGORIES</label>
                                             <?php
                                             //select individuals action
                                                select_individual_category($category_id);
                                                

                                             ?>
                                            
                                        </div>
                                        <div class="form-group">
                                            
                                             <input type="submit" class="btn btn-primary" name="editing_category" value="Edit Category" >
                                           
                                        </div>
                                    </form>


                                    <?php
                                }

                            ?>

                            <?php
                                //for the update action
                                update_category();

                            ?>