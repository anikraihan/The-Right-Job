<?php
session_start();
include('jobseeker/config.php');

//Reset OAuth access token
$google_client->revokeToken();

if (session_destroy()) // Destroying All Sessions

{
    header("Location: jobseeker/jobseeker_login.php"); // Redirecting To Home Page
    
}
