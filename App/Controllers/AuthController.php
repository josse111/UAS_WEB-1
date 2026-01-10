<?php
class AuthController extends Controller {
    public function login() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $db = (new Database())->getConnection();
            $username = $_POST['username'] ?? '';
            $password = $_POST['password'] ?? '';

            // Mencari user berdasarkan username
            $query = "SELECT * FROM users WHERE username = :username LIMIT 1";
            $stmt = $db->prepare($query);
            $stmt->execute(['username' => $username]);
            $user = $stmt->fetch(PDO::FETCH_ASSOC);

            // Perbandingan TEKS BIASA (Tanpa password_verify)
            if ($user && $password == $user['password']) {
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['username'] = $user['username'];
                header("Location: /todo/tasks");
                exit();
            } else {
                // Notifikasi jika gagal login
                echo "<script>alert('Login Gagal! Username atau Password salah.'); window.location='/todo/login';</script>";
                exit();
            }
        } else {
            $this->view('Auth/login');
        }
    }
}