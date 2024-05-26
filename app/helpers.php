<?php

// Fungsi helper untuk memuat view
function view($view, $data = []) {
    extract($data);
    require "app/views/{$view}.php";
}

// Fungsi helper untuk redirect
function redirect($url) {
    // Jika URL tidak dimulai dengan http:// atau https://, tambahkan site_url
    if (!preg_match('/^(http:\/\/|https:\/\/)/', $url)) {
        $url = site_url($url);
    }
    header("Location: " . $url);
    exit();
}

// Fungsi untuk mendapatkan base URL
function base_url($path = '') {
    return 'http://miniweb.test/' . $path;
}

// Fungsi untuk mendapatkan site URL
function site_url($path = '') {
    return base_url('index.php/' . $path);
}

// Fungsi helper untuk memeriksa apakah request adalah POST
function is_post_request() {
    return $_SERVER['REQUEST_METHOD'] === 'POST';
}
