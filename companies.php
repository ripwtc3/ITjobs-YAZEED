<?php

session_start();
 

if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: logincomp.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>الشركات</title>
</head>
<style>
body {
    margin: 0;
    font-family: Arial, sans-serif;
    
}

nav {
    display: flex;
    justify-content: space-between;
    align-items: center;
    background-color:#16EAD7;
    padding: 0 40px;
}

nav .logo img {
    height: 80px; 
}

nav ul {
    list-style: none;
    display: flex;
    margin: 0;
    padding: 0;
}

nav ul li {
    margin-left: 20px;
}

nav ul li a {
    color: white;
    text-decoration: none;
    transition: color 0.3s ease;
}

nav ul li a:hover {
    color: #C42AE4; 
}

.image-container {
    width: 100%;
    max-width: 600px; 
    margin: 20px auto;
    overflow: hidden;
}

.message-box {
    width: 100%;
    max-width: 600px;
    margin: 20px auto;
    padding: 20px;
    border: 1px solid #ddd;
    box-shadow: 0 2px 5px rgba(0,0,0,0.2);
}

.message-box p {
    margin: 0;
    color: #333;
}

.container {
    border: 2px solid    #16EAD7; 
    text-align: center;
    padding: 20px;
    width: 50%; 
    margin: 0 auto; 
    transition: transform 0.3s; 
}

.container:hover {
    transform: scale(1.05); 
}

.logo {
    max-width: 200px; 
    margin-bottom: 10px;
}

.title {
    font-size: 24px; 
    color: #333; 
    margin-bottom: 20px;
}


.button-group {
    
}



.button-container {
    text-align: center; 
    color: #16EAD7; 
    position: absolute;
    width: 100%;
    bottom: 20px; 
}

.btn {
    padding: 10px 15px;
    text-decoration: none;
    color: white;
    border-radius: 5px;
    margin: 5px; 
    transition: background-color 0.3s; 
}

.btn-warning {
    background-color:#16EAD7; 
}

.btn-danger {
    background-color: #16EAD7; 
}

.btn:hover {
    background-color: #C42AE4; 
}


.container1 {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100%;
}


form {
    background-color: white;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    margin-bottom: 20px;
}

label, input, textarea, button {
    display: block;
    width: 100%;
    margin-top: 10px;
}

input, textarea {
    padding: 8px;
    border: 2px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

button {
    background-color: #16EAD7;
    color: white;
    border: none;
    padding: 10px;
    border-radius: 4px;
    cursor: pointer;
    transition: background-color 0.3s, color 0.3s;
}

button:hover {
    background-color: #C42AE4;
    color: #16EAD7;
}

#jobsContainer {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
    gap: 20px;
    padding: 20px;
    background: #fff;
    box-shadow: 0 4px 8px rgba(0,0,0,0.2);
    border-radius: 8px;
}

.job {
    background-color: #fff;
    padding: 15px;
    border-radius: 8px;
    box-shadow: 0 2px 4px rgba(0,0,0,0.1);
    display: flex;
    flex-direction: column;
}

.job img {
    max-width: 100%;
    height: auto;
    border-radius: 4px;
    margin-bottom: 10px;
}

.job h2, .job p {
    margin: 5px 0;
}

.job-controls {
    margin-top: 10px;
}

.edit-button, .delete-button {
    background-color: #C42AE4;
    color: white;
    padding: 5px 10px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    width: 100%; 
    margin-top: 5px;
}

.edit-button:hover, .delete-button:hover {
    background-color: #16EAD7;
    color: #C42AE4;
}



@media screen and (max-width: 600px) {
    nav ul {
        flex-direction: column;
        width: 100%;
    }

    nav ul li {
        text-align: center;
        padding: 10px 0;
    }

    nav ul li a {
        display: block;
    }
}



</style>
<body>
    <nav>
        <div class="logo">
            <img src="https://i.imgur.com/yHSsuvJ.gif" alt="Logo"> 
        </div>
        <ul class="nav-links">
           
           
        </ul>
    </nav>


    
    <br.<br><br><br><br><br><br>
<div class="message-box">
  <p style="text-align: center; font-size: larger; font-weight: bold;">مرحبًا بكم في موقع PEOPLE CHECK !</p>
  <br><br>
  <p style="text-align: center; font-size: large;">
   تتيح لك صفحة الشركات في موقعنا إمكانية نشر الوظائف الخاصة بشركتك، بحيث يستطيع الأشخاص التقدم للوظائف المناسبة لهم.
 </p>
