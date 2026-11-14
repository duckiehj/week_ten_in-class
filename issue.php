<?php
require_once __DIR__ . '/includes/scripts/database.php';

// step 1: connect to database
// mysql_connect() -just in a differnt file
$connection = getConnection();

$id = $_GET['id'] ?? null;


// step 2: run a query against our database
$queryResult = mysqli_query($connection, 'SELECT * FROM issues WHERE id = '. $id . ';');

// step 3: fetch all the results (not best practice, will discuss alternative shortly)
// $results = mysqli_fetch_all($query, MYSQLI_ASSOC);
$issue = mysqli_fetch_assoc($queryResult);

$issueId = $issue['id'];

$articlesResult = mysqli_query($connection, 'SELECT * FROM articles WHERE issue_id = '. $issueId . ';');
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

            <?php while ($article = mysqli_fetch_array($articlesResult)): ?>
            <li>
                <article>
                    <h3><?php echo $article['headline']; ?></h3>
                    <p><?php echo $article['slug']; ?></p>
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