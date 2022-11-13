<?php


?>

<head>

    <link rel="stylesheet" href="./header/headerStyles.css">
</head>
<body>
    <nav class="navbar">


        <a href="#" class="logo"> <img src="./header/assets/logos/logo_ADOGL.png"></a>
        <div class="nav-links">
            <ul>
                <li class="active"><a href="#">Inicio</a></li>
                <li><a href="#">Peliculas</a></li>
                <li><a href="#">Musica</a></li>
                <li><a href="#">Juegos</a></li>
                <li><a href="#">Encuesta</a></li>
                <li><a href="#">Contacto</a></li>
                
            </ul>
        </div>
        <img src="./header/assets/menu.png" alt="menu hamburger" class="menu-hamburger">

    </nav>
    
</body>


    <script>
        const menuHamburger = document.querySelector(".menu-hamburger")
        const navLinks = document.querySelector(".nav-links")

        menuHamburger.addEventListener('click',()=>{
        navLinks.classList.toggle('mobile-menu')
        })
</script>
