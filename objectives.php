<?php
// Any PHP logic can go here if needed
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Solis Tabula Vestigator: A Dual-mode Tracking and Monitoring System</title>
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f4f8;
            color: #333;
            overflow: hidden; /* Added to remove scroll */
        }
        header {
            background: linear-gradient(90deg, #2184cb, #03648d);
            color: white;
            padding: 20px 0;
            text-align: center;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        nav {
            display: flex;
            justify-content: center;
            background-color: #2184cb;
            padding: 15px 0;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        nav a {
            color: white;
            text-decoration: none;
            margin: 0 20px;
            font-weight: 500;
            transition: color 0.3s ease;
        }
        nav a:hover {
            color: black;
        }
        main {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            padding: 20px 20px;
            text-align: left;
        }
        .content {
            flex: 1;
            max-width: 45%;
        }
        .content h2 {
            font-size: 2.5em;
            margin-bottom: 20px;
            color: black;
            text-align: center;
        }
        .content p {
            font-size: 1.2em;
            margin: 20px 0;
            color: black;
            text-align: left;
        }
        .content ul {
            list-style-type: disc;
            padding-left: 20px;
        }
        .content ul li {
            margin-bottom: 10px;
            color: black;
        }
        .image {
            flex: 1;
            max-width: 45%;
            text-align: center;
        }
        .image img {
            width: 100%;
            height: 440px;
            border-radius: 10px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        }
        footer {
            background-color: #2184cb;
            color: white;
            text-align: center;
            padding: 15px 0;
            position: fixed;
            bottom: 0;
            width: 100%;
            box-shadow: 0 -2px 10px rgba(0, 0, 0, 0.1);
        }
        @media (max-width: 900px) {
            main {
                flex-direction: column;
                align-items: center;
            }
            .image {
                margin-top: 20px;
            }
        }
        @media (max-width: 600px) {
            nav {
                flex-direction: column;
            }
            nav a {
                margin: 10px 0;
            }
            main {
                padding: 20px;
            }
            .content, .image {
                max-width: 100%;
            }
        }
    </style>
</head>
<body>

<header>
    <h1><b>Solis Tabula Vestigator: A Dual-mode Tracking and Monitoring System</b></h1>
</header>

<nav>
<b>
        <a href="index.php">Rationale</a>
        <a href="objectives.php">Objectives</a>
        <a href="db_arch.php">Database Architecture</a>
        <a href="erd_diagram.php">ERD Diagram</a>
        <a href="queries.php">Queries</a>
        <a href="db_fiddle.php">DB Fiddle Link</a>
        <a href="proponents.php">Proponents</a> <!-- Added link for Proponents -->
    </b>
</nav>

<main>
    <div class="content">
        <h2>Objectives</h2>
        <p>The objective of this study is to extract and analyze data from the solar tracking 
            system database for essential monitoring, evaluating, and 
            optimizing the performance of Sunlight Insights: Enhancing Solar
            Efficiency with Dual-Mode Tracking and Battery Monitoring system.
            <br> Specifically, these queries include: 
        </p>
        <ul>
            <li>Retrieve sensor data</li>
            <li>Calculate average daily voltage</li>
            <li>Calculate average daily energy saved</li>
            <li>Identify peak sunlight intensity</li>
        </ul>
    </div>
    <div class="image">
        <img src="panel.jpg" alt="Solar Panel">
    </div>
</main>



</body>
</html>
