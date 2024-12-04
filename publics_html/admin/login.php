<?php /*
session_start();
include '../includes/db_connection.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $stmt = $pdo->prepare("SELECT * FROM users WHERE username = ?");
    $stmt->execute([$username]);
    $user = $stmt->fetch();

    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['username'] = $user['username'];
        $_SESSION['role'] = $user['role'];
        
        header('Location: dashboard.php');
        exit();
    } else {
        $error = "Invalid username or password";
    }
}*/
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Login</title>
    <link rel="stylesheet" href="../css/styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;800&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="/publics_html/images/favicon/favicon-96x96.png" sizes="96x96" />
    <link rel="shortcut icon" href="/publics_html/images/favicon/favicon.ico" />
    <link rel="icon" type="image/svg+xml" href="/publics_html/images/favicon/favicon.svg" />
    <meta name="apple-mobile-web-app-title" content="MyWebSite" />
    <link rel="manifest" href="/publics_html/images/favicon/site.webmanifest" />
    <link rel="apple-touch-icon" sizes="180x180" href="/publics_html/images/favicon/apple-touch-icon.png" />
</head>
<style>
    body {
        background: linear-gradient(135deg, rgba(16, 185, 129, 0.2), rgba(5, 150, 105, 0.2)), 
                        url('/publics_html/images/loginbg.jpeg') no-repeat center center fixed;
            background-size: cover;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            perspective: 4000px;
        }

</style>           
<div class="login-container w-full rounded-2xl animate-fade-in">
        <form method="POST" class="login-form space-y-6">
            <div class="login-header text-center">
                <h2 class="text-3xl font-bold text-dark mb-2">Admin Login</h2>
                <p class="text-dark text-opacity-80">
                    Enter your credentials to access the dashboard</p>
            </div>

            <div class="space-y-4">
                <div>
                <div class="input-group">
                        <i class="fas fa-user input-icon absolute left-4 top-1/2 transform -translate-y-1/2 text-white opacity-70"></i>
                        <input 
                            type="text" 
                            name="username" 
                            placeholder="Username" 
                            required 
                            class="input-field w-full py-3 pl-12 pr-4 bg-white bg-opacity-10 text-white placeholder-dark placeholder-opacity-70 border border-green border-opacity-20 rounded-lg focus:outline-none focus:border-[#10B981]">
                    </div>
                </div>

                <div>
                    <div class=" input-group">
                        <i class="fas fa-lock input-icon absolute left-4 top-1/2 transform -translate-y-1/2 text-white opacity-70"></i>
                        <input 
                            type="password" 
                            name="password" 
                            placeholder="Password" 
                            required 
                            class="input-field w-full py-3 pl-12 pr-4 bg-white bg-opacity-10 text-white placeholder-dark placeholder-opacity-70 border border-green border-opacity-20 rounded-lg focus:outline-none focus:border-[#10B981]">
                    </div>
                </div>
            </div>

            <div>
                <button 
                    type="submit" 
                    class="login-btn w-full py-3 bg-[#10B981] text-white rounded-lg hover:bg-[#059669] transition-colors duration-300 transform hover:scale-105 active:scale-95">
                    Login
                </button>
            </div>

            <div class="forgot-password">
                <a href="#" class="text-dark text-opacity-70 hover:text-opacity-100 transition-colors text-sm">
                    Forgot Password?
                </a>
            </div>
        </form>
    </div>
</body>
<script src="../js/script.js"></script>
</html>