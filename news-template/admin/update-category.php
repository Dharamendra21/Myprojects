<?php include "header.php"; 

include 'config.php';
    if($_SERVER["REQUEST_METHOD"] == "POST"){
    $cat_id = $_GET['id'];
    $cat_name = mysqli_real_escape_string($conn,$_POST['cat_name']);
    $sql1 = "UPDATE `category` SET `category_name` = '{$cat_name}' WHERE `category_id` = '{$cat_id}'";

    if(mysqli_query($conn, $sql1)){
        header("Location: category.php");
    }else{
        echo error_log();
    }
}
?>
  <div id="admin-content">
      <div class="container">
          <div class="row">
              <div class="col-md-12">
                  <h1 class="adin-heading"> Update Category</h1>
              </div>
              <div class="offset-md-3 col-md-6">
                    <?php 
                        include 'config.php';
                       if (isset($_GET['id'])) {
                        $c_id = $_GET['id']; 
                       }
                        $sql = "SELECT * FROM category WHERE category_id = '{$c_id}'";
                        $result = mysqli_query($conn, $sql);
                        if(mysqli_num_rows($result) > 0){
                            while($row = mysqli_fetch_assoc($result)){
                        
                    ?>
                  <form action="" method ="POST">
                      <div class="form-group">
                          <input type="hidden" name="cat_id"  class="form-control" value="<?php echo $row['category_id']; ?>" placeholder="">
                      </div>
                      <div class="form-group">
                          <label>Category Name</label>
                          <input type="text" name="cat_name" class="form-control" value="<?php echo $row['category_name']; ?>"  placeholder="" required>
                      </div>
                      <input type="submit" name="sumbit" class="btn btn-primary" value="Update" required />
                  </form>
                  <?php 
                            }
                        }
                  ?>
                </div>
              </div>
            </div>
          </div>
<?php include "footer.php"; ?>
