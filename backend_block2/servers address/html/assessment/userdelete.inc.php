<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    try {
        include "dbh.inc.php"; // Link to the database handler

        // Check if the form is for adding a pupil or a teacher
        if (isset($_POST["pupil_id"])) {
            // Handling delete_pupil.php form
            $address = $_POST["address"];
            $medical_information = $_POST["medical_information"];

            $query = "DELETE FROM Pupils WHERE address = ? AND medical_information = ?;";
            $stmt = $pdo->prepare($query);
            $stmt->execute([$address, $medical_information]);
        } elseif (isset($_POST["teacher_id"])) {
            // Handling delete_teacher.php form
            // $teacher_id = $_POST["teacher_id"];
            $class_id = $_POST["class_id"];

            $query = "DELETE FROM Teachers WHERE teacher_id = ? AND class_id = ?;";
            $stmt = $pdo->prepare($query);
            $stmt->execute([$teacher_id, $class_id]);
        } elseif (isset($_POST["assist_teacher_id"])) {
            // Handling delete_assist_teacher.php form
            $address = $_POST["address"];
            $background_check = $_POST["background_check"];

            $query = "DELETE FROM Assistant_Teacher WHERE address = ? AND background_check = ?;";
            $stmt = $pdo->prepare($query);
            $stmt->execute([$address, $background_check]);
        } else {
            header("Location: ../index.php");
            die();
        }

        // Close the database connection
        $pdo = null;
        $stmt = null;

        header("Location: ../index.php");
        die();
    } catch (PDOException $e) {
        die("Query failed: " . $e->getMessage());
    }
} else {
    header("Location: ../index.php");
}
?>
