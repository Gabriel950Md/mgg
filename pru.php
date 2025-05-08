<?php
 include_once('./inc/header.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>prueba</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="slider">
        <figure></figure>
        <figure></figure>
        <figure></figure>
        <figure></figure>
        <figure></figure>

        <div class="content">
            <h1>hoola</h1>
            <p>si</p>
</div>
</div>
 <style>
*{
    margin: 0;
    padding: 0;
    box-sizzing: border-box;
}

.slider{
    width: 100vw;
    height: 100vh;
    position: relative;
    overflow: hidden;
}

.slider figure{
    width: 100%,
    height: 100%;
    position: absolute;
    top: 0;
    left: 0;
    background-size: cover;
    background-position: center;
    animation: fade 20s infinite;
    opacity: 0;
}

.slider figure:nth-child(1){
    background-image: url(img/i1.jpg);
    animation-delay: 0s;
}
.slider figure:nth-child(2){
    background-image: url(img/i2.jpg);
    animation-delay: 0s;
}
.slider figure:nth-child(3){
    background-image: url(img/i3.jpg);
    animation-delay: 0s;
}
.slider figure:nth-child(4){
    background-image: url(img/i4.jpg);
    animation-delay: 0s;
}
.slider figure:nth-child(5){
    background-image: url(img/i5.jpg);
    animation-delay: 0s;
}

@keyframes fade {
    0% { opacity: 0;}
    5% { opacity: 1;}
    25% { opacity: 1;}
    30% { opacity: 0;}
    100% { opacity: 0;}
}

.slider::before {
    content: '';
    position: absolute;
    widht: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.3);
    z-index: 1;
}

.content {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%)
    color: while;
    text-align: center;
    z-index: 2;
}

.content h1 {
    font-size: 3rem;
    margin-bottom: 1rem;
}
</style>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>