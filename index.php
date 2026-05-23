<?php

$host = getenv('DB_HOST');
$db   = getenv('DB_DATABASE');
$user = getenv('DB_USERNAME');
$pass = getenv('DB_PASSWORD');

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("
    <h1 style='color:red;'>❌ Database Connection Failed</h1>
    <p>{$conn->connect_error}</p>
    ");
}

echo "
<!DOCTYPE html>
<html>
<head>
    <title>SMRForge Test App</title>
    <style>
        body{
            background:#0f172a;
            color:white;
            font-family:Arial;
            display:flex;
            justify-content:center;
            align-items:center;
            height:100vh;
            margin:0;
        }

        .card{
            background:#1e293b;
            padding:40px;
            border-radius:20px;
            text-align:center;
            box-shadow:0 0 30px rgba(0,0,0,0.4);
        }

        h1{
            color:#22c55e;
        }

        p{
            color:#cbd5e1;
        }
    </style>
</head>
<body>

<div class='card'>
    <h1>🚀 Database Successfully</h1>

    <p>Application deployed using Coolify</p>

    <p><strong>Host:</strong> {$host}</p>
    <p><strong>Database:</strong> {$db}</p>

    <h3>stef did it & Deploy 🔥</h3>
</div>

</body>
</html>
";

?>
