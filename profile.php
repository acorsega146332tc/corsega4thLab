<?php

$fullname = $_POST['fullname'];
$age = $_POST['age'];
$course = $_POST['course'];
$email = $_POST['email'];
$gender = $_POST['gender'];
$bio = $_POST['bio'];

$hobbies = "";
if(isset($_POST['hobbies'])){
    $hobbies = implode(", ", $_POST['hobbies']);
}

$target_dir = "uploads/";

if (!file_exists($target_dir)) {
    mkdir($target_dir, 0777, true);
}

$image_name = $_FILES["profile_image"]["name"];
$temp_name = $_FILES["profile_image"]["tmp_name"];
$target_file = $target_dir . basename($image_name);

move_uploaded_file($temp_name, $target_file);

?>

<!DOCTYPE html>
<html>
<head>
<title>Your Profile</title>

<style>

body{
    font-family: Arial;
    background: #f4f6f9;
    display:flex;
    justify-content:center;
    align-items:center;
    height:100vh;
    background-color: #65c96a;
}

.profile-card{
    background:white;
    width:350px;
    padding:25px;
    border-radius:10px;
    box-shadow:0 4px 10px rgba(0,0,0,0.2);
    text-align:center;
    background:#edbeda;
}

.profile-card img{
    width:150px;
    height:150px;
    border-radius:50%;
    object-fit:cover;
    margin-bottom:15px;
}

.profile-card h2{
    margin-bottom:10px;
}

.info{
    text-align:left;
    margin-top:15px;
}

.info p{
    margin:5px 0;
}

.bio{
    margin-top:15px;
    padding:10px;
    background:#f0f0f0;
    border-radius:5px;
}

</style>

</head>

<body>

<div class="profile-card">

<img src="<?php echo $target_file; ?>">

<h2><?php echo $fullname; ?></h2>

<div class="info">
<p><b>Age:</b> <?php echo $age; ?></p>
<p><b>Course:</b> <?php echo $course; ?></p>
<p><b>Email:</b> <?php echo $email; ?></p>
<p><b>Gender:</b> <?php echo $gender; ?></p>
<p><b>Hobbies:</b> <?php echo $hobbies; ?></p>
</div>

<div class="bio">
<b>Biography:</b>
<p><?php echo $bio; ?></p>
</div>

</div>

</body>
</html>