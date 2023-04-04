<?php
    session_start();
    require 'dbcon.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>JOB VIEW</title>
</head>
<body>
  
    <div class="container mt-25">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>NEW JOB 
                            <a href="adminhome.php" class="btn btn-primary float-end">Add JOB</a>
                            <a href="student_curd.php" class="btn btn-primary float-end">stu_tabel</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>name</th>
                                    <th>position</th>
                                    <th>ctc</th>
                                    <th>discription</th>
                                    <th>png</th>
                                    <th>action</th>

                                   
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $query = "SELECT * FROM apply";
                                    $query_run = mysqli_query($con, $query);

                                    if(mysqli_num_rows($query_run) > 0)
                                    {
                                        foreach($query_run as $job)
                                        {
                                            ?>
                                            <tr>
                                                <td><?= $job['name']; ?></td>
                                                <td><?= $job['position']; ?></td>
                                                <td><?= $job['ctc']; ?></td>
                                                <td><?= $job['discription']; ?></td>
                                                <td><?= $job['png']; ?></td>
                                                
                                                <td>
                                                    <a href="job-view.php?id=<?= $job['name']; ?>" class="btn btn-info btn-sm">View</a>
                                                    <a href="job-edit.php?id=<?= $job['name']; ?>" class="btn btn-success btn-sm">Edit</a>
                                                    <form action="code.php" method="POST" class="d-inline">
                                                        <button type="submit" name="delete_job" value="<?=$job['id'];?>" class="btn btn-danger btn-sm">Delete</button>
                                                    </form>
                                                </td>
                                            </tr>
                                            <?php
                                        }
                                    }
                                    else
                                    {
                                        echo "<h5> No Record Found </h5>";
                                    }
                                ?>
                                
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
