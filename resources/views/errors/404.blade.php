<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>404 | Not Found</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #212529;
            color: #f8f9fa;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .card {
            background-color: #343a40;
            border: none;
            padding: 40px;
            text-align: center;
            border-radius: 15px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.5);
        }
        .btn-home {
            margin-top: 20px;
        }
    </style>
</head>
<body>

<div class="card">
    <h1 class="display-1">404</h1>
    <p class="fs-4">Oops! The page you are looking for does not exist.</p>
    <a href="{{route('home')}}" class="btn btn-primary btn-home">Go Home</a>
</div>

</body>
</html>
