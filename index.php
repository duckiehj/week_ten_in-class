<?php
require_once __DIR__ . '/includes/scripts/database.php';

// step 1: connect to database
// mysql_connect() -just in a differnt file
$connection = getConnection();

// step 2: run a query against our database
$queryResult = mysqli_query($connection, 'SELECT * FROM issues;');

// step 3: fetch all the results (not best practice, will discuss alternative shortly)
// $results = mysqli_fetch_all($query, MYSQLI_ASSOC);

// var_dump($results);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="main.css">
    <title>PHP &amp; HTML</title>
</head>
<body>
    <header>
        <h1>PHP &amp; HTML</h1>
    </header>
    <main>
        <h2>Issues</h2>
        <ul>

            <?php while ($result = mysqli_fetch_array($queryResult)): ?>
            <li>
                <article>
                    <h3><?php echo $result['name']; ?></h3>
                </article>
            </li>
            <?php endwhile; ?>
        </ul>
    </main>
    <footer>
    </footer>

    <script src="main.js"></script>
</body>
</html>