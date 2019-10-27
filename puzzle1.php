<html>
    <head>
        <title>Puzzle</title>
    </head>
    <body>
        <form action="puzzle2.php" method="POST">
            <input type="number" name="row" placeholder="insert row" onkeydown="return event.keyCode !== 69" required>
            <input type="number" name="column" placeholder="insert column" onkeydown="return event.keyCode !== 69" required>
            <button type="submit">submit</button>
        </form>
    </body>
</html>
