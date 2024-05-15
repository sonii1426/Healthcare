<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All LOGIN</title>
    <script src="https://kit.fontawesome.com/125372cbb9.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link rel="stylesheet" href="Doctorpatient.css">
</head>
<style>
    #container {
        background-color: #fff;
        padding: 50px;
        border-radius: 10px;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        width: 500px;
        margin: auto;
    }

    label {
        display: block;
        margin-bottom: 8px;
        font-size: 16px;
    }

    input {
        width: 100%;
        padding: 10px;
        margin-bottom: 16px;
        box-sizing: border-box;
        border: 1px solid #ddd;
        border-radius: 4px;
    }

    button {
        background-color: var(--green);
        color: #fff;
        padding: 12px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        font-size: 16px;
        transition: background-color 0.3s ease;
    }

    button:hover {
        background-color: #16a085;
    }

    #result {
        margin-top: 20px;
        font-size: 18px;
        font-weight: bold;
        color: #333;
    }

    #history {
        margin-top: 30px;
    }

    #historyTable {
        width: 100%;
        border-collapse: collapse;
        margin-top: 10px;
    }

    #historyTable th,
    #historyTable td {
        border: 1px solid #ddd;
        padding: 10px;
        text-align: left;
    }

    #historyTable th {
        background-color: #16a085;
        color: #fff;
    }

    #historyTable tbody tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    footer {
        position: absolute;
        bottom: auto;
        background-color: lightgray;
        color: #16a085;
        height: 10vh;
        width: 100vw;
        display: flex;
        justify-content: center;
        align-items: center;
        font-size: 20px;
        margin-top: 20px;
    }

    #healthChart {
        max-width: 600px;
        max-height: 400px;
    }

    .chart {
        width: 100%;
        display: flex;
        justify-content: center;
    }
</style>

<body>
    <!--header section starts-->
    <header class="header">
        <div class="image1">
            <a href="#home" class="logo" style="margin-left:50px;"><img src="image/health.png" alt="" height="50px"></i></a>
        </div>
        <nav class="navbar">
            <a href="#home">Home</a>
            <a href="#login">Login</a>
            <a href="#health">Health Tracker</a>
            <a href="nearesthospital.php">Nearest Hospital</a>
        </nav>
    </header>
    <!--header section starts-->
    <!--Home Section start-->
    <section class="home" id="home">
        <div class="image">
            <img src="image/Homepic.gif" alt="">
        </div>
        <div class="content">
            <h3>Stay Happy, Stay Healthy</h3>
            <p>Empowering Health, Inspiring Hope – Where Compassionate Care Meets Cutting-Edge Expertise. Your Wellness Journey Starts Here</p>
            <a href="contactus.php" class="btn">Contact us<span class="fas fa-chevron-right"></span></a>
        </div>
    </section>
    <!--Home Section Ends-->
    <!--Login Section Starts-->
    <section class="login" id="login">
        <h1 class="heading">Login</h1>
        <div class="box-container">
            <div class="box">
                <i class="fa-solid fa-right-to-bracket"></i>
                <h3>Login As Patient</h3>
                <a href="login.php" class="btn">Sign In <span class="fas fa-chevron-right"></span> </a>
            </div>
            <div class="box">
                <i class="fa-solid fa-right-to-bracket"></i>
                <h3>Login As Admin</h3>
                <a href="login3.php" class="btn">Sign In <span class="fas fa-chevron-right"></span> </a>
            </div>
            <div class="box">
                <i class="fa-solid fa-right-to-bracket"></i>
                <h3>Login As Doctor</h3>
                <a href="login2.php" class="btn">Sign In <span class="fas fa-chevron-right"></span> </a>
            </div>
        </div>
    </section>
    <!--Login Section Ends-->
    <!--Health Check Starts-->
    <section class="health" id="health">
        <h1 class="heading" style="margin-top:50px;">Health Tracker</h1>
        <div id="container">
            <!--Existing from inputs-->
            <label for="heartRate">Heart Rate:</label>
            <input type="number" id="heartRate" placeholder="Enter heart rate" required>
            <label for="systolic">Systolic Pressure</label>
            <input type="number" id="systolic" placeholder="Enter Systolic Pressure" required>
            <label for="diastolic">Diastolic Pressure</label>
            <input type="number" id="diastolic" placeholder="Enter Diastolic Pressure" required>
            <label for="hi">Height (cm): </label>
            <input type="number" id="hi" placeholder="Enter Height in cm" required>
            <label for="we">Weight (kg): </label>
            <input type="number" id="we" placeholder="Enter Weight in kg" required>
            <button onclick="calculateHealth();">Calculate</button>

            <div id="result"></div>
            <!-- Health History Table -->
            <div id="history">
                <h2>Health History</h2>
                <table id="historyTable" display="none;">
                    <thead>
                        <tr>
                            <th>Date</th>
                            <th>Time</th>
                            <th>Heart Rate</th>
                            <th>Systolic</th>
                            <th>Diastolic</th>
                            <th>BMI</th>
                        </tr>
                    </thead>
                    <tbody id="historyBody"></tbody>
                </table>
            </div>
        </div>

        <script src="scripta.js"></script>
    </section>
    <section class="chart" id="chart">
        <canvas id="healthChart"></canvas>
    </section>
    <section class="chart" id="chart">
        <button onclick="location.reload();">Refresh To See The Updated Chart Table</button>
    </section>
    <!--Health Checker Ends-->
    <!--Footer Starts-->
    <footer>
        &copy 2024 India, All Rights Reserved By Med-In-India
    </footer>
    <!--Footer Ends-->

</body>