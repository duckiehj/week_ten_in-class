<?php
require_once __DIR__ . '/includes/scripts/database.php';

// step 1: connect to database
$connection = getConnection();

// step 2: 전체 잡지 목록을 모두 가져오기 (WHERE 조건 제거!)
$queryResult = mysqli_query($connection, 'SELECT * FROM issues');
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
            <?php while ($issue = mysqli_fetch_array($queryResult)): ?>
            <li>
                <article>
                    <!-- 잡지 이름을 클릭하면 issue.php?id=번호 페이지로 이동합니다! -->
                    <h3>
                        <a href="issue.php?id=<?php echo $issue['id']; ?>">
                            <?php echo $issue['name']; ?>
                        </a>
                    </h3>
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
