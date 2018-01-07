<?php include "inc/header.php";?>
<?php include "inc/sidebar.php";?>
<?php include "../classes/cvMaker.php";?>

<?php
    $allM = new Module();
     if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
        $phi = $allM->addlanguage($_POST, $userId);
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
              <div class="form-group">
              <label for="sel1">Select language:</label>
              <select class="form-control" name="flang">
              <option>Choose Language</option>
                    <option value="Bangla">Bangla</option>
                    <option value="English">English</option>
                    <option value="Arabian">Arabian</option>
                    <option value="Hindi">Hindi</option>
                    <option value="Turkish">Turkish</option>
                    <option value="Japanees">Japanees</option>
                    <option value="Chinees">Chinees</option>
                    <option value="Urdu">Urdu</option>
              </select>
            </div>

   <div class="form-group">
              <label for="sel1">Reading level:</label>
              <select class="form-control" name="reading">
               <option>Choose Level</option>
                    <option value="Excellent">Excellent</option>
                    <option value="very Good">Very Good</option>
                    <option value="Good">Good</option>
                    <option value="Normal">Normal</option>
                    <option value="No Level">No level</option>
              </select>
            </div>
<div class="form-group">
              <label for="sel1">Writing level:</label>
              <select class="form-control" name="writing">
              <option>Choose Level</option>
                    <option value="Excellent">Excellent</option>
                    <option value="very Good">Very Good</option>
                    <option value="Good">Good</option>
                    <option value="Normal">Normal</option>
                    <option value="No Level">No level</option>
              </select>
            </div>

<div class="form-group">
              <label for="sel1">Speaking level:</label>
              <select class="form-control" name="speaking">
              <option>Choose Level</option>
                    <option value="Excellent">Excellent</option>
                    <option value="very Good">Very Good</option>
                    <option value="Good">Good</option>
                    <option value="Normal">Normal</option>
                    <option value="No Level">No level</option>
              </select>
            </div>

      
            <!-- button -->
           <p><button type="submit" name="submit" class="btn btn-sm btn-primary">Add</button></p>
  </form>
  </div>
</div>

<?php include "inc/footer.php";?>