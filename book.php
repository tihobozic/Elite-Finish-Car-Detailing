<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
$name=$_POST["name"];
$email=$_POST["email"];
$phone=$_POST["phone"];
$service=$_POST["service"];
$date=$_POST["date"];
$message=$_POST["message"];

$to="youremail@example.com";
$subject="New Booking - Elite Finish";
$body="Name: $name\nEmail: $email\nPhone: $phone\nService: $service\nDate: $date\nNotes: $message";
$headers="From: noreply@elitefinish.com";

mail($to,$subject,$body,$headers);
echo "Booking submitted successfully!";
}
?>
