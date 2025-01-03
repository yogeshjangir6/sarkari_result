<?php require("conn.php"); ?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sarkari Result</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
 <!-- Header section  -->
<?php include("header.php"); ?> 
 <!-- Navigation Menu -->
<?php include("nav.php"); ?>
<!-- Navigation Menu closed  -->
 <?php 
 $id = $_GET['id'];

 $sql = "SELECT * from `job_post` where `id`=$id";
 $query = mysqli_query($conn,$sql);
 if($query){
    $data = mysqli_fetch_assoc($query);
    // echo "<pre>";
    //print_r($data);
    ?>
   
<main class="container">
        <section class="fs-4 my-4">
            <div class="row pb-2">
                <div class="col text-danger fw-bold">Name of Post:</div>
                <div class="col-9">
                    <?php echo $data['post_name']; ?>
                    </div>
            </div>
            <div class="row pb-2">
                <div class="col text-danger fw-bold">Post Date / Update:</div>
                <div class="col-9">
                <?php echo $data['post_date']; ?></div>
            </div>
            <div class="row pb-2">
                <div class="col text-danger fw-bold">Short Information :</div>
                <div class="col-9">
                <?php echo $data['short_info']; ?></div>
            </div>
        </section>
        <section class="container border border-dark">
            <div class="container text-center">
                <!-- departement name  -->
                <h1 class="text-primary py-2">
                <?php echo $data['dept_name']; ?>
                </h1>
                <!-- Recruitment Name  -->
                <h2 class="text-success pb-2"><?php echo $data['notification_title']; ?></h2>
                <!-- Notification full name  -->
                <h2 class="text-primary pb-2"><?php echo $data['short_title']; ?></h2>
                <!-- Site URL  -->
                <h2 class="pb-2"><a href="#" class="text-danger">WWW.SARKARIRESULT.COM</a></h2>
            </div>
            <!-- Important dates and application fees -->
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-header text-success text-center">
                            <h2>Important Date</h2>
                        </div>
                        <div class="card-body fs-5">
                            <ul>
                                <li>Application Begin : <b><?php echo $data['start_date']; ?></b></li>
                                <li>Last Date for Apply Online : <b><?php echo $data['last_date']; ?></b></li>
                                <li>Pay Fee Online Last Date : <b>04/08/2024</b></li>
                                <li>Correction Date : <b>16-17 August 2024</b></li>
                                <li>CBT Exam Date Paper I : <b>30/09/2024 to 14/11/2024</b></li>
                                <li>Answer Key Paper I : <b>29 November 2024</b></li>
                                <li>Paper II Exam Date: <b>Notified Soon</b></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <div class="card-header text-success text-center">
                            <h2>Application Fee</h2>
                        </div>
                        <div class="card-body fs-5">
                        <?php echo $data['fees']; ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header text-primary text-center">
                    <h2>SSC MTS & Havaldar Notification 2024 : Age Limit as on 01/08/2024</h2>
                </div>
                <div class="card-body fs-5">
                    <ul>
                        <li>Minimum Age : <b>18 Years.</b></li>
                        <li>Maximum Age : <b>25 – 27 Years (Post Wise)</b></li>
                        <li>Age Relaxation Extra as per SSC Multi Tasking & Havaldar Recruitment Examination Rules
                            <b>2024.</b>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- Notification name with total vacancy details  -->
            <div class="container text-center">
                <h2 class="text-success">SSC MTS Multi Tasking Staff & Havaldar Recruitment 2024 :
                </h2>
                <p class="fw-bold fs-5"> Vacancy Details Total : 9583 Post</p>
            </div>
            <table class="table table-bordered border-primary fs-5">
                <tr>
                    <th>Post Name</th>
                    <th>Total Post</th>
                    <th>SSC MTS and Havaldar Exam Eligibility</th>
                </tr>
                <tr>
                    <td>Multi-Tasking (Non-Technical) Staff (MTS)</td>
                    <td>6144</td>
                    <td>
                        <ul>
                            <li>Class 10 High School Exam Passed in Any Recognized Board in India</li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <td>Havaldar</td>
                    <td>3439</td>
                    <td>
                        <ul>
                            <li>Class 10 High School Exam Passed in Any Recognized</li>
                            <li>Walking :</li>
                            <li>Male : 1600 Meter in 15 Min.</li>
                            <li>Female : 1 Km in 20 Min.</li>
                            <li>Height :</li>
                            <li>Male : 157.5 CMS | Female : 152 CMS</li>
                            <li>More Details Read the Notification</li>
                            <li>Chest Male : 81-86 CMS</li>
                        </ul>
                    </td>
                </tr>
            </table>
            <!-- form filling details  -->
            <div class="card">
                <div class="card-header text-center text-success">
                    <h2>How to Fill SSC Matric Level Multi Tasking MTS & Havaldar Online Form 2024</h2>
                </div>
                <div class="card-body fs-5">
                    <ul>
                        <li><b>SSC OTR Instruction :</b> SSC has started one-time registration on its new website
                            SSC.GOV.IN. Candidates who have not yet done OTR registration on the new website will be
                            able to apply for any recruitment only after completing the registration.</li>
                        <li>Staff Selection Commission Are Released Matric Level Multi Tasking Staff MTS Non Technical &
                            Havaldar Exam 2024 Candidate Can Apply Between 27 June 2024 to 31 July 2024</li>
                        <li><b>SSC Photo Instruction :</b> SSC has made a big change in the application process. Now the
                            photo of the candidate will be uploaded live, that too through webcam or through the
                            official SSC App. The candidate has to take care that he looks straight ahead in the photo
                            and the background should also be light/white.</li>
                        <li><b>SSC Signature Resize :</b> The signature to be uploaded in the SSC online application
                            must be of a specific dimension and its size should also be between 10 to 20 KB. Candidates
                            can set the dimensions of SSC signature online with the Image Resizer Option at Sarkari
                            Result Tools website.</li>
                        <li>Candidate Read the Notification Before Apply the Recruitment Application Form in SSC Apply
                            Online for MTS & Havaldar Recruitment 2024.</li>
                        <li>Kindly Check and Collect the All Document - Eligibility, ID Proof, Address Details, Basic
                            Details.</li>
                        <li>Kindly Ready Scan Document Related to Recruitment Form - Sign, ID Proof, Etc.</li>
                        <li>Before Submit the Application Form Must Check the Preview and All Column Carefully.</li>
                        <li>Take A Print Out of Final Submitted Form.</li>
                    </ul>
                    <p class="text-danger text-center fw-bold py-3 border  border-dark">Interested Candidate Can Read
                        the Full SSC MTS & Havaldar Notification 2024 Before Apply Online.</p>
                </div>
            </div>
            <!-- usefull links section -->
            <section>
                <h2 class="text-center text-success">Download Mobile Apps for the Latest Updates
                </h2>
                <div class="row border text-center fw-bold fs-5">
                    <div class="col border border-dark p-3"><a href="#">Android Apps</a></div>
                    <div class="col border border-dark p-3"><a href="#">Apple IOS Apps</a></div>
                </div>
                <h2 class="text-center text-success">Some Useful Important Links
                </h2>
                <div class="row border text-center fw-bold fs-5">
                    <div class="col border border-dark p-3">Download Answer Key</div>
                    <div class="col border border-dark p-3"><a href="#">Click Here</a></div>
                </div>
                <div class="row border text-center fw-bold fs-5">
                    <div class="col border border-dark p-3">How to Check Answer Key (Video HIndi)</div>
                    <div class="col border border-dark p-3"><a href="#">Click Here</a></div>
                </div>
                <div class="row border text-center fw-bold fs-5">
                    <div class="col border border-dark p-3">Download Answer Key Notice</div>
                    <div class="col border border-dark p-3"><a href="#">Click Here</a></div>
                </div>
                <div class="row border text-center fw-bold fs-5">
                    <div class="col border border-dark p-3">Download Photo and Signature Instruction Notice</div>
                    <div class="col border border-dark p-3"><a href="#">Click Here</a></div>
                </div>
                <div class="row border text-center fw-bold fs-5">
                    <div class="col border border-dark p-3">Download Correction Notice</div>
                    <div class="col border border-dark p-3"><a href="#">Click Here</a></div>
                </div>
                <div class="row border text-center fw-bold fs-5">
                    <div class="col border border-dark p-3">Download Exam Notice</div>
                    <div class="col border border-dark p-3"><a href="#">Click Here</a></div>
                </div>
                <div class="row border text-center fw-bold fs-5">
                    <div class="col border border-dark p-3">Apply Online</div>
                    <div class="col border border-dark p-3"><a href="#">Click Here</a></div>
                </div>
                <div class="row border text-center fw-bold fs-5">
                    <div class="col border border-dark p-3">How to Fill Form (Video Hindi)</div>
                    <div class="col border border-dark p-3"><a href="#">Click Here</a></div>
                </div>
                <div class="row border text-center fw-bold fs-5">
                    <div class="col border border-dark p-3">How to Upload and Resize Signature (Video Hindi)</div>
                    <div class="col border border-dark p-3"><a href="#">Click Here</a></div>
                </div>
                <div class="row border text-center fw-bold fs-5">
                    <div class="col border border-dark p-3">How to SSC OTR Registration (Video Hindi)</div>
                    <div class="col border border-dark p-3"><a href="#">Click Here</a></div>
                </div>
                <div class="row border text-center fw-bold fs-5">
                    <div class="col border border-dark p-3">Official Website</div>
                    <div class="col border border-dark p-3"><a href="#">Click Here</a></div>
                </div>
            </section>
        </section>
    </main>
    <?php
 }
 ?>
    <section class="container text-center fs-5 my-5">
        <article>
            <p>Welcome to this official website of Sarkari Result</p>
            <p>Thank you for visiting the official website of Sarkari Result SarkariResult.Com, through this website you
                will get information related to Job / Recruitment / Admission / Result / Admit Card / Answer very
                easily. For you our Sarkari Result Mobile App which is also available for free on Google Play and Apple
                Store, as well as you can connect with us on our social media accounts: X Twitter, Facebook, Instagram,
                Threads, Telegram, WhatsApp, available on Youtube.</p>

            <p>© Copyright 2024-2025 at www.sarkariresult.com</p>
            <p>For advertising in this website contact us sarkariresult@gmail.com</p>
        </article>
    </section>
