<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

    <title>User Profile</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }

        .profile-card {
            background-color: #F3F4F6;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .profile-card h1 {
            font-size: 2rem;
            font-weight: bold;
            color: #4B5563;
            margin-bottom: 10px;
        }

        .profile-card p {
            font-size: 1.1rem;
            color: #6B7280;
            margin-bottom: 8px;
        }

        .profile-card .profile-info {
            border-top: 1px solid #E5E7EB;
            padding-top: 20px;
            margin-top: 20px;
        }

        .profile-card .profile-info .label {
            font-weight: bold;
            color: #4B5563;
            margin-bottom: 5px;
        }

        .profile-card .profile-info .value {
            color: #6B7280;
        }
    </style>
</head>
<body class="bg-gray-100">
<div class="container">
    <div class="profile-card">
        <h1>User Profile</h1>
        <div class="profile-info">
            <div class="label">Name:</div>
            <div class="value">{{ $user->name }}</div>
        </div>
        <div class="profile-info">
            <div class="label">Email:</div>
            <div class="value">{{ $user->email }}</div>
        </div>
        <!-- Adicione mais informações do perfil do usuário conforme necessário -->
    </div>
</div>
</body>
</html>
