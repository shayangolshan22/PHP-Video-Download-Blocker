<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Canvas Video Player</title>
</head>

<body>
    <canvas id="videoCanvas"></canvas>

    <script>
        document.addEventListener('DOMContentLoaded', function() {

            document.addEventListener('contextmenu', function(e) {
                e.preventDefault(); 
            });

            const video = document.createElement("video");
            const randNumber = Math.floor(Math.random() * 10);
            const videoUrl = 'http://localhost:8080/i-2.php'; 

            video.src = videoUrl;
            video.crossOrigin = "anonymous";
            video.autoplay = true;
            video.loop = true;
            video.muted = true;

            const canvas = document.getElementById("videoCanvas");
            const ctx = canvas.getContext("2d");

            video.addEventListener("loadeddata", () => {
                canvas.width = 500;
                canvas.height = 500;

                function drawFrame() {
                    ctx.drawImage(video, 0, 0, canvas.width, canvas.height);
                    requestAnimationFrame(drawFrame); 
                }

                drawFrame();
            });

            video.play();
        });
    </script>
</body>

</html>