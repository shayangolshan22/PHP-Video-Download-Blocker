<?php
$randNumber = rand(1, 2);
$videoPath = '1.' . $randNumber;

if (file_exists($videoPath)) {
    header('Content-Type: video/mp4');
    header('Content-Length: ' . filesize($videoPath));
    header('Content-Disposition: inline; filename="' . basename($videoPath) . '"');
    header('Accept-Ranges: bytes');

    readfile($videoPath);
    exit;
} else {
    echo 'فایل ویدیو یافت نشد.';
}
