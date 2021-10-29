<?php
include 'includes/common.php';
?>
<!DOCTYPE>

<head>
    <title>Register Event</title>
    <style>
        footer{
            color: #6a6c6d;
        }
        p a{
            text-decoration: none;
        }
    </style>
    <link rel="stylesheet" href="bootstrap-5.1.0-dist/css/bootstrap.min.css" type="text/css">
    <script type="text/javascript" src="bootstrap-5.1.0-dist/js/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="bootstrap-5.1.0-dist/js/bootstrap.min.js"></script> 
</head>

<body class="d-flex flex-column vh-100">
    <?php
    include 'includes/header.php';
    ?>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6">
                <div class="card my-3">
                    <div class="card-header text-center">
                        <h3 class="my-2" style="color:black">Register Event</h3>
                    </div>
                    <div class="card-body">
                        <form class="row g-3 needs-validation" novalidate method="post" action="success.php">
                            <div class="">
                                <label for="name" class="form-label mt-2">Full name</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>
                            <div class="">
                                <label for="department" class="form-label mt-1">Department</label>
                                <input type="text" class="form-control" id="department" name="department" required>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>
                            <div class="">
                                <label for="candidatesno" class="form-label mt-1">Number of Participates</label>
                                <input type="number" class="form-control" min="1" id="candidatesno" name="candidatesno" required>
                                <div class="invalid-feedback">
                                    Please provide a valid number.
                                </div>
                            </div>
                            <div class="">
                                <label for="email" class="form-label mt-1">Email</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                                <div class="invalid-feedback">
                                    Please provide a valid email.
                                </div>
                            </div>
                            <div class="">
                                <label for="date" class="form-label mt-1">Event Date</label>
                                <input type="date" class="form-control" id="date" name="date" required>
                                <div class="invalid-feedback">
                                    Please provide a valid date.
                                </div>
                            </div>

                            <div class="">
                                <div class="form-check mt-1">
                                    <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                                    <label class="form-check-label" for="invalidCheck">
                                        Agree to terms and conditions
                                    </label>
                                    <div class="invalid-feedback">
                                        You must agree before submitting.
                                    </div>
                                </div>
                            </div>
                            <div class="text-center">
                                <button class="btn btn-primary" type="submit">Book</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <?php
    include 'includes/footer.php';
    ?>
    <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function() {
            'use strict'

            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.querySelectorAll('.needs-validation')

            // Loop over them and prevent submission
            Array.prototype.slice.call(forms)
                .forEach(function(form) {
                    form.addEventListener('submit', function(event) {
                        if (!form.checkValidity()) {
                            event.preventDefault()
                            event.stopPropagation()
                        }

                        form.classList.add('was-validated')
                    }, false)
                })
        })()
    </script>
</body>