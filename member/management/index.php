<?php
$uid_cookie = $_COOKIE["uid"];
// echo $uid_cookie;
// if (condition) {
//     # code...
// }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <!-- Bootstrap icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <!-- Box Icon -->
    <link rel="stylesheet" href="../../style/boxicons-2.1.2/css/boxicons.min.css" />
    <title>Management - CPI</title>
</head>

<body>
    <!-- Nav bar start -->
    <nav class="navbar">
        <div class="nav_logo">
            <img src="../../images/nav_logo_png.png" alt="Nav bar logo" />
        </div>
        <div class="nav_link_pair">
            <div class="nav_links">
                <a href="#" class="nav_link">Add students</a>
                <a href="#" class="nav_link">Add teachers</a>
                <a href="#" class="nav_link">All students</a>
                <a href="#" class="nav_link">All teachers</a>
                <a href="#" class="nav_link">Enter payments</a>
            </div>
            <div class="nav_btns">
                <a class="nav_btn" href="./auth/">Login | Register</a>
            </div>
        </div>
        <div class="nav_mob_btn">
            <i class="bx bx-menu" id="nav_mob_open"></i>
            <i class="bx bx-x" id="nav_mob_close"></i>
        </div>
    </nav>
    <!-- Mob Navbar -->
    <div class="mob_nav" id="mob_nav">
        <div class="nav_links">
            <a href="#" class="nav_link">Add students</a>
            <a href="#" class="nav_link">Add teachers</a>
            <a href="#" class="nav_link">All students</a>
            <a href="#" class="nav_link">All teachers</a>
            <a href="#" class="nav_link">Enter payments</a>
        </div>
        <div class="nav_btns">
            <a class="nav_btn" href="./auth/">Login | Register</a>
        </div>
    </div>
    </div>
    <!-- Mob Navbar -->
    <!-- Nav bar end -->
    <section class="main_container">
        <!-- Form to add students -->
        <div class="form_container" id="addStudentForm">
            <form class="form_init" action="" method="post">
                <h2>Add Student</h2>
                <div class="inp_pair">
                    <div class="inp_group">
                        <p>Student ID</p>
                        <input type="text" name="studentID" id="studentID" placeholder="Auto generated">
                    </div>
                    <div class="inp_group">
                        <p>Department</p>
                        <input type="text" name="department" id="department" placeholder="Department">
                    </div>
                </div>

                <div class="inp_pair">
                    <div class="inp_group">
                        <p>Name</p>
                        <input type="text" name="studentName" id="studentName" placeholder="Full Name">
                    </div>
                    <div class="inp_group">
                        <p>Personal phone</p>
                        <input type="text" name="personalPhone" id="personalPhone" placeholder="Personal contact number">
                    </div>
                </div>

                <div class="inp_pair">
                    <div class="inp_group">
                        <p>Father's name</p>
                        <input type="text" name="fatherName" id="fatherName" placeholder="Father's Name">
                    </div>
                    <div class="inp_group">
                        <p>Mother's name</p>
                        <input type="text" name="motherName" id="motherName" placeholder="Mother's Name">
                    </div>
                </div>

                <div class="inp_pair">
                    <div class="inp_group">
                        <p>Date of birth</p>
                        <input type="date" name="studentDOB" id="studentDOB" placeholder="Date of birth">
                    </div>
                    <div class="inp_group">
                        <p>Guardian's phone</p>
                        <input type="text" name="guardianPhone" id="guardianPhone" placeholder="Guardian's contact number">
                    </div>
                </div>
                <div class="inp_pair">
                    <input class="formBtn" type="button" id="addStudentSubmitButton" value="Submit info">
                </div>
            </form>
        </div>

    </section>
    <!-- Scripts -->
    <script src="../../js/homepage.js"></script>
</body>

</html>