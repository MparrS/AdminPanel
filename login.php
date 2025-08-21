<?php
session_start();
session_destroy();
header('Location: login.php');
exit;
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Login | Admin Panel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #007bff 0%, #00c6ff 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .login-card {
            border-radius: 1rem;
            box-shadow: 0 4px 24px rgba(0,0,0,0.15);
            padding: 2rem 2.5rem;
            background: #fff;
            width: 100%;
            max-width: 400px;
        }
        .login-logo {
            width: 120px;
            margin-bottom: 1rem;
        }
    </style>
</head>
<body>
    <div class="login-card text-center">
        <img src="https://upload.wikimedia.org/wikipedia/commons/6/6e/ASSA-ABLOY-Logo.svg" alt="Logo Assa Abloy" class="login-logo">
        <h4 class="mb-4 fw-bold">Iniciar Sesión</h4>
        <?php
        session_start();
        $error = '';
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $user = $_POST['username'] ?? '';
            $pass = $_POST['password'] ?? '';
            if ($user === 'admin' && $pass === 'admin123') {
                $_SESSION['user'] = 'Alejandra Molina';
                header('Location: index.php');
                exit;
            } else {
                $error = 'Usuario o contraseña incorrectos';
            }
        }
        if ($error): ?>
            <div class="alert alert-danger"><?= htmlspecialchars($error) ?></div>
        <?php endif; ?>
        <form method="POST" autocomplete="off">
            <div class="mb-3 text-start">
                <label class="form-label fw-semibold">Usuario</label>
                <input type="text" name="username" class="form-control" required autofocus>
            </div>
            <div class="mb-3 text-start">
                <label class="form-label fw-semibold">Contraseña</label>
                <input type="password" name="password" class="form-control" required>
            </div>
            <button class="btn btn-primary w-100 fw-bold" type="submit">Entrar</button>
        </form>
        <div class="mt-3 text-muted" style="font-size:0.95em;">
            Usuario: <b>admin</b> | Contraseña: <b>admin123</b>
        </div>
    </div>
    <ul class="navbar-nav">
        <li class="nav-item">
            <a href="logout.php" class="nav-link">
                <i class="nav-icon fas fa-sign-out-alt"></i>
                <p>Logout</p>
            </a>
        </li>
    </ul>
    <?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    ?>
</body>
</html>