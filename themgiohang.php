<?php
session_start();
include('ketnoi.php');

if(isset($_POST['themgiohang'])) {
    $maSach = $_POST['maSach'];
    if(isset($_SESSION['giohang'][$maSach])) {
        $_SESSION['giohang'][$maSach]['soLuong'] += 1;
    } else {
        $anhBia = $_POST['anhBia'];
        $tenSach = $_POST['tenSach'];
        $gia = $_POST['gia'];
        $_SESSION['giohang'][$maSach] = array(
            'maSach' => $maSach,
            'anhBia' => $anhBia,
            'tenSach' => $tenSach,
            'gia' => $gia,
            'soLuong' => 1
        );
    }
    header('Location: giohang.php');
    exit;
}

if(isset($_POST['muangay'])) {
    $maSach = $_POST['maSach'];
    $anhBia = $_POST['anhBia'];
    $tenSach = $_POST['tenSach'];
    $gia = $_POST['gia'];
    
    $sp = array(
        'maSach' => $maSach,
        'anhBia' => $anhBia,
        'tenSach' => $tenSach,
        'gia' => $gia,
        'soLuong' => 1
    );

    if(!isset($_SESSION['giohang'])) {
        $_SESSION['giohang'] = array();
    }
    $_SESSION['giohang'][$maSach] = $sp;
    header('Location: giohang.php');
    exit;
}
?>