</div>
    <br><br><br>



    <div class="image-container">
    <div style="text-align: center;">      
        <p style="text-align: center; font-size: larger;">الخدمات</p>
    </div>
    <div style="text-align: center; display: flex; justify-content: center;">
        <div style="margin: 10px;">
            <img src="https://i.imgur.com/JpEaCvk.jpeg" alt="Car Rental Office" style="width: 200px; transition: transform 0.3s;">
            <p>توفير وظائف</p>
        </div>

        <div style="margin: 10px;">
            <img src="https://i.imgur.com/sI2LeUY.jpeg" alt="Selection of Rental Cars" style="width: 200px; transition: transform 0.3s;">
            <p>سهولة التقديم</p>
        </div>

        <div style="margin: 10px;">
            <img src="https://i.imgur.com/ZHhtNQf.jpeg" alt="Happy Family with Rental Car" style="width: 200px; transition: transform 0.3s;">
            <p>الدعم</p>
        </div>
    </div>
    </div>

    <script>
        
        document.querySelectorAll('img').forEach(img => {
            img.onmouseover = () => img.style.transform = 'scale(1.1)';
            img.onmouseout = () => img.style.transform = 'scale(1)';
        });
    </script>
    </div>
    

<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

<div class="container1">
        <form id="jobForm">
            <h1>منصة توفير الوظائف</h1>
            <label for="title">المسمى الوظيفي:</label>
            <input type="text" id="title" name="title" required>

            <label for="description">الوصف:</label>
            <textarea id="description" name="description" required></textarea>

            <label for="image">صورة:</label>
            <input type="file" id="image" name="image" required>

            <button type="submit">إرسال</button>
        </form>
    </div>
    <div id="jobsContainer"></div>
    <script src="scripts.js"></script>

<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<div class="container">
<img src="https://i.imgur.com/FGfMI4K.gif" alt="الشعار" class="logo">
<p class="title">إعدادات الحساب</p>
<div class="button-group">
  <a href="reset-password.php" class="btn btn-warning">إعادة تعيين كلمة المرور الخاصة بك</a>
  <a href="logout.php" class="btn btn-danger">تسجيل الخروج من حسابك</a>
</div>

<div class="button-container">
     
    </div>
    </p>

   
    

<script>

document.addEventListener('DOMContentLoaded', function() {
    displayJobs();
});

document.getElementById('jobForm').addEventListener('submit', function(event) {
    event.preventDefault();
    
    const jobTitle = document.getElementById('title').value;
    const jobDescription = document.getElementById('description').value;
    const jobImage = document.getElementById('image').files[0];
    const existingId = document.getElementById('jobForm').getAttribute('data-edit-id');

    if (jobImage) {
        const reader = new FileReader();
        reader.onload = function(event) {
            const job = {
                id: existingId ? parseInt(existingId) : Date.now(), 
                title: jobTitle,
                description: jobDescription,
                image: event.target.result 
            };

            saveOrUpdateJob(job);
            displayJobs();
            document.getElementById('jobForm').reset();
            document.getElementById('jobForm').removeAttribute('data-edit-id');
        };
        reader.readAsDataURL(jobImage);
    } else if (existingId) { 
        updateJobDetails(existingId, jobTitle, jobDescription);
        displayJobs();
        document.getElementById('jobForm').reset();
        document.getElementById('jobForm').removeAttribute('data-edit-id');
    } else {
        alert('Please upload an image for the job.');
    }
});

function saveOrUpdateJob(job) {
    let jobs = JSON.parse(localStorage.getItem('jobs')) || [];
    const existingIndex = jobs.findIndex(j => j.id === parseInt(job.id));

    if (existingIndex > -1) {
        jobs[existingIndex] = job; 
    } else {
        jobs.push(job); 
    }

    localStorage.setItem('jobs', JSON.stringify(jobs));
}

function updateJobDetails(jobId, title, description) {
    let jobs = JSON.parse(localStorage.getItem('jobs')) || [];
    const jobIndex = jobs.findIndex(job => job.id === parseInt(jobId));
    if (jobIndex > -1) {
        jobs[jobIndex].title = title;
        jobs[jobIndex].description = description;
    }
    localStorage.setItem('jobs', JSON.stringify(jobs));
}

function displayJobs() {
    const jobsContainer = document.getElementById('jobsContainer');
    jobsContainer.innerHTML = ''; 

    let jobs = JSON.parse(localStorage.getItem('jobs')) || [];

    jobs.forEach(job => {
        const jobElement = document.createElement('div');
        jobElement.classList.add('job');
        jobElement.innerHTML = `
            <img src="${job.image}" alt="Job Image" style="width: 100%; border-radius: 4px; margin-bottom: 10px;">
            <h2>${job.title}</h2>
            <p>${job.description}</p>
            <div class="job-controls">
                <button onclick="deleteJob(${job.id})" class="delete-button">حذف</button>
                <button onclick="editJob(${job.id})" class="edit-button">تعديل</button>
            </div>
        `;
        jobsContainer.appendChild(jobElement);
    });
}

function deleteJob(jobId) {
    let jobs = JSON.parse(localStorage.getItem('jobs')) || [];
    jobs = jobs.filter(job => job.id !== parseInt(jobId));
    localStorage.setItem('jobs', JSON.stringify(jobs));
    displayJobs();
}

function editJob(jobId) {
    const jobs = JSON.parse(localStorage.getItem('jobs')) || [];
    const job = jobs.find(job => job.id === parseInt(jobId));

    document.getElementById('title').value = job.title;
    document.getElementById('description').value = job.description;
    
    document.getElementById('jobForm').setAttribute('data-edit-id', job.id);
}

</script>
</body>
</html>