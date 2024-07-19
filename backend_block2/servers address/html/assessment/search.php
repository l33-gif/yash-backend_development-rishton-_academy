<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    try {
        include "dbh.inc.php"; // Include the database handler to establish a connection

        $searchType = $_POST["searchType"] ?? ''; // Get the search type from the form or set to empty string if not provided
        $searchQuery = $_POST["searchQuery"] ?? ''; // Get the search query from the form or set to empty string if not provided

        // Determine the appropriate query based on the search type
        if ($searchType == 'pupil') {
            $query = "SELECT * FROM Pupils"; // Query to select all pupils
        } elseif ($searchType == 'teacher') {
            $query = "SELECT * FROM Teachers"; // Query to select all teachers
        } elseif ($searchType == 'assistantTeacher') {
            $query = "SELECT * FROM Assistant_Teacher"; // Query to select all assistant teachers
        } else {
            header("Location: ../index.php"); // Redirect to the index page if search type is not recognized
            die(); // Terminate the script
        }

        // If a search query is provided, add a WHERE clause to filter results by name
        if ($searchQuery) {
            $query .= " WHERE name LIKE ?"; // Add a WHERE clause with a LIKE operator
            $stmt = $pdo->prepare($query); // Prepare the SQL statement
            $stmt->execute(['%' . $searchQuery . '%']); // Execute the statement with the search query
        } else {
            $stmt = $pdo->prepare($query); // Prepare the SQL statement
            $stmt->execute(); // Execute the statement without filtering
        }

        $results = $stmt->fetchAll(PDO::FETCH_ASSOC); // Fetch all results as an associative array

        // Close the statement and database connection
        $stmt = null; // Nullify the statement object to close it
        $pdo = null; // Nullify the PDO object to close the connection
    } catch (PDOException $e) {
        die("Query failed: " . $e->getMessage()); // Display the error message and terminate the script
    }
} else {
    header("Location: ../index.php"); // Redirect to the index page if the request method is not POST
    die();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Results</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h3>Search results:</h3>

    <?php if (!empty($results)): ?>
        <table>
            <thead>
                <tr>
                    <?php foreach (array_keys($results[0]) as $column): ?>
                        <th><?php echo htmlspecialchars($column); ?></th>
                    <?php endforeach; ?>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($results as $row): ?>
                    <tr>
                        <?php foreach ($row as $cell): ?>
                            <td><?php echo htmlspecialchars($cell); ?></td>
                        <?php endforeach; ?>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p>No results found.</p>
    <?php endif; ?>

    <form action="search.php" method="POST">
        <input type="hidden" name="searchType" value="<?php echo htmlspecialchars($searchType); ?>">
        <label for="searchQuery">Search:</label>
        <input id="searchQuery" type="text" name="searchQuery" placeholder="Search....." />
        <button type="submit">Search</button>
    </form>

</body>
</html>
