<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transform Your Business Strategies</title>
    
    <?php 
    $request_uri = $_SERVER['REQUEST_URI'];
    $is_schedule_index = strpos($request_uri, 'i-time-slot.php') !== false;

    // Define the base path for assets
    $base_path = $is_schedule_index ? './' : './';
    ?>

    <link rel="stylesheet" href="<?php echo $base_path; ?>assets/css/style.css">

    <?php
    if ($is_schedule_index) { ?>
        <link rel="stylesheet" href="<?php echo $base_path; ?>assets/css/schedule-index-styles.css">
    <?php } elseif (strpos($request_uri, 'mdthesis.php') !== false) { ?>
        <link rel="stylesheet" href="<?php echo $base_path; ?>assets/css/mdthesis.css">
    <?php } elseif (strpos($request_uri, 'thesis.php') !== false) { ?>
        <link rel="stylesheet" href="<?php echo $base_path; ?>assets/css/thesis-styles.css">
    <?php } elseif (strpos($request_uri, 'arch_lab_description_greek.php') !== false) { ?>
        <link rel="stylesheet" href="<?php echo $base_path; ?>assets/css/arch_lab_description_greek.css">
    <?php } elseif (strpos($request_uri, 'lessons.php') !== false) { ?>
        <link rel="stylesheet" href="<?php echo $base_path; ?>assets/css/lessons-styles.css">
    <?php } elseif (strpos($request_uri, 'equip.php') !== false) { ?>
        <link rel="stylesheet" href="<?php echo $base_path; ?>assets/css/equip-styles.css">
    <?php } elseif (strpos($request_uri, 'schedule.php') !== false) { ?>
        <link rel="stylesheet" href="<?php echo $base_path; ?>assets/css/schedule-styles.css">
    <?php } elseif (strpos($request_uri, 'i-time-slot.php') !== false) { ?>
        <link rel="stylesheet" href="<?php echo $base_path; ?>assets/css/schedule-index-styles.css">
    <?php } elseif (strpos($request_uri, 'reset-password.php') !== false) { ?>
        <link rel="stylesheet" href="<?php echo $base_path; ?>assets/css/reset-password-styles.css">
    <?php } elseif (strpos($request_uri, 'register.php') !== false) { ?>
        <link rel="stylesheet" href="<?php echo $base_path; ?>assets/css/register-styles.css">
    <?php } elseif (strpos($request_uri, 'printschedule.php') !== false) { ?>
        <link rel="stylesheet" href="<?php echo $base_path; ?>assets/css/printschedule-styles.css">
    <?php } elseif (strpos($request_uri, 'dpa.php') !== false) { ?>
        <link rel="stylesheet" href="<?php echo $base_path; ?>assets/css/dpa-styles.css">
    <?php } elseif (strpos($request_uri, 'tests.php') !== false) { ?>
        <link rel="stylesheet" href="<?php echo $base_path; ?>assets/css/tests.css">
    <?php } elseif (strpos($request_uri, 'ievaluation.php') !== false) { ?>
        <link rel="stylesheet" href="<?php echo $base_path; ?>assets/css/ievaluation.css">
    <?php } elseif (strpos($request_uri, 'position.php') !== false) { ?>
        <link rel="stylesheet" href="<?php echo $base_path; ?>assets/css/position-styles.css">
    <?php } elseif (strpos($request_uri, 'polls.php') !== false) { ?>
        <link rel="stylesheet" href="<?php echo $base_path; ?>assets/css/polls.css">
    <?php } elseif (strpos($request_uri, 'documents.php') !== false) { ?>
        <link rel="stylesheet" href="<?php echo $base_path; ?>assets/css/documents.css">
    <?php } elseif (strpos($request_uri, 'projects.php') !== false) { ?>
        <link rel="stylesheet" href="<?php echo $base_path; ?>assets/css/projects.css">
    <?php } elseif (strpos($request_uri, 'lightgame.php') !== false) { ?>
        <link rel="stylesheet" href="<?php echo $base_path; ?>assets/css/lightgame.css">
    <?php } elseif (strpos($request_uri, 'uowm_masacre.php') !== false) { ?>
        <link rel="stylesheet" href="<?php echo $base_path; ?>assets/css/uowm_masacre.css">
    <?php } ?>
