<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Assistant Teacher</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            background-color: #f0f0f0;
            color: #333;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            border-radius: 8px;
            max-width: 500px;
            width: 100%;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #343a40;
        }

        .form {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        .form-group {
            display: flex;
            flex-direction: column;
        }

        .form-group label {
            margin-bottom: 5px;
            font-weight: bold;
            color: #495057;
        }

        .form-group input {
            padding: 10px;
            border: 1px solid #ced4da;
            border-radius: 4px;
            font-size: 16px;
        }

        .btn {
            padding: 10px;
            background-color: #343a40;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        .btn:hover {
            background-color: #495057;
        }

        .dashboard-link {
            display: block;
            text-align: center;
            margin-top: 20px;
            color: #007bff;
            text-decoration: none;
        }

        .dashboard-link:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Add Assistant Teacher</h2>
        <form action="formhandler.inc.php" method="post" class="form">
            <div class="form-group">
                <label for="assistant_teacher_id">Assistant Teacher ID:</label>
                <input type="number" id="assistant_teacher_id" name="assistant_teacher_id" required>
            </div>
            <div class="form-group">
                <label for="name">Assistant Teacher Name:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="address">Address:</label>
                <input type="text" id="address" name="address" required>
            </div>
            <div class="form-group">
                <label for="Phone_Nmber">Phone Number:</label>
                <input type="number" id="Phone_Nmber" name="Phone_Nmber" required>
            </div>
            <div class="form-group">
                <label for="salary_id">Salary ID:</label>
                <input type="number" id="salary_id" name="salary_id" required>
            </div>
            <div class="form-group">
                <label for="Background_check">Background Check:</label>
                <input type="text" id="Background_check" name="Background_check">
            </div>
            <div class="form-group">
                <label for="class_id">Class ID:</label>
                <input type="number" id="class_id" name="class_id" required>
            </div>
            <button type="submit" class="btn">Add Assistant Teacher</button>
        </form>
        <a href="dashboard.php" class="dashboard-link">Back to Dashboard</a>
    </div>
</body>
</html>
