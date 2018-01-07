<?php include "inc/header.php";?>
<?php include "inc/sidebar.php";?>
<?php include "../classes/cvMaker.php";?>

<?php
    $allM = new Module();
     if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
        $phi = $allM->addskill($_POST, $userId);
    }
?>

 


  <div class="container-wrap">
<div class="formback">
 <?php
      if (isset($phi)) {
        echo $phi;
                }
            ?>  
  <form action="" method="post">
         <div class="form-group row">
              <label class="col-md-3 col-form-label">Skill you have: </label>

              <div class="col-md-9" >
                <input class="form-control" name="skill" type="text" id="example-text-input" placeholder="Skill Topic">
              </div>
            </div>
           <div class="form-group">
    <label for="email">Write your Skill Details:</label>
      <textarea name="descp" rows="4" cols="50" >
      </textarea>
    </div>

  
      
            <!-- button -->
           <p><button type="submit" name="submit" class="btn btn-sm btn-primary">Add</button></p>
  </form>
  </div>
</div>

<?php include "inc/footer.php";?>