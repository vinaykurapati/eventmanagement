<?php
require("includes/common.php");

$fullname = $_POST['fullname'];
$fullname = mysqli_real_escape_string($con, $fullname);

$department = $_POST['department'];
$department = mysqli_real_escape_string($con, $department);

$participateno = $_POST['participateno'];
$participateno = mysqli_real_escape_string($con, $participateno);

$email = $_POST['email'];
$email = mysqli_real_escape_string($con, $email);

$event = $_POST['event'];
$event = mysqli_real_escape_string($con, $event);

$date = $_POST['date'];
$date = mysqli_real_escape_string($con, $date);

// Query checks if the event, date and email are present in the database.
$query = "SELECT id, email FROM eventmanagement WHERE email='" . $email . "' AND event='" . $event . "' AND date ='" . $date . "'";
$result = mysqli_query($con, $query) or die($mysqli_error($con));
$num = mysqli_num_rows($result);

if ($num != 0) {
    $err = "<h2>Event has registered with the email.</h2>";
    header('location: success.php?err=' . $err);
} else {
    $query = "INSERT INTO eventmanagement(fullname, department, participateno, email, event, date)VALUES('" . $fullname . "','" . $department . "','" . $participateno . "','" . $email . "','" . $event . "','" . $date . "')";
    mysqli_query($con, $query) or die(mysqli_error($con));
    $user_id = mysqli_insert_id($con);
    $msg = "<h2>Successfully Registered.</h2>";
    $det = "<h4>Preview</h4><pre>Full name : {$fullname}<br>Email : {$email}<br>Department : {$department}<br>Number of Participates : {$participateno}<br>Event : {$event}<br>Date : {$date}</pre>";
    header('location: success.php?msg=' . $msg . "&det=" . $det);
}
