<?php
require_once("../conn.php"); 
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sarkari Result</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <header class="container mt-2">
        <div class="row bg-danger align-items-center ">
            <div class="col-3 m-2">
                <img src="/sarkari_result/images/sarkari_result_logo.png" class="w-50">
            </div>
            <div class="col-6 fw-bold text-center text-white">
                <div class="text-uppercase display-5 justify-content-center mb-0">sarkari result</div>
                <div class="text-uppercase fs-5 d-flex justify-content-center mt-0">www.sarkariresult.com</div>
            </div>
        </div>
    </header>
    <!-- Navigation Menu -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark container">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03"
                aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 text-uppercase fw-bold">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item border-start">
                        <a class="nav-link mx-3" href="latest_job.html">Latest Job</a>
                    </li>
                    <li class="nav-item border-start">
                        <a class="nav-link mx-3" href="#">Result</a>
                    </li>
                    <li class="nav-item border-start">
                        <a class="nav-link mx-3" href="#">Admit Card</a>
                    </li>
                    <li class="nav-item border-start">
                        <a class="nav-link mx-3" href="#">Answer Key</a>
                    </li>
                    <li class="nav-item border-start">
                        <a class="nav-link mx-3" href="#">Syllabus</a>
                    </li>
                  
                </ul>
               
            </div>
        </div>
    </nav>
    <main class="container mt-5">
        <div class="card shadow-lg">
            <div class="card-header text-center bg-primary text-white fs-2">Job Listing</div>
            <div class="card-body text-center">
                <?php
                if(isset($_GET['error']) && $_GET['error']){
                    ?>
                    <div class="alert alert-danger">
                        Data Deleted Successfully
                    </div>
                    <?php
                }
                ?>
                 <?php
                if(isset($_GET['success']) && $_GET['success']){
                    ?>
                    <div class="alert alert-success">
                        Data  Successfully Inserted
                    </div>
                    <?php
                }
                ?>
               <table class="table-bordered table-primary table-striped">
                <tr>
                    <th>Job Titles</th>
                    <th>Action</th>
                </tr>
                <?php
                $sql = "SELECT `post_name`,`id` FROM `job_post`";
                $query = mysqli_query($conn,$sql);

                while($data = mysqli_fetch_assoc($query))
                {
                    ?>
                     <tr>
                    <td><a href="http://localhost/sarkari_result/post.php?id=<?php echo $data['id']; ?>"><?php echo $data['post_name']; ?></a></td>
                    <td>   
                        <a href="" class="btn btn-primary"><i class="fa-solid fa-pen-to-square"></i></a>
                        <a href="http://localhost/sarkari_result/admin/submit.php?delete=yes&id=<?php echo $data['id']; ?>" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a>
                    </td>
                </tr>
                    <?php
                }
                ?>
               
               </table>
            </div>
        </div>
    </main>
</body>
</html>