<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Issue</title>
</head>
<body>
    <header>
        <h1>Add a new issue</h1>
    </header>
    <main>
        <form action="" method="POST">
            <div>
                <label for="name">Issue Name:</label>
                <input id="name" type="text" name="name">
            </div>

            <div>
                <label for="date">Issue Date:</label>
                <input id="date" type="date" name="date">
            </div>

            <div>
                <label for="published">Issue is published?</label>
                <input id="published" type="checkbox" name="published">
            </div>
            <div>
                <button type="submit">Save</button>
            </div>

        </form>
    </main>
    
</body>
</html>