</head>
<body>

     <header>
        <div class="container">
            <div class="logo">
                <a href="index.php">
                    <img src="./assets/Images/logo-Photoroom.png" alt="logo">
                </a>
            </div>
            <nav class="main-nav">
                <ul class="menu">
                    <li id="Home"><a href="index.php" class="parent"><span>Home</span></a></li>
                    <li id="Equipment"><a href="equip.php"><span>Laboratory Equipment</span></a></li>
                    <li id="Schedule" class="has-dropdown"><a href="/schedule.php" ><span>Lab iTools</span></a>
                        <ul>
                            <li> <a href="schedule.php" ><span>Laboratory Availability</span></a></li>
                            <li> <a href="i-time-slot.php"> <span> Laboratory i-timeslots </span></a></li>
                            <li> <a href="i-time-slot.php"> <span> Laboratory i-grades </span></a></li>
                            <li> <a href="#"> <span> Laboratory i-examsII </span></a></li>
                            <li> <a href="tests.php "> <span> Laboratory FREE i-examsII </span></a></li>
                            <li> <a href="i-time-slot.php"> <span> Laboratory i-presence </span></a></li>
                            <li> <a href="i-time-slot.php"> <span> Laboratory i-tasks </span></a></li>
                            <li> <a href="i-time-slot.php"> <span> Laboratory i-lottery </span></a></li>
                            <li> <a href="polls.php"> <span> Laboratory i-polls </span></a></li>
                            <li> <a href="i-time-slot.php"> <span> Laboratory i-loan </span></a></li>
                            <li> <a href="i-time-slot.php"> <span> Laboratory i-quiz </span></a></li>
                            <li> <a href="ievaluation.php"><span> Laboratory i-evaluation </span></a></li>
                            <li> <a href="https://share.uowm.gr/"> <span> Quickshare </span></a></li>
                            <li> <a href="i-time-slot.php"><span> Laboratory Admin </span></a></li>
                            <li> <a href="position.php"> <span> iposition internship </span></a></li>
                            <li> <a href="i-time-slot.php"><span> UOWM Alumni </span></a></li>
                        </ul>
                    </li>
        
                    <li id="Academic" class="has-dropdown"><a href="/academic.php" ><span>Academic</span></a>
                        <ul>
                            <li><a href="lessons.php" ><span>Courses</span></a></li>
                            <li><a href="thesis.php" ><span>Diploma Thesis</span></a></li>
                            <li><a href="documents.php"><span>Document produced by laboratory students (mostly in greek)</span></a></li>
                            <li><a href="projects.php"><span>Indicative Projects with detailed description</span></a></li>
                            <li><a href="/labachievement.php"><span>Laboratory Achievements</span></a></li>
                        </ul>
                    </li>
        
                    <li id="Tools" class="has-dropdown"><a href="/tools.php"><span>Online Tools</span></a>
                        <ul>
                         <li><a href="/hdl/"><span>HDL Compiler & various generators that emit VHDL</span></a></li>
                        </ul>
                    </li>
        
                    <li id="Staff" class="has-dropdown"><a href="/staff.php"><span>Staff</span></a>
                        <ul>
                            <li class="has-dropdown"><a href="/mdasyg/index.php"><span>Minas Dasygenis</span></a>
                                <ul>
                                    <li><a href="/mdasyg/index.php"><span>Introduction</span></a></li>
                                    <li><a href="/mdasyg/mdbackground.php"><span>Background</span></a></li>
                                    <li><a href="/mdasyg/mdresearch.php"><span>Research</span></a></li>
                                    <li><a href="/mdasyg/mdthesis.php"><span>Diploma Thesis Supervision</span></a></li>
                                    <li><a href="/mdasyg/mdaffiliations.php"><span>Affiliations</span></a></li>
                                    <li><a href="/mdasyg/mdpublications.php"><span>Publications</span></a></li>
                                </ul>
                            </li>
                         <li class="has-dropdown"><span> Phd Candidates</span>
                            <ul>
                    <li><a href="http://users.uowm.gr/dziouzios/"><span>Dimitrios Ziouzios</span></a></li>
                    <li><a href="http://users.uowm.gr/dtsiktsiris"><span>Dimitrios Tsiktsiris</span></a></li>
                    <li><a href="https://www.linkedin.com/in/argyrios-sideris/"><span>Argurios Siderhs</span></a></li>
                            </ul>
                         </li>
                        </ul>
                    </li>
                    <li id="Communication" class="last has-dropdown"><a href="/address.php"><span>Communication</span></a>
                        <ul>
                            <li><a href="/address.php"><span>Laboratory Address</span></a></li>
                            <li><a href="/feedback/"><span>Anonymous Form</span></a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
            <button class="menu-toggle">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>
    </header> 
<main> 