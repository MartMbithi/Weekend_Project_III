<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Webpixels">
    <title>UASIN-GISHU COUNTY : CEREALS AND PRODUCE BOARD MANAGEMENT SYSTEM</title>
    <!-- Favicon -->
    <link rel="icon" href="assets/img/brand/main_logo.png" type="image/png">
    <!-- Font Awesome 5 -->
    <link rel="stylesheet" href="assets/libs/%40fortawesome/fontawesome-pro/css/all.min.css">
    <link rel="stylesheet" href="assets/css/purpose.css" id="stylesheet">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" id="stylesheet">
    <!-- JQuerry -->
    <link rel="stylesheet" href="assets/css/jquery-ui.min.css" id="stylesheet">
    <!-- Select2 -->
    <link rel="stylesheet" href="assets/libs/select2/css/select2.min.css">
    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="assets/libs/sweetalert2/dist/sweetalert2.min.css">
    <!-- Data Tables CDN-->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.25/datatables.min.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.7.1/css/buttons.dataTables.min.css" />
    <!-- Floara Editor CDN -->
    <link href='https://cdn.jsdelivr.net/npm/froala-editor@4.0.8/css/froala_editor.pkgd.min.css' rel='stylesheet' type='text/css' />
</head>
<?php
/* Alert Sesion Via Alerts */
if (isset($_SESSION['success'])) {
    $success = $_SESSION['success'];
    unset($_SESSION['success']);
}
?>