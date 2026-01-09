# To-Do List Application - Project UAS Pemrograman Web

Aplikasi To-Do List berbasis web yang dibangun menggunakan arsitektur **MVC (Model-View-Controller)** dengan PHP Native. Project ini dirancang untuk mengelola tugas harian dengan antarmuka yang dinamis dan sistem autentikasi sederhana.

---

##  Identitas Mahasiswa
- **Nama**: Zaki Fauzan Akhbari
- **NIM**: 312410348
- **Mata Kuliah**: Pemrograman Web
- **Tahun**: 2026

---

##  Deskripsi Program
Program ini merupakan aplikasi manajemen tugas (Task Management) yang memisahkan logika aplikasi ke dalam tiga komponen utama (MVC):
1. **Model**: Mengatur komunikasi dan query ke database MySQL.
2. **View**: Menampilkan antarmuka pengguna menggunakan Bootstrap 5.
3. **Controller**: Menghubungkan input pengguna ke logika database.

Aplikasi ini menggunakan sistem **Password Plain Text** pada database untuk memudahkan proses pengujian dan demonstrasi fitur secara langsung.

---

##  Fitur Utama (Sesuai Ketentuan UAS)
1. **Sistem Autentikasi**: Login dan Logout menggunakan **Session PHP** untuk membatasi akses halaman dashboard.
2. **Manajemen Tugas (CRUD)**:
   - **Tambah**: Input tugas baru ke dalam daftar.
   - **Tampil**: Menampilkan semua tugas yang tersimpan di database secara real-time.
   - **Update Status**: Mengubah status tugas dari 'Pending' menjadi 'Completed'.
3. **Antarmuka Dinamis**:
   - **Visual Feedback**: Tombol berubah warna dari **Abu-abu** (Pending) menjadi **Hijau** (Selesai) sebagai penanda visual yang jelas.
   - **Efek Coretan**: Teks tugas otomatis tercoret saat status dinyatakan selesai.
4. **Clean URL & Routing**: Implementasi file `.htaccess` agar alamat URL aplikasi lebih rapi dan profesional.
5. **Responsive Design**: Tampilan aplikasi otomatis menyesuaikan ukuran layar perangkat (Mobile & Desktop) berkat framework Bootstrap 5.

---

## 🛠️ Teknologi yang Digunakan
- **Bahasa**: PHP 8.x (Native) dengan pendekatan OOP.
- **Database**: MySQL dengan koneksi **PDO (PHP Data Objects)**.
- **Frontend**: Bootstrap 5 (CSS Framework).
- **Server**: Apache (via XAMPP).

---
## Cara Instalasi
1. Clone atau download repository ini.

2. Masukkan folder project ke dalam C:/xampp/htdocs/.

3. Aktifkan Apache dan MySQL di Control Panel XAMPP.

4. Buat database di phpMyAdmin dengan nama db_todolist.

5. Import tabel users dan tasks yang disediakan.

6. Akses aplikasi melalui alamat: http://localhost/todo/login.

   ## Akun Login
   Admin : Username: admin    Password : 123
   User : Username : user     Password : 123


   ## Dokumentasi Video

   link :

##  Struktur Folder
```text
todo/
├── App/
│   ├── Controllers/   # Logika Auth & Manajemen Task
│   ├── Models/        # Pengaturan Query ke Database
│   └── Views/         # Folder Tampilan HTML/PHP
├── Core/              # Koneksi DB & Core Controller
├── .htaccess          # Konfigurasi Routing Clean URL
└── index.php          # Entry Point Utama (Session Start)
