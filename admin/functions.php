<?php



function insert_categories() {
	global $connection;

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
}


//returns object
function find_all_categories(){
	global $connection;
	$query = "SELECT *FROM categories";
    $select_all_categories_query = mysqli_query($connection, $query);
    while($row = mysqli_fetch_array($select_all_categories_query)){
        ?>
             <tr>
                <td><?php echo $row["category_id"];?></td>
                <td><?php echo $row["category_title"];?></td>
                 <td>
                    <a href="admin_categories.php?edit_id=<?php echo $row["category_id"]; ?>">EDIT</a> || 
                    <a href="admin_categories.php?delete_id=<?php echo $row["category_id"]; ?>">DELETE</a>
                </td>
            </tr>
    <?php
    }
                                 
}


function delete_selected_category(){
	global $connection;
	 if(isset($_GET["delete_id"])){
        $the_categroy_id = $_GET["delete_id"];
        
        $query = "DELETE FROM `categories` WHERE `category_id`= {$the_categroy_id}";
        $resultset = mysqli_query($connection, $query);
        header("location:admin_categories.php");
        
    }
}

function update_category(){
	global $connection;
	if(isset($_POST["editing_category"])){
	    $cat_id = $_POST["cat_id"];
	    $cat_title = $_POST["edit_cat_title"];

	   $query_statement = "UPDATE `categories` SET `category_title`='{$cat_title}' WHERE `category_id`=$cat_id";
	   var_dump($query_statement);
	   $update_resultset = mysqli_query($connection, $query_statement);
	   if(!$update_resultset){
	     die("QUERY FAILED" .mysqli_error($connection));
	   }
	   else{
	    header("Location: admin_categories.php");

	   }
	}
}

function select_individual_category($category_id){
	global $connection;
    $statement = "SELECT * FROM `categories` WHERE category_id = $category_id";
    $select_catagories_edit_query = mysqli_query($connection, $statement);
    while ( $data = mysqli_fetch_array($select_catagories_edit_query) ){
        ?>
        <input type="hidden" value="<?php echo $data['category_id'] ?>" name="cat_id" />
        <input type="text" class="form-control" name="edit_cat_title" value="<?php echo $data["category_title"]; ?>">


      <?php
      

    }
	

}
