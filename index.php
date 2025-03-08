<?php
// Get the requested page from the URL
$page = isset($_GET['page']) ? $_GET['page'] : 'home';

// Define allowed pages to prevent direct file access
$allowed_pages = ['home', 'about', 'contact', 'careers', 'portfolio', 'Brand-identity-and-design-service', 'Business-Web-Solutions', 'Illustration-Service', 'Social-Media-Marketing-Service', 'Content-Writing-Service', 'Search-Engine-Optimization-Service', 'Video-Animation-Service', 'Youtube-Service'];

if (in_array($page, $allowed_pages)) {
    $page_file = $page . '.php';
    $page_title = ucfirst($page);
} else {
    $page_file = '404.php';
    $page_title = 'Page Not Found';
}
$basesurl = "assets/";

// Include the main layout
require 'includes/layout.php';