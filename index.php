<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Corsega 4thLaAct</title>
</head>
<style>

body{
    font-family: Arial;
    background:#f4f6f9;
    display:flex;
    justify-content:center;
    align-items:center;
    height:100vh;
    background-color: #65c96a;
}

.form-container{
    background:#edbeda;
    padding:30px;
    width:400px;
    border-radius:10px;
    box-shadow:0 4px 10px rgba(0,0,0,0.2);
}

h2{
    text-align:center;
    margin-bottom:20px;
    color: #0c3312;
}

input[type=text],
input[type=number],
input[type=email],
textarea{
    width:100%;
    padding:8px;
    margin:5px 0 15px 0;
    border:1px solid #ccc;
    border-radius:5px;
}

textarea{
    resize:none;
}

.gender,
.hobbies{
    margin-bottom:15px;
}

.button-group{
    display:flex;
    gap:10px;
}

button{
    width:100%;
    padding:10px;
    background:#3498db;
    color:white;
    border:none;
    border-radius:5px;
    font-size:16px;
    cursor:pointer;
}

button:hover{
    background:#2980b9;
}

.reset-btn{
    background:#e74c3c;
}

.reset-btn:hover{
    background:#c0392b;
}

</style>

</head>

<body>

<div class="form-container">

<h2>Create Your Profile</h2>

<form action="profile.php" method="POST" enctype="multipart/form-data">

Full Name:
<input type="text" name="fullname" required>

Age:
<input type="number" name="age" required>

Course / Program:
<input type="text" name="course" required>

Email Address:
<input type="email" name="email" required>

<div class="gender">
Gender:<br>
<input type="radio" name="gender" value="Male"> Male
<input type="radio" name="gender" value="Female"> Female
</div>

<div class="hobbies">
Hobbies:<br>
<input type="checkbox" name="hobbies[]" value="Reading"> Reading
<input type="checkbox" name="hobbies[]" value="Gaming"> Gaming
<input type="checkbox" name="hobbies[]" value="Sports"> Sports
<input type="checkbox" name="hobbies[]" value="Music"> Music
<input type="checkbox" name="hobbies[]" value="Travel"> Travel
</div>

Short Biography:
<textarea name="bio" rows="4"></textarea>

Upload Profile Image:
<input type="file" name="profile_image"><br><br>

<div class="button-group">
    <button type="reset" class="reset-btn">Reset</button>
    <button type="submit" name="submit">Generate Profile</button>
</div>

</form>

</div>

</body>
</html>