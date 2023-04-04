<?php
session_start();
require 'dbcon.php';
?>
<?php include('navbar.php'); ?>


<div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Jobs Edit
                            <a href="curdtabel.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <?php
                           if(isset($_GET['id']))
                           {
                               $name_job = mysqli_real_escape_string($con, $_GET['id']);
                               $query = "SELECT * FROM apply WHERE name='$name_job' ";
                               $query_run = mysqli_query($con, $query);
   
                               if(mysqli_num_rows($query_run) > 0)
                               {
                                   $job = mysqli_fetch_array($query_run);
                                
                                   ?>
                                
                                  
                                   <form action="code.php" method="POST">
                                   <input type="hidden" name="name_job" value="<?= $job['id']; ?>">

                                    <div class="mb-3">
                                       <label>Company Name</label>
                                       <input type="text" name="name" value="<?=$job['name'];?>" class="form-control">
                                     </div>
                                    <div class="mb-3">
                                       <label>Position</label>
                                      <input type="text" name="position" value="<?=$job['position'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                      <label>CTC</label>
                                      <input type="text" name="ctc"  value="<?=$job['ctc'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                      <label>Job Discription</label>
                                      <input type="text" name="discription"  value="<?=$job['discription'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                      <label>png</label>
                                      <input type="file" name="png" class="form-control">
                                   </div>
                                    <div class="mb-3">
                                       <button type="submit" name="update_job" class="btn btn-primary">Update Job</button>
                                       <a name="CURD TABLE" href="adminhome.php" class="btn btn-primary">Post Job</a>
                            
                                    </div>

                                    </form>
                                    <?php
                                }
                             
                                
                                else
                                {
                                 echo "<h4>No Such Job Found</h4>";
                                }
                            }
                             
                             
                            
                         
                                   ?>
                            
                </div>
            </div>
        </div>
    </div>
                
                    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
