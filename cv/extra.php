<?php include "inc/header.php";?>
<?php include "inc/sidebar.php";?>
<?php include "../Classes/cvMaker.php";?>
<?php
    $allM = new Module();
     if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
        $extra = $allM->addExtra($_POST, $userId);
    }
?>


  <div class="container-wrap">
<div class="formback">
<?php
                if (isset($extra)) {
                    echo $extra;
                }
            ?>  
  <form action="" method="post">
       <div class="form-group row">
              <label for="example-text-input" class="col-md-3 col-form-label">Activity Name: </label>

              <div class="col-md-9" >
                <input class="form-control" name="activity" type="text" id="example-text-input" placeholder="Award Name">
              </div>
            </div>
           <div class="form-group">
    <label for="email">Activity Details:</label>
      <textarea name="detail" rows="4" cols="50" >
      </textarea>
    </div>
          </div>

           
            
            <!-- button -->
            <div class="form-group row">
              <label for="example-text-input" class="col-md-3 col-form-label"></label>
              <div class="col-md-9">
                <button type="submit" name ="submit" class="btn btn-primary">Submit</button>
            </div> 
  </form>
  </div>
</div>

<?php include "inc/footer.php";?>