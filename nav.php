<nav class="navbar navbar-expand-lg navbar-dark bg-dark container">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03"
      aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 text-uppercase fw-bold">
        <li class="nav-item">
          <a class="nav-link <?php 
          if($_SERVER['PHP_SELF']=='/sarkari_result/index.php'){
            echo 'active';
          }
          ?> " aria-current="page" href="http://localhost/sarkari_result">Home</a>
        </li>
        <li class="nav-item border-start">
          <a class="nav-link mx-3 <?php 
           if($_SERVER['PHP_SELF']=='/sarkari_result/latest_job.php'){
            echo 'active';
          } ?>" href="latest_job.php">Latest Job</a>
        </li>
        <li class="nav-item border-start">
          <a class="nav-link mx-3 <?php echo ($_SERVER['PHP_SELF']=='/sarkari_result/result.php') ?'active': ''; ?>" href="result.php">Result</a>
        </li>
        <li class="nav-item border-start">
          <a class="nav-link mx-3 <?php echo ($_SERVER['PHP_SELF']=='/sarkari_result/admit_card.php') ?'active': ''; ?>" href="admit_card.php">Admit Card</a>
        </li>
        <li class="nav-item border-start">
          <a class="nav-link mx-3 <?php echo ($_SERVER['PHP_SELF']=='/sarkari_result/answer_key.php') ?'active': ''; ?>" href="answer_key.php">Answer Key</a>
        </li>
        <li class="nav-item border-start">
          <a class="nav-link mx-3 <?php echo ($_SERVER['PHP_SELF']=='/sarkari_result/syllabus.php') ?'active': ''; ?>" href="syllabus.php">Syllabus</a>
        </li>
        <li class="nav-item border-start">
          <a class="nav-link mx-3 <?php echo ($_SERVER['PHP_SELF']=='/sarkari_result/search.php') ?'active': ''; ?>" href="search.php">Search</a>
        </li>
        <li class="nav-item border-start">
          <a class="nav-link mx-3 <?php echo ($_SERVER['PHP_SELF']=='/sarkari_result/contact_us.php') ?'active': ''; ?>" href="contact_us.php">Contact Us</a>
        </li>
      </ul>
      <!-- Search Form  -->
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<?php 
     //variable -> global $x; 
     //Super Global Variables
    // echo "<pre>";
     //to check all server realted info
     //print_r($_SERVER);
      
     //To print current php script name with realtive path 
    // echo $_SERVER['PHP_SELF'];
?> 