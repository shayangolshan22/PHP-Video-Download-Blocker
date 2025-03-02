# PHP Video Download Blocker

This project provides a PHP-based solution to prevent video downloads from download managers like ADM. By rendering videos on an HTML5 canvas, the system disables download functionality, ensuring that videos are only streamed and cannot be saved to the user's device. Additionally, right-click is disabled to further prevent download attempts.

## Features

- Blocks video downloads by rendering videos on a canvas.
- Prevents right-clicking to stop users from accessing video download options.
- Compatible with popular download managers like ADM.
- Simple to integrate into any PHP-based website.
- Ensures videos are streamed and cannot be downloaded.

## How It Works

The video is embedded in an HTML5 `<canvas>` element where the video is drawn frame by frame. This technique prevents the video from being directly accessible by download managers. The right-click functionality is also disabled to avoid further attempts to download the video.

## Installation

1. Clone or download this repository.
2. Upload the `i-2.php` script to your server.
3. Link to the video URL in your HTML and point it to the PHP script that renders the video.
4. Make sure the video file is accessible on your server.

## Example Usage

```php
// Example to stream a video
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
    echo 'Video file not found.';
}
```
## Social Media Links

You can connect with me on the following platforms:

[![Telegram](https://img.shields.io/badge/Telegram-2CA5E0?style=flat&logo=telegram&logoColor=white)](https://t.me/shayan_golshan22)
[![Instagram](https://img.shields.io/badge/Instagram-E4405F?style=flat&logo=instagram&logoColor=white)](https://www.instagram.com/shayan.glshn/)
