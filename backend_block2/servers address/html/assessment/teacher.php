<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teachers</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-"/>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            overflow-x: hidden;
            background-color: #f0f0f0;
            color: #333;
        }

        .container {
            position: relative;
            width: 100%;
        }

        .sidebar {
            position: fixed;
            width: 300px;
            height: 100%;
            background-color: #343a40;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            z-index: 2;
        }

        .sidebar ul {
            list-style: none;
            padding: 0;
        }

        .sidebar ul li {
            width: 100%;
        }

        .sidebar ul li:hover {
            background: #495057;
        }

        .sidebar ul li:first-child {
            padding: 20px;
            text-align: center;
            border-bottom: 1px solid #495057;
        }

        .sidebar ul li:first-child span {
            color: white;
            font-size: 1.5em;
            font-weight: bold;
        }

        .sidebar ul li a {
            width: 100%;
            text-decoration: none;
            color: #fff;
            display: flex;
            align-items: center;
            padding: 15px 20px;
        }

        .sidebar ul li a i {
            min-width: 60px;
            font-size: 24px;
            text-align: center;
        }

        .main {
            position: absolute;
            width: calc(100% - 300px);
            min-height: 100vh;
            left: 300px;
            background-color: #f8f9fa;
        }

        .top-bar {
            position: fixed;
            height: 60px;
            width: calc(100% - 300px);
            background-color: #343a40;
            display: grid;
            grid-template-columns: 10fr 0.4fr 1fr;
            grid-gap: 5px;
            align-items: center;
            color: #fff;
            padding: 0 20px;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            z-index: 1;
        }

        .top-bar .search-bar {
            position: relative;
            max-width: 400px;
        }

        .search-bar input {
            width: 100%;
            min-width: 128px;
            height: 40px;
            padding: 0 40px;
            font-size: 16px;
            outline: none;
            border: none;
            background: #495057;
            color: #fff;
        }

        .search-bar i {
            position: absolute;
            right: 15px;
            top: 10px;
            cursor: pointer;
            color: #fff;
        }

        .user {
            position: relative;
            width: 50px;
            height: 50px;
        }

        .user img {
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            object-fit: cover;
            border-radius: 50%;
        }

        .teacher-section {
            margin-top: 100px;
            padding: 20px;
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: center;
        }

        .teacher-card {
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            width: 250px;
            text-align: center;
        }

        .teacher-card h2 {
            font-size: 1.2em;
            margin-bottom: 15px;
        }

        .teacher-card button {
            display: block;
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            border: none;
            background-color: #343a40;
            color: #fff;
            cursor: pointer;
            font-size: 1em;
        }

        .teacher-card button:hover {
            background-color: #495057;
        }

        .footer {
            background-color: #343a40;
            color: #fff;
            text-align: center;
            padding: 10px;
        }
    </style>
</head>
<body>

    <div class="container">
        <div class="sidebar">
            <ul>
                <li>
                    <span>Rishton Primary Academy</span>
                </li>
                <li>
                    <a href="dashboard.php">
                        <i class="fas fa-th-large"></i>
                        <div class="title">Dashboard</div>
                    </a>    
                </li>
                <li>
                    <a href="pupils.php">
                        <i class="fas fa-child"></i>
                        <div class="title">Pupils</div>
                    </a>    
                </li>
                <li>
                    <a href="teacher.php">
                        <i class="fas fa-user-circle"></i>
                        <div class="title">Teachers</div>
                    </a>    
                </li>
                <li>
                    <a href="assistant_teachers.php">
                        <i class="fas fa-user-circle"></i>
                        <div class="title">Assistant Teachers</div>
                    </a>    
                </li>
                <li>
                    <a href="index.php">
                        <i class="fas fa-table"></i>
                        <div class="title">View Tables</div>
                    </a>    
                </li>
            </ul>
        </div>

        <div class="main">
            <div class="top-bar">
                <div class="search-bar">
                    <input type="text" name="search" placeholder="Search...">
                    <label for="search"><i class="fas fa-search"></i></label>
                </div>
                <i class="fas fa-bell"></i>
                <div class="user">
                    <img src="images/user.png" alt="user" class="user-img">
                </div>
            </div>
            <div class="teacher-section">
                <div class="teacher-card">
                    <h2>Update Teacher</h2>
                    <button onclick="location.href='update_teacher.php'">Update</button>
                    <!-- Connect to update form here -->
                </div>
                <div class="teacher-card">
                    <h2>Insert Teacher</h2>
                    <button onclick="location.href='add_teacher.php'">Insert</button>
                    <!-- Connect to insert form here -->
                </div>
                <div class="teacher-card">
                    <h2>Delete Teacher</h2>
                    <button onclick="location.href='delete_teacher.php'">Delete</button>
                    <!-- Connect to delete form here -->
                </div>
            </div>
        </div>
    </div>
    <footer class="footer">
        <p>&copy; 2024 School Dashboard. All rights reserved.</p>
    </footer>
</body>
</html>
