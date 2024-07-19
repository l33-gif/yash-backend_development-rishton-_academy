<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    try {
        include "dbh.inc.php"; // Include the database handler to establish a connection

        // Check if the form is for updating a pupil, teacher, or assistant teacher
        if (isset($_POST["pupil_id"])) {
            // Handling update for pupil
            $pupil_id = $_POST["pupil_id"];
            $name = $_POST["name"];
            $address = $_POST["address"];
            $medical_information = $_POST["medical_information"];
            $email = $_POST["email"];
            $class_id = $_POST["class_id"];

            // Prepare the SQL query to update a pupil in the Pupils table
            $query = "UPDATE Pupils SET name = ?, address = ?, medical_information = ?, email = ?, class_id = ? WHERE pupil_id = ?;";
            $stmt = $pdo->prepare($query);
            $stmt->execute([$name, $address, $medical_information, $email, $class_id, $pupil_id]);
        } elseif (isset($_POST["teacher_id"])) {
            // Handling update for teacher
            $teacher_id = $_POST["teacher_id"];
            $name = $_POST["name"];
            $address = $_POST["address"];
            $phone_number = $_POST["Phone_Number"];
            $salary_id = $_POST["salary_id"];
            $background_check = $_POST["Background_check"];
            $class_id = $_POST["class_id"];

            // Prepare the SQL query to update a teacher in the Teachers table
            $query = "UPDATE Teachers SET name = ?, address = ?, Phone_Number = ?, salary_id = ?, Background_check = ?, class_id = ? WHERE teacher_id = ?;";
            $stmt = $pdo->prepare($query);
            $stmt->execute([$name, $address, $phone_number, $salary_id, $background_check, $class_id, $teacher_id]);
        } elseif (isset($_POST["assistant_teacher_id"])) {
            // Handling update for assistant teacher
            $assistant_teacher_id = $_POST["assistant_teacher_id"];
            $name = $_POST["name"];
            $address = $_POST["address"];
            $phone_number = $_POST["Phone_Number"];
            $salary_id = $_POST["salary_id"];
            $background_check = $_POST["Background_check"];
            $class_id = $_POST["class_id"];

            // Prepare the SQL query to update an assistant teacher in the Assistant_Teacher table
            $query = "UPDATE Assistant_Teacher SET name = ?, address = ?, Phone_Number = ?, salary_id = ?, Background_check = ?, class_id = ? WHERE assistant_teacher_id = ?;";
            $stmt = $pdo->prepare($query);
            $stmt->execute([$name, $address, $phone_number, $salary_id, $background_check, $class_id, $assistant_teacher_id]);
        } else {
            header("Location: ../index.php");
            die();
        }

        // Close the statement and database connection
        $stmt = null; // Nullify the statement object to close it
        $pdo = null; // Nullify the PDO object to close the connection

        header("Location: ../index.php"); // Redirect to the index page after successful execution
        die();
    } catch (PDOException $e) {
        die("Query failed: " . $e->getMessage());
    }
} else {
    header("Location: ../index.php");
    die();
}
?>
