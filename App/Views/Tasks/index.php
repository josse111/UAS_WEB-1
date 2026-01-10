<!DOCTYPE html>
<html>
<head>
    <title>My Tasks - ToDo List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <nav class="navbar navbar-dark bg-primary mb-4 shadow-sm">
        <div class="container">
            <span class="navbar-brand">Halo, <?= $_SESSION['username'] ?></span>
            <a href="/todo/logout" class="btn btn-danger btn-sm">Logout</a>
        </div>
    </nav>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card p-4 shadow-sm mb-4">
                    <form action="/todo/task/store" method="POST" class="mb-4">
                        <div class="input-group">
                            <input type="text" name="title" class="form-control" placeholder="Tugas baru..." required>
                            <button class="btn btn-primary" type="submit">Tambah</button>
                        </div>
                    </form>
                    <h5 class="fw-bold mb-3">Daftar Tugas</h5>
                    <ul class="list-group shadow-sm">
                        <?php foreach($tasks as $t): ?>
                        <li class="list-group-item d-flex justify-content-between align-items-center py-3">
                            <span class="<?= $t['status'] == 'completed' ? 'text-decoration-line-through text-muted' : '' ?>">
                                <?= htmlspecialchars($t['title']) ?>
                            </span>
                            <?php if($t['status'] == 'pending'): ?>
                                <a href="/todo/task/complete?id=<?= $t['id'] ?>" class="btn btn-secondary btn-sm rounded-pill px-3">Belum Selesai</a>
                            <?php else: ?>
                                <button class="btn btn-success btn-sm rounded-pill px-3" disabled>✓ Selesai</button>
                            <?php endif; ?>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</body>
</html>