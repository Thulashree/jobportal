<?php include('navbar.php'); ?>

<?php include('message.php'); ?>

   <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>New Jobs
                            <a href="index2.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="code.php" method="POST">

                            <div class="mb-3">
                                <label>Company Name</label>
                                <input type="text" name="name" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Position</label>
                                <input type="text" name="position" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>CTC</label>
                                <input type="text" name="ctc" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Job Discription</label>
                                <input type="text" name="discription" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>png</label>
                                <input type="file" name="png" class="form-control">
                            </div>
                            <div class="mb-3">
                                <button type="submit" name="post_job" class="btn btn-primary">Post Job</button>
                                 <a name="CURD TABLE" href="curdtabel.php" class="btn btn-primary">Curd Table</a>
                            
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>