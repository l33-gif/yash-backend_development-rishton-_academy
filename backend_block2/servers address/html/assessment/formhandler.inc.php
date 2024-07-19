<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") { // Check if the request method is POST
    try {
        include "dbh.inc.php"; // Include the database handler to establish a connection

        // Check if the form is for adding a pupil or a teacher
        if (isset($_POST["pupil_id"])) { // Check if the pupil_id field is set in the POST request
            // Handling add_pupil.php form
            $pupil_id = $_POST["pupil_id"]; // Get the pupil_id from the form
            $name = $_POST["name"]; // Get the name from the form
            $address = $_POST["address"]; // Get the address from the form
            $medical_information = $_POST["medical_information"]; // Get the medical information from the form
            $email = $_POST["email"]; // Get the email from the form
            $class_id = $_POST["class_id"]; // Get the class_id from the form

            // Prepare the SQL query to insert a new pupil into the Pupils table
            $query = "INSERT INTO Pupils (pupil_id, name, address, medical_information, email, class_id) VALUES (?, ?, ?, ?, ?, ?);";
            $stmt = $pdo->prepare($query); // Prepare the SQL statement
            $stmt->execute([$pupil_id, $name, $address, $medical_information, $email, $class_id]); // Execute the statement with the form data
        } elseif (isset($_POST["teacher_id"])) { // Check if the teacher_id field is set in the POST request
            // Handling add_teacher.php form
            $teacher_id = $_POST["teacher_id"]; // Get the teacher_id from the form
            $name = $_POST["name"]; // Get the name from the form
            $address = $_POST["address"]; // Get the address from the form
            $Phone_Number = $_POST["Phone_Number"]; // Get the phone number from the form
            $salary_id = $_POST["salary_id"]; // Get the salary_id from the form
            $Background_check = $_POST["Background_check"]; // Get the background check status from the form
            $class_id = $_POST["class_id"]; // Get the class_id from the form

            // Prepare the SQL query to insert a new teacher into the Teachers table
            $query = "INSERT INTO Teachers (teacher_id, name, address, Phone_Number, salary_id, Background_check, class_id) VALUES (?, ?, ?, ?, ?, ?, ?);";
            $stmt = $pdo->prepare($query); // Prepare the SQL statement
            $stmt->execute([$teacher_id, $name, $address, $Phone_Number, $salary_id, $Background_check, $class_id]); // Execute the statement with the form data
        } elseif (isset($_POST["assistant_teacher_id"])) { // Check if the assistant_teacher_id field is set in the POST request
            // Handling add_assist_teacher.php form
            $assistant_teacher_id = $_POST["assistant_teacher_id"]; // Get the assistant_teacher_id from the form
            $name = $_POST["name"]; // Get the name from the form
            $address = $_POST["address"]; // Get the address from the form
            $Phone_Number = $_POST["Phone_Number"]; // Get the phone number from the form
            $salary_id = $_POST["salary_id"]; // Get the salary_id from the form
            $Background_check = $_POST["Background_check"]; // Get the background check status from the form
            $class_id = $_POST["class_id"]; // Get the class_id from the form

            // Prepare the SQL query to insert a new assistant teacher into the Assistant_Teacher table
            $query = "INSERT INTO Assistant_Teacher (assistant_teacher_id, name, address, Phone_Number, salary_id, Background_check, class_id) VALUES (?, ?, ?, ?, ?, ?, ?);";
            $stmt = $pdo->prepare($query); // Prepare the SQL statement
            $stmt->execute([$assistant_teacher_id, $name, $address, $Phone_Number, $salary_id, $Background_check, $class_id]); // Execute the statement with the form data
        } else {
            header("Location: ../index.php"); // Redirect to the index page if no known form data is received
            die(); // Terminate the script
        }

        // Close the database connection
        $pdo = null; // Nullify the PDO object to close the connection
        $stmt = null; // Nullify the statement object to close it

        header("Location: ../index.php"); // Redirect to the index page after successful execution
        die(); // Terminate the script
    } catch (PDOException $e) { // Catch any PDO exception that occurs
        die("Query failed: " . $e->getMessage()); // Display the error message and terminate the script
    }
} else {
    header("Location: ../index.php"); // Redirect to the index page if the request method is not POST
    die(); // Terminate the script
}
?>
