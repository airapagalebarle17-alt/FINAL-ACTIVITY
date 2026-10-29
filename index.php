<?php
include "db.php";

$message = "";

if (isset($_POST["submit"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];
   

    $sql = "INSERT INTO finaltb (Username, password) VALUES (?, ?)";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "ss", $username, $password);

    if (mysqli_stmt_execute($stmt)) {
        $message = "Data saved successfully!";
    } else {
        $message = "Error saving data.";
    }

    mysqli_stmt_close($stmt);
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Solar Water System | Admin Login</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="login-container">

        <!-- Left Panel -->
        <div class="brand-panel">

            <div class="brand-icon">☀️ 💧</div>

            <h1>Solar-Powered<br>Water Supply</h1>

            <p class="system-name">Management System</p>

            <p class="barangay">Barangay Ibabang Talim</p>

            <div class="tagline">
                "Clean Water,<br>
                Healthy Community."
            </div>

        </div>

        <!-- Right Panel -->
        <div class="login-panel">

            <div class="login-content">

                <h2>Admin Login</h2>

                <p class="subtitle">
                    Enter your credentials to continue.
                </p>
                <p><?php echo htmlspecialchars($message); ?></p>

                <form id="loginForm" method="POST" action="">

                    <label for="username">Username</label>

                    <div class="input-wrapper">
                        <span class="input-icon">👤</span>

                        <input
                            type="text"
                            id="username"
                            name="username"
                            placeholder="Enter username"
                            autocomplete="username"
                            required
                        >
                    </div>

                    <label for="password">Password</label>

                    <div class="input-wrapper">
                        <span class="input-icon">🔒</span>

                        <input
                            type="password"
                            id="password"
                            name="password"
                            placeholder="Enter password"
                            autocomplete="current-password"
                            required
                        >

                        <button
                            type="button"
                            id="togglePassword"
                            class="toggle-password"
                            aria-label="Show password"
                        >👁️</button>
                    </div>

                    <button
                        type="submit"
                        name="submit"
                        class="login-button"
                    >
                        Login
                    </button>

                </form>

                <p class="footer-text">
                    © 2026 | Developed by Aira Pagal & Matthew Sambas | BIT
                </p>

            </div>

        </div>

    </div>

    <script src="script.js"></script>

</body>
</html>
