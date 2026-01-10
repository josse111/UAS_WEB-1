<!DOCTYPE html>
<html>
<head>
    <title>Login - ToDo List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light d-flex align-items-center vh-100">
    <div class="container border p-4 bg-white shadow-sm" style="max-width: 400px; border-radius: 15px;">
        <h2 class="text-center text-primary fw-bold">Login App</h2>
        <form action="/todo/login" method="POST">
    <div class="mb-3">
        <label>Username</label>
        <input type="text" name="username" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Password</label>
        <input type="password" name="password" class="form-control" required>
    </div>
    <button type="submit" class="btn btn-primary">Login</button>
</form>
    </div>
</body>
</html>

