<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dynamic Multiplication Table</title>
</head>
<body>

    <h2>Generate Table</h2>
    
    <form method="POST" action="Display_Table.php">
        <div>
            <label for="start">Starting value for N:</label>
            <input type="number" name="start" id="start" required>
        </div>
        <br>
        <div>
            <label for="end">Ending value for N:</label>
            <input type="number" name="end" id="end" required>
        </div>
        <br>
        <button type="submit" name="submit">Generate</button>
    </form>

    <br>

    <?php
    // Check if the form has been submitted
    if (isset($_POST['submit'])) {
        // Retrieve and sanitize inputs
        $start = (int)$_POST['start'];
        $end = (int)$_POST['end'];

        // Validate that the start value is less than or equal to the end value
        if ($start > $end) {
            echo "<p>Error: The starting value must be less than or equal to the ending value.</p>";
        } else {
            // Generate the table dynamically using plain HTML attributes for basic structure
            echo "<table border='1'>";
            echo "<tr>
                    <th>N</th>
                    <th>10 * N</th>
                    <th>100 * N</th>
                    <th>1000 * N</th>
                  </tr>";

            // Loop from the starting value to the ending value
            for ($n = $start; $n <= $end; $n++) {
                echo "<tr>";
                echo "<td>{$n}</td>";
                echo "<td>" . ($n * 10) . "</td>";
                echo "<td>" . ($n * 100) . "</td>";
                echo "<td>" . ($n * 1000) . "</td>";
                echo "</tr>";
            }
			echo "</table>";
        }
    }
    ?>


</body>
</html>