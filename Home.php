<?php
include "includes/common.php"
?>
<!DOCTYPE html>
<html>

<head>
    <title>Available Events</title>
    <link rel="stylesheet" href="bootstrap-5.1.0-dist/css/bootstrap.min.css" type="text/css">
    <script type="text/javascript" src="bootstrap-5.1.0-dist/js/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="bootstrap-5.1.0-dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="./css.css" type="text/css">
    <style>
        /* #banner_image {
            padding-top: 75px;
            padding-bottom: 50px;
            text-align: center;
            color: #f8f8f8;
            background: url(img/green.jpg)no-repeat center center;
            background-size: cover;
        } */

        #jumbotron {
            background-color: #1b6d85;
        }
    </style>
</head>

<body class="d-flex flex-column vh-100">
    <?php
    include 'includes/header.php';
    include 'includes/check-if-added.php';
    ?>

    <div class="container">
        <div class="mt-5 mx-3">
            <h1>Welcome to our Events!</h1>
            <p>We have the best Events here for you. No need to hunt around, we have all in one place</p>
        </div>

        <div class=" my-4 row justify-content-center">
            <div class="col-md-6 col-lg-4 col-xxl-3 mb-2">
                <div class="thumbnail">
                    <div class="figure">
                        <img src="img/techno.jfif">
                        <p class="mb-1">Techno</p>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-outline-light  btn-sm" data-bs-toggle="modal" data-bs-whatever="Techno" data-bs-whatever2="Image result for technology events for event management system
                                      Event creators can use technology to interpret data from social media profiles including LinkedIn and Facebook to create bespoke suggestions for each event attendee – for example, who they should meet,
                                      which presentation might be particularly useful for their line of work, or which speaker they'd really love to hear" data-bs-target="#exampleModal">
                            Look in
                        </button>
                    </div>
                    <hr>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 col-xxl-3 mb-2">
                <div class="thumbnail">
                    <div class="figure">
                        <img src="img/seminar.jfif">
                        <p class="mb-1">seminar</p>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-outline-light btn-sm" data-bs-toggle="modal" data-bs-whatever="Seminar" data-bs-whatever2="A seminar is a form of academic instruction, either at an academic institution or offered by a commercial or professional organization. It has the function of bringing together small groups for recurring meetings, focusing each time on some particular subject,
                                 in which everyone present is requested to participate." data-bs-target="#exampleModal">
                            Look in
                        </button>
                    </div>
                    <hr>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 col-xxl-3 mb-2">
                <div class="thumbnail">
                    <img src="img/OIP (2).jfif">
                    <div class="caption">
                        <p class="mb-1">DJ nights</p>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-outline-light  btn-sm" data-bs-toggle="modal" data-bs-whatever="DJ NIghts" data-bs-whatever2="DJ stands for “disc jockey,” a callback to a time when DJs primarily worked with vinyl records. Radio DJs: These are the radio hosts that play music on air,
                                 answer requests and often chatter and share news or celebrity gossip." data-bs-target="#exampleModal">
                            Look in
                        </button>
                    </div>
                    <hr>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 col-xxl-3 mb-2">
                <div class="thumbnail">
                    <img src="img/OIP.jfif">
                    <div class="caption">
                        <p class="mb-1">Indoor</p>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-outline-light btn-sm" data-bs-toggle="modal" data-bs-whatever="Indoor" data-bs-whatever2="asncmasckasdbabds" data-bs-target="#exampleModal">
                            Look in
                        </button>
                    </div>
                    <hr>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 col-xxl-3 mb-2">
                <div class="thumbnail">
                    <div class="figure">
                        <img src="img/workshop.png">
                        <p class="mb-1">Workshops</p>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-outline-light  btn-sm" data-bs-toggle="modal" data-bs-whatever="Environment" data-bs-whatever2="contntnnnnnnnn" data-bs-target="#exampleModal">
                            Look in
                        </button>
                    </div>
                    <hr>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 col-xxl-3 mb-2">
                <div class="thumbnail">
                    <div class="figure">
                        <img src="img/gamespace.png">
                        <p class="mb-1">Game Space</p>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-outline-light btn-sm" data-bs-toggle="modal" data-bs-whatever="Environment" data-bs-whatever2="contntnnnnnnnn" data-bs-target="#exampleModal">
                            Look in
                        </button>
                    </div>
                    <hr>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 col-xxl-3 mb-2">
                <div class="thumbnail">
                    <img src="img/T & A.jfif">
                    <div class="caption">
                        <p class="mb-1">Theaters and Arts</p>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-outline-light  btn-sm" data-bs-toggle="modal" data-bs-whatever="DJ NIghts" data-bs-whatever2="hurryyyyyyyyy" data-bs-target="#exampleModal">
                            Look in
                        </button>
                    </div>
                    <hr>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 col-xxl-3 mb-2">
                <div class="thumbnail">
                    <img src="img/Conferences.jfif">
                    <div class="caption">
                        <p class="mb-1">Conferences</p>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-outline-light  btn-sm" data-bs-toggle="modal" data-bs-whatever="Indoor" data-bs-whatever2="asncmasckasdbabds" data-bs-target="#exampleModal">
                            Look in
                        </button>
                    </div>
                    <hr>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 col-xxl-3 mb-2">
                <div class="thumbnail">
                    <div class="figure">
                        <img src="img/speaker.png">
                        <p class="mb-1">A speaker session</p>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-outline-light  btn-sm" data-bs-toggle="modal" data-bs-whatever="Environment" data-bs-whatever2="contntnnnnnnnn" data-bs-target="#exampleModal">
                            Look in
                        </button>
                    </div>
                    <hr>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 col-xxl-3 mb-2">
                <div class="thumbnail">
                    <div class="figure">
                        <img src="img/photo.jfif">
                        <p class="mb-1">Photography</p>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-outline-light btn-sm" data-bs-toggle="modal" data-bs-whatever="Environment" data-bs-whatever2="contntnnnnnnnn" data-bs-target="#exampleModal">
                            Look in
                        </button>
                    </div>
                    <hr>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 col-xxl-3 mb-2">
                <div class="thumbnail">
                    <img src="img/model.jfif">
                    <div class="caption">
                        <p class="mb-1">Modelling</p>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-outline-light  btn-sm" data-bs-toggle="modal" data-bs-whatever="DJ NIghts" data-bs-whatever2="hurryyyyyyyyy" data-bs-target="#exampleModal">
                            Look in
                        </button>
                    </div>
                    <hr>
                </div>
            </div>
            <div class="col-md-6 border-primary col-lg-4 col-xxl-3 mb-2">
                <div class="thumbnail">
                    <img src="img/designing.jfif">
                    <div class="caption">
                        <p class="mb-1">Designing</p>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-outline-light  btn-sm" data-bs-toggle="modal" data-bs-whatever="Indoor" data-bs-whatever2="asncmasckasdbabds" data-bs-target="#exampleModal">
                            Look in
                        </button>
                    </div>
                    <hr>
                </div>
            </div>

        </div>

    </div>


    <?php
    include 'includes/footer.php';
    ?>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p id="content-info">Here comes to content</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-info" data-bs-dismiss="modal">Close</button>
                    <a href="RegisterPage.php" class="btn btn-outline-primary">Book Now</a>
                </div>
            </div>
        </div>

        <script>
            let exampleModal = document.getElementById('exampleModal')
            exampleModal.addEventListener('show.bs.modal', function(event) {
                // Button that triggered the modal
                let button = event.relatedTarget;
                // Extract info from data-bs-* attributes
                let recipient = button.getAttribute('data-bs-whatever')
                let recipient2 = button.getAttribute('data-bs-whatever2')
                // If necessary, you could initiate an AJAX request here
                // and then do the updating in a callback.
                //
                // Update the modal's content.
                let title = exampleModal.querySelector('.modal-title');
                let content = exampleModal.querySelector('#content-info');
                title.textContent = recipient;
                content.textContent = recipient2;
            })
        </script>
</body>

</html>