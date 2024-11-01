<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artist Art</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/vue@2"></script>
    <script src="/js/app.js" defer></script>
</head>
<body>
    <div id="app">
        <div class="site-container">
            <header-artist></header-artist>
    
            <main id="content-index" class="invisible">
                <hero-section></hero-section>
    
                <galery-carousel></galery-carousel>
    
                <about-me></about-me>
    
                <section id="video" class="whole-video">
                    <div class="video-glass-effect"></div>
                    <div class="video-first-container">
                        <div class="video-second-container">
                            <div class="video-third-container">
                                <video id="intro-video" controls>
                                    <source src="video/sample-1.webm" type="video/mp4">
                                    Tu navegador no soporta el elemento de video.
                                </video>
                            </div>
                        </div>
                    </div>
                </section>
    
            <reviews></reviews>
            </main>
    
            <footer-info></footer-info>
        </div>
        <script src="index.js"></script>
    </div>
</body>
</html>