<?php include "inc/header.php";?>
<?php include "inc/sidebar.php";?>
<?php include "../Classes/cvMaker.php";?>

 <?php
    $allM = new Module();
     if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
        $phi = $allM->addPhilosophy($_POST, $userId);
    }
?>
  <div class="container-wrap">
  <?php
                if (isset($phi)) {
                    echo $phi;
                }
            ?>  
<div class="formback">
  <form action="" method="post">
        <div class="form-group row">
              <span style="color:red; font-size: 14px;">(1)</span> <label>How you plan your career and how you choose a job? </label>

              <div class="col-md-9" >
                <input class="form-control" style ="height:100%" name="ques1" type="text" id="example-text-input" placeholder="How you plan your career and how you choose a job">
              </div>
            </div>
            <div class="form-group row">
             <span style="color:red; font-size: 14px;">(2)</span>  <label>What skills help you thrive in your work?</label>
              <div class="col-md-9">
                <input class="form-control" style ="height:100%" name="ques2" type="text" id="example-text-input" placeholder="What skills help you thrive in your work?">
              </div>
            </div>


            <div class="form-group row">
              <span style="color:red; font-size: 14px;">(3)</span> <label>What do you consider to be your greatest strength?</label>
              <div class="col-md-9">
                <input class="form-control" style ="height:100%" name="ques3" type="text" id="example-text-input" placeholder="What do you consider to be your greatest strength?">
              </div>
            </div>


            
            <!-- button -->
            <div class="form-group row">
              <label for="example-text-input" class="col-md-3 col-form-label"></label>
              <div class="col-md-9">
                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                <a href="address.php"><button type="submit" class="btn btn-primary">Next</button></a>
              </div>
            </div> 
  </form>
  </div>
</div>

<?php include "inc/footer.php";?>