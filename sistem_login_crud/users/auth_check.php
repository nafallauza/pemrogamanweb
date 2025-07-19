<?php 
// Mulai session jika belum aktif
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// Cek apakah user sudah login
if (!isset($_SESSION['user_id'])) {
    $_SESSION['error_message'] = "Anda harus login untuk mengakses halaman ini.";
    header("Location: ../auth/login.php"); // Sesuaikan path jika dipindah
    exit();
}

// Optional: Fungsi untuk mengecek role admin
// function isAdmin() {
//     return isset($_SESSION['role']) && $_SESSION['role'] === 'admin';
// }

// function requireAdmin() {
//     if (!isAdmin()) {
//         $_SESSION['error_message'] = "Anda tidak memiliki hak akses admin.";
//         header("Location: index.php"); // Ganti ke halaman user biasa atau notifikasi
//         exit();
//     }
// }
?>
