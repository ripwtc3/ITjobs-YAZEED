<?php

session_start();
 

if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>صفحة عرض الوظائف</title>
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





.button-container {
    text-align: center; 
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






.container {
    width: 100%;
    max-width: 960px; 
    background: white;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    display: flex;
    flex-direction: column; 
    align-items: center; 
}

h1 {
    color: #333;
    text-align: center;
}

form {
    width: 100%;
    max-width: 400px; 
}

#jobsContainer {
    width: 100%;
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
    gap: 20px;
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
    width: 100%;
    height: auto;
    border-radius: 4px;
}

.job h2, .job p {
    margin: 5px 0;
}

.edit-button, .delete-button {
    background-color: #C42AE4;
    color: white;
    padding: 5px 10px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
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
            <li><a href="jobs.php">قسم الوظائف</a></li>
            <li><a href="jobregist.php">قسم التقديم</a></li>
           
        </ul>
    </nav>


    
    <br.<br><br><br><br><br><br>
<div class="message-box">
  <p style="text-align: center; font-size: larger; font-weight: bold;">مرحبًا بكم في موقع PEOPLE CHECK !</p>
  <br><br>
  <p style="text-align: center; font-size: large;">
    يوفر موقع بيبل تشيك الوظائف المرفوعة من قبل الشركات، ويمنح القدرة للأشخاص على التسجيل في إحدى هذه الوظائف.
  </p>
</div>
    <br><br><br>



    <div class="image-container">
    <div style="text-align: center;">      
        <p style="text-align: center; font-size: larger;">الامتيازات</p>
    </div>
    <div style="text-align: center; display: flex; justify-content: center;">
        <div style="margin: 10px;">
            <img src="https://i.imgur.com/Z2oytlt.jpeg" alt="Car Rental Office" style="width: 200px; transition: transform 0.3s;">
            <p>معتمد</p>
        </div>

        <div style="margin: 10px;">
            <img src="https://i.imgur.com/YVWIZ3n.jpeg" alt="Selection of Rental Cars" style="width: 200px; transition: transform 0.3s;">
            <p>سلس</p>
        </div>

        <div style="margin: 10px;">
            <img src="https://i.imgur.com/kbdxmS0.jpeg" alt="Happy Family with Rental Car" style="width: 200px; transition: transform 0.3s;">
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
    

    <br><br><br><br><br><br><br><br>


    <div class="container">
        <h1> إعلانات الوظائف</h1>
        <div id="jobsContainer"></div>
    </div>
    

<br><br><br><br><br><br><br><br>




<div class="container">
<img src="https://i.imgur.com/I4iw2dQ.gif" alt="الشعار" class="logo">
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

function displayJobs() {
    const jobsContainer = document.getElementById('jobsContainer');
    let jobs = JSON.parse(localStorage.getItem('jobs')) || [];

    if (jobs.length === 0) {
        jobsContainer.innerHTML = '<p>لا توجد وظائف متاحة حالياً.</p>';
    } else {
        jobs.forEach(job => {
            const jobElement = document.createElement('div');
            jobElement.classList.add('job');
            jobElement.innerHTML = `
                <img src="${job.image}" alt="Job Image" style="width: 100%; border-radius: 4px; margin-bottom: 10px;">
                <h2>${job.title}</h2>
                <p>${job.description}</p>
            `;
            jobsContainer.appendChild(jobElement);
        });
    }
}






</script>
    
</body>
</html>