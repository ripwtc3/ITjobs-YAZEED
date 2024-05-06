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
    <title>صفحة التقديم</title>
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
    border: 2px solid #000; 
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
    background-color: #f0ad4e; 
}

.btn-danger {
    background-color: #d9534f; 
}

.btn:hover {
    background-color: #333; 
}


.main-container {
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
}

.container {
    width: 100%;
    max-width: 960px;
    background: white;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0,0,0,0.1);
}

h1 {
    color: #333;
    text-align: center;
}

#jobsContainer {
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


.job form {
  background-color: #f8f8f8; 
  border: 2px solid #16EAD7; 
  border-color: #16EAD7; 
  padding: 15px;
  margin-top: 10px;
  border-radius: 5px;
  box-shadow: 0 2px 5px rgba(0,0,0,0.15);
}


.job form input, .job form button {
    width: 100%;
    padding: 8px;
    margin-top: 5px;
    border: 2px solid #16EAD7;
    border-radius: 4px;
    box-sizing: border-box;
}

.job form button {
    background-color: #16EAD7;
    color: white;
    border: none;
    cursor: pointer;
    transition: background-color 0.3s, color 0.3s;
}

.job form button:hover {
    background-color: #C42AE4;
    color: #16EAD7;
}

.job form input:focus {
    border-color: #16EAD7;
}


.register-button {
    background-color: #C42AE4;
    color: white;
    padding: 10px;
    border-radius: 4px;
    margin-top: 10px;
    cursor: pointer;
    border: none;
}

.register-button:hover {
    background-color: #16EAD7;
    color: #C42AE4;
}


.job img {
    width: 100%;
    border-radius: 4px;
    margin-bottom: 10px;
}

.job h2, .job p {
    margin-bottom: 5px;
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

    <div class="main-container">
    <div class="container">
        <h1>لوحة الوظائف</h1>
        <div id="jobsContainer"></div>
    </div>
</div>

    
  

    

    <script>
        
        document.querySelectorAll('img').forEach(img => {
            img.onmouseover = () => img.style.transform = 'scale(1.1)';
            img.onmouseout = () => img.style.transform = 'scale(1)';
        });
    </script>
    </div>
    




     
    </div>
    </p>

    <script>

document.addEventListener('DOMContentLoaded', function() {
    displayJobs();
});

function displayJobs() {
    const jobsContainer = document.getElementById('jobsContainer');
    let jobs = JSON.parse(localStorage.getItem('jobs')) || [];

    jobs.forEach(job => {
        const jobElement = document.createElement('div');
        jobElement.classList.add('job');
        jobElement.innerHTML = `
            <img src="${job.image}" alt="Job Image" style="width: 100%; border-radius: 4px; margin-bottom: 10px;">
            <h2>${job.title}</h2>
            <p>${job.description}</p>
            <button id="register${job.id}" class="register-button">تسجيل</button>
        `;
        jobsContainer.appendChild(jobElement);

        document.getElementById(`register${job.id}`).addEventListener('click', function() {
            openRegistrationForm(job.id);
        });
    });
}

function openRegistrationForm(jobId) {
    const jobElement = document.querySelector(`#register${jobId}`).parentNode;
    if (!jobElement.querySelector('form')) { 
        const formHtml = `
            <form id="registerForm${jobId}">
                <input type="text" placeholder="الاسم الكامل" required>
                <input type="email" placeholder="البريد الإلكتروني" required>
                <input type="text" placeholder="رقم الهاتف" required>
                <input type="text" placeholder="مهارات" required>
                <input type="file" placeholder="Upload CV" required>
                <button type="submit">تسجيل</button>
            </form>
        `;
        jobElement.innerHTML += formHtml;

        document.getElementById(`registerForm${jobId}`).addEventListener('submit', function(event) {
            event.preventDefault();
            alert('تم إرسال طلب التسجيل الخاص بك');
            this.remove(); 
        });
    }
}




</script>
    
</body>
</html>