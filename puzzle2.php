<html>
    <head>
        <title>Puzzle2</title>
    </head>
    <body>
        <p>0 = empty</p>
        <p>1 = bom</p>
        <p>8 = start</p>
        <p>9 = goal</p>
        <form action="puzzle3.php" method="POST">
            <table>
                <thead>
                </thead>
                <tbody>
                    <?php
                        $row = $_POST['row'];
                        $column = $_POST['column'];

                        for($y=0;$y<$column;$y++){
                            echo "<tr>" . PHP_EOL;
                            for($x=0;$x<$row;$x++){
                                echo '<td><input type="number" name="box['.$y.'][]" onkeydown="return event.keyCode !== 69"></td>';
                            }
                            echo "</tr>" . PHP_EOL;
                        }
                    ?>
                </tbody>
            </table>
            <button type="submit">submit</button>
        </form>
    </body>
</html>
