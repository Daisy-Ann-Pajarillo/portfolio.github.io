<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Solis Tabula Vestigator: A Dual-mode Tracking and Monitoring System 
    </title>
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
            padding:  20px;
            text-align: center;
        }
        main h2 {
            font-size: 2.5em;
            color: #2184cb;
        }
        main img{
            max-width: 100%;
            height: auto;
        }
        main p {
            font-size: 1.2em;
            margin-top: 20px;
            color: #555;
        }
        
        @media (max-width: 600px) {
            nav {
                flex-direction: column;
            }
            nav a {
                margin: 10px 0;
            }
        }
    </style>
</head>
<body>

<header>
    <h1><b>Solis Tabula Vestigator: A Dual-mode Tracking and Monitoring System  </b></h1>
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
    <h2><b>Database Architecture</b></h2>
   <img src="arch.png">
</main>

</body>
</html>
