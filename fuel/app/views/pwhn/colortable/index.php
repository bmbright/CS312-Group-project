<!DOCTYPE html>
<html lang="en">

<body>

    <header>
        <hr>
        <h1>Color Table</h1>
        <hr>
    </header>

    <form action="../table/colorTable.php" method="GET">
        <p>
            <label for="rows">Enter number of Rows/Columns:</label>
            <input type="number" name="rows" id="rows" min=1 max=26 required>
        </p>
        <p>
            <label for="colors">Number of Colors:</label>
            <input type="number" name="colors" id="colors" min=1 max=10 required>
        </p>
        <input type="submit">
    </form>

</body>
</html>