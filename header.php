<?php


?>

<head>

<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

<style>

*{
    margin :0;
    padding: 0;
    text-decoration: none;
    list-style: none;
}

body{
    font-family: 'Poppins';
    background-color: gray;
}

header{
    height: 150px;;
    

}

.navbar{

    position: fixed;
    top:0;
    z-index:10;
    padding: 14px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    width: 100%;
    box-sizing: border-box;
    background-color:#663366;
}
.navbar a {
    color: white;
}


.navbar .nav-links ul {
    display: flex;

}
.navbar .nav-links ul li {
    margin:0 25px;


}

.navbar .nav-links ul li.active a {
    color: red;
    font-weight:600;


}

.navbar .menu-hamburger {
    display: none;
    position: absolute;
    top: 20px;
    right: 20px;

}


@media screen and (max-width:800px) {
    .navbar{
        padding: 28px;
        position: fixed;
    top:0;
    z-index:10;
    }

    .navbar .logo{
        position: absolute;
        top: 12px;
        left: 10px;
        object-fit: contain;
    }
    .navbar .logo img{
        
        object-fit: contain;
        padding-left: 10px!important;
       
    }
  
    .navbar a {
        color: white;
        font-weigth:700;
    }


    .navbar .menu-hamburger {
        display: block;
        top: 4px;
    right: 20px;
    }
    .nav-links{
        display: none!important;
        top: 70px;
        left: 0;
        position: absolute;
        background-color: #663366ab;
        backdrop-filter: blur(5px);
        width: 40%;
        
        display:flex;
        justify-content: center;
        align-items: center;
        margin-left: 0%;
        transition:  all 0.5s ease; 
        border-radius: 8px;
        
    }

    .nav-links.mobile-menu {
        display: block!important;
        margin-left: 60%;
    }
    

    .nav-links ul{
        display: flex;
        flex-direction: column;
        align-items: center;
    }
    
    .navbar .nav-links ul li {

        margin: 10px 0;
        font-size: 1.5em;
    }

    
}
    </style>
</head>
<body>
    <nav class="navbar">


        <a href="#" class="logo"> <img class="logoImg" src="./Assets/headerAssets/logos/logo_ADOGL.png"></a>
        <div class="nav-links">
            <ul>
                <li class="active"><a href="index.php">Inicio</a></li>
                <li><a href="filmsCategory.php">Peliculas</a></li>
                <li><a href="#">Musica</a></li>
                <li><a href="#">Juegos</a></li>
                <li><a href="#">Encuesta</a></li>
                <li><a href="#">Contacto</a></li>
                
            </ul>
        </div>
        <img src="./Assets/headerAssets/menu.png" alt="menu hamburger" class="menu-hamburger">

    </nav>
    
</body>


    <script>
        const menuHamburger = document.querySelector(".menu-hamburger")
        const navLinks = document.querySelector(".nav-links")

        menuHamburger.addEventListener('click',()=>{
        navLinks.classList.toggle('mobile-menu')
        })
</script>
