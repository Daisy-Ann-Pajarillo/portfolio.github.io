\<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proponents</title>
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f4f8;
            color: #333;
            overflow-x: hidden; /* Added to remove horizontal scroll */
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
            padding: 50px 20px;
            background-color: white;
            text-align: center;
        }
        main h2 {
            font-size: 2.5em;
            margin-bottom: 20px;
            color: #2184cb;
        }
        .proponents-container {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 40px;
            max-width: 1200px;
            margin: 0 auto;
        }
        .proponent {
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 200px;
        }
        .proponent img {
            border-radius: 50%;
            width: 150px;
            height: 150px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 10px;
        }
        .proponent p {
            font-size: 1.1em;
            color: black;
            margin: 0;
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
        <a href="proponents.php">Proponents</a>
    </b>
</nav>

<main>
    <h2><b>Proponents</b></h2>
    <div class="proponents-container">
        <div class="proponent">
            <img src="an.jpg" alt="Grace Anne E. Capanang">
            <p>Grace Anne E. Capanang</p>
        </div>
        <div class="proponent">
            <img src="jo.jpg" alt="Jhona Mae C. Cartoja">
            <p>Jhona Mae C. Cartoja</p>
        </div>
        <div class="proponent">
            <img src="me.jpg" alt="Daisy Ann O. Pajarillo">
            <p>Daisy Ann O. Pajarillo</p>
        </div>
        <div class="proponent">
            <img src="taws.jpg" alt="Jan James Lennox L. Tahumar">
            <p>Jan James Lennox L. Tahumar</p>
        </div>
    </div>
    <p style="margin-top: 20px; font-size: 1.2em;"><b>BSIT-3A</b></p>
</main>



</body>
</html>
