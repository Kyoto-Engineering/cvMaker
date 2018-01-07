<?php include "inc/header.php";?>
<?php include "inc/sidebar.php";?>
<?php include "../Classes/cvMaker.php";?>
<?php
    $allM = new Module();
     if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
        $achivement = $allM->addAchivement($_POST, $userId);
    }
?>
 


  <div class="container-wrap">
<div class="formback">
          <?php
                if (isset($achivement)) {
                    echo $achivement;
                }
            ?>  
 <form action="" method="post">
    <div class="form-group">
      <label>Achievement Name:</label>
      <input type="text" class="form-control"  placeholder="Enter Achievement Name" name="achivement">
    </div>
    <div class="form-group">
    <label for="email">Achievement Details:</label>
      <textarea name="detail" rows="4" cols="50" >
      </textarea>
    </div>
    <div class="checkbox">
      <label><input type="checkbox" name="remember"> Remember me</label>
    </div>
    <button type="submit" name="submit" class="btn btn-default">Submit</button>
  </form>
  </div>
</div>

  </div>
</div>

<?php include "inc/footer.php";?>