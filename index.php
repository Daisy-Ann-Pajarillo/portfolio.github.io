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
            padding: 0px;
            background-color: white;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        main h2 {
            font-size: 2.5em;
            margin-bottom: 20px;
            color: #2184cb;
        }
        .content {
            display: flex;
            max-width: 1100px; /* Adjust maximum width */
            width: 100%;
            gap: 10px;
        }
        .description {
            flex: 1;
            padding-right: 10px;
        }
        .description p {
            font-size: 1.0em;
            color: black;
            text-align: justify;
        }
        .image {
            flex: 1;
            text-align: center;
        }
        .image img {
            max-width: 80%;
            height: 550;
            border-radius: 10px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
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
    <h2>Rationale</h2>
    <div class="content">
        <div class="description">
            <p>The <b>Solis Tabula Vestigator: A Dual-mode Tracking and Monitoring System</b> focuses on maximizing energy gathering efficiency by improving solar tracking systems. This can be achieved through the integration of dual-axis functionality with manual and automatic tracking modes. Users will have the flexibility to adjust solar panel orientation for optimal sunlight exposure, with manual mode serving as a backup in case of automatic malfunction. Additionally, the system includes battery monitoring functionalities to ensure efficient power storage.</p>

            <p>The system will store sensor data, including voltage, current, light intensity, battery voltage, and battery percentage, acquired from the solar panel system. This data will be utilized for real-time monitoring and analysis. Users will access this information through a user-friendly dashboard interface on the monitoring website. Information retrieval will be facilitated through seamless integration between the database and the website, allowing users to remotely monitor and control the solar energy system from anywhere with an internet connection.</p>
        </div>
        <div class="image">
            <img src="panel.jpg" alt="Project Image">
        </div>
    </div>
</main>

</body>
</html>
