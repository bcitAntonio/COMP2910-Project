<?php

    require_once('../private/credential/initialize.php');
    require_once('assets/php/summary.php');
    include('assets/php/getUserName.php');


 ?>
    <!doctype html>
    <html lang="en" class="no-js">

    <head>
        <meta charset="utf-8" />
        <meta http-equiv="Cache-Control" content="max-age=600" />
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
        <meta name="author" content="JMAN">
        <meta name="description" content="Food Tracking Application">
        <meta name="copyright" content="2018 JMAN, Inc. All rights reserved.">
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,300italic,400italic" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta/css/bootstrap.min.css">

        <link rel="stylesheet" href="assets/css/main.css" />
        <link rel="stylesheet" href="assets/css/reset.css">
        <link rel="stylesheet" href="assets/css/schedule.css">
        <link rel="shortcut icon" href="images/logo.png" />
        <title>Summary</title>
        <!-- Resource style -->
        <style>
            .dropotron li a {
                color: #fff
            }

            .dropotron li a:hover {
                background-color: #61c200;

            }

            nav {
                font-weight: 400;
            }

            #navButton {
                width: 80%;
            }

            #header {
                font-family: "Source Sans Pro", sans-serif;
                font-weight: 300;
            }

            a:hover {
                text-decoration: none;
            }

            ul li {
                padding-left: 0px;
            }

            .event-info input,
            .event-info select {

                font-size: 1.6rem;
            }

            .modal-backdrop {
                opacity: 0 !important;
            }

            #summary h1 {
                font-size: 2rem;
                margin-top: 10px;

            }

            #summary {
                margin-bottom: 25px;
            }

            .qty {
                font-size: 1.3rem;
            }
        </style>
    </head>

    <body>
        <div id="page-wrapper">
            <header id="header" style="font-size: 13pt">
                <h1><a href="index.php">JustPerfect</a></h1>
                <nav id="nav">
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="menu.php">Menu</a></li>
                        <li><a href="schedule.php">Schedule</a></li>
                        <li><a href="summary.php">Summary</a></li>
                        <li><a href="list.php">List</a></li>
                        <li>
                            <a href="profile.php" id="profile" class="button alt">
                                <?php getName($conn); ?>
                            </a>
                        </li>

                    </ul>
                </nav>
            </header>
            <div style="width:225px; margin: auto;z-index:5">
                <a class="button special small" id="previous" style="float:left; margin-top:45px;margin-right:10px; width:100px; z-index:5">❮ Previous</a>
                <a class="button special small next" id="next" style="margin-top:45px;margin-left:10px; width:100px;z-index:5">Next ❯</a>
            </div>

            <div class="cd-schedule loading">
                <header>

                    <h1 class="display-4 mb-4 text-center" style="font-size: 5rem; font-weight: 400;" id="weekNo"></h1>
                    <div id="summary">

                    </div>
                </header>

                <!-- <div class="left-arrow"></div>
                    <div class="right-arrow"></div> -->
                <div class="timeline">
                    <ul style="display:none">
                        <li>
                            <span>09:00</span>
                        </li>
                        <li>
                            <span>09:30</span>
                        </li>
                        <li>
                            <span>10:00</span>
                        </li>
                        <li>
                            <span>10:30</span>
                        </li>
                        <li>
                            <span>11:00</span>
                        </li>
                        <li>
                            <span>11:30</span>
                        </li>
                        <li>
                            <span>12:00</span>
                        </li>
                        <li>
                            <span>12:30</span>
                        </li>
                        <li>
                            <span>13:00</span>
                        </li>
                        <li>
                            <span>13:30</span>
                        </li>
                        <li>
                            <span>14:00</span>
                        </li>
                        <li>
                            <span>14:30</span>
                        </li>
                        <li>
                            <span>15:00</span>
                        </li>
                        <li>
                            <span>15:30</span>
                        </li>
                        <li>
                            <span>16:00</span>
                        </li>
                        <li>
                            <span>16:30</span>
                        </li>
                        <li>
                            <span>17:00</span>
                        </li>
                        <li>
                            <span>17:30</span>
                        </li>
                        <li>
                            <span>18:00</span>
                        </li>
                        <li>
                            <span>18:30</span>
                        </li>


                    </ul>
                </div>
                <!-- .timeline -->

                <div class="events">
                    <ul>
                        <li class="events-group">
                            <div class="top-info">
                                <span>Monday</span>
                            </div>

                            <ul id="Monday">

                            </ul>
                        </li>
                        <li class="events-group">
                            <div class="top-info">
                                <span>Tuesday</span>
                            </div>

                            <ul id="Tuesday">

                            </ul>
                        </li>
                        <li class="events-group">
                            <div class="top-info">
                                <span>Wednesday</span>
                            </div>

                            <ul id="Wednesday">

                            </ul>

                        </li>

                        <li class="events-group">
                            <div class="top-info">
                                <span>Thursday</span>
                            </div>

                            <ul id="Thursday">

                            </ul>
                        </li>

                        <li class="events-group">
                            <div class="top-info">
                                <span>Friday</span>
                            </div>

                            <ul id="Friday">

                            </ul>
                        </li>

                        <li class="events-group">
                            <div class="top-info">
                                <span>Saturday</span>
                            </div>

                            <ul id="Saturday">

                            </ul>
                        </li>

                        <li class="events-group">
                            <div class="top-info">
                                <span>Sunday</span>
                            </div>

                            <ul id="Sunday">

                            </ul>

                </div>

                <div class="event-modal">
                    <header class="header">
                        <div class="content">
                            <span class="event-date"></span>
                            <h3 class="event-name"></h3>
                        </div>

                        <div class="header-bg"></div>
                    </header>

                    <div class="body">
                        <div class="event-info"></div>
                        <div class="body-bg"></div>
                    </div>

                    <a href="#0" class="close">Close</a>
                </div>

                <div class="cover-layer"></div>

            </div>




        </div>
        <script src="assets/js/fontawesome.min.js"></script>
        <script src="assets/js/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
        <script src="assets/js/jquery.dropotron.min.js"></script>
        <script src="assets/js/jquery.scrollgress.min.js"></script>
        <script src="assets/js/skel.min.js"></script>
        <script src="assets/js/util.js"></script>
        <script src="assets/js/main.js"></script>
        <script src="assets/js/modernizr.js"></script>
        <script src="assets/js/summary.js"></script>
        <!-- Resource jQuery -->
    </body>

    </html>


    <?php
    db_disconnect($conn);
 ?>
