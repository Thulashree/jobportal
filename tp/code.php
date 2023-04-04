<?php
session_start();
require 'dbcon.php';

if(isset($_POST['delete_job']))
{
    $name_job = mysqli_real_escape_string($con, $_POST['delete_job']);

    $query = "DELETE FROM apply WHERE id='$name_job' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Job Deleted Successfully";
        header("Location: curdtabel.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Job Not Deleted";
        header("Location: curdtabel.php");
        exit(0);
    }
}

if(isset($_POST['update_job']))
{
    $name_job = mysqli_real_escape_string($con, $_POST['name_job']);

    $name = mysqli_real_escape_string($con, $_POST['name']);
    $position = mysqli_real_escape_string($con, $_POST['position']);
    $ctc = mysqli_real_escape_string($con, $_POST['ctc']);
    $discription = mysqli_real_escape_string($con, $_POST['discription']);
    $png = mysqli_real_escape_string($con, $_POST['png']);

    $query = "UPDATE apply SET name='$name', position='$position', ctc='$ctc', discription='$discription', png='$png' WHERE id='$name_job' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Job Updated Successfully";
        header("Location: curdtabel.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Job Not Updated";
        header("Location: curdtabel.php");
        exit(0);
    }

}


if(isset($_POST['post_job']))
{
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $position = mysqli_real_escape_string($con, $_POST['position']);
    $ctc = mysqli_real_escape_string($con, $_POST['ctc']);
    $discription = mysqli_real_escape_string($con, $_POST['discription']);
    $png = mysqli_real_escape_string($con, $_POST['png']);
    $query = "INSERT INTO apply (name,position,ctc,discription,png) VALUES ('$name','$position','$ctc','$discription','$png')";

    $query_run = mysqli_query($con, $query);
    if($query_run)
    {
        $_SESSION['message'] = "Student Created Successfully";
        header("Location: adminhome.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Student Not Created";
        header("Location: adminhome.php");
        exit(0);
    }
}

?>
