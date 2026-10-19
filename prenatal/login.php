<?php
/**
 * User Login Redirect Route
 * Web-Based Prenatal Health Center Booking Appointment and Record Management System
 */
require_once __DIR__ . '/config.php';

if (isLoggedIn()) {
    $role = getCurrentUserRole();
    if ($role === 'admin') { header("Location: admin_dashboard.php"); }
    elseif ($role === 'healthcare_worker') { header("Location: worker_dashboard.php"); }
    else { header("Location: patient_dashboard.php"); }
    exit;
}

header("Location: index.php?auth=login");
exit;
