<?php
require_once("php/loadInitialData.php");

$totalMovies = $filmsByCategory[0];
$actionMovies = $filmsByCategory[1];
$cienceMovies = $filmsByCategory[2];
$comedyMovies = $filmsByCategory[3];
$documentaryMovies = $filmsByCategory[4];
$dramaMovies = $filmsByCategory[5];
$kidsMovies = $filmsByCategory[6];
$romanceMovies = $filmsByCategory[7];




//echo var_dump($actionMovies[0]-> RutaArchivo);

?>

<head>

<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <style> 


body{
    margin: 0;
    padding: 0;
    font-family: Arial, Helvetica, sans-serif;
    display: flex;
    height: 100vh;
    width: 100%;
    align-items: center;
    background: radial-gradient(circle, rgba(255,255,255,1) 0%, rgba(226,226,226,1) 110%);
}
h4, h2,small,a{
    margin: 0;
    padding: 0;
}
a{
    text-decoration: none;
}
.Carousel{
    width: 100%;
    margin: 0px 0px;
}
.Carousel h2{
    font-size: 26px;
    line-height: 38px;
    padding-bottom: 24px;
    opacity: .9;
    text-transform: uppercase;
    letter-spacing: 10px;
    text-align: center;
}

/* images */

.slick-list{
    position: relative;
    display: flex;
    align-items: start;
    width: fit-content;
    height: 250px;
    padding: 0px 0px;
    margin: 0px auto;
    max-width: 90vw;
    overflow: scroll;
}
.slick-track{
    position: relative;
    top: 0;
    left: 0;
    display: flex;
    justify-content: center;
    transition: .5s ease-in-out;
}
.slick{
    position: relative;
    width: 220px;
    padding: 0 0px;
    float: left;
    box-sizing: border-box;
    display: flex;
    height: 100%;
}

.slick a img{
    object-fit: cover;
    height: 200px;
    width: 100%;
    border-radius: 4px;
    box-shadow: 0 2px 5px 0 rgba(0,0,0,.5);
    transition: .3s ease-in-out;
}
.slick a img:hover{
    opacity: .85;
}

/* buttons */

.slick-arrow{
    border-radius: 30px;
    background-color: #fff;
    position: absolute;
    z-index: 4;
    width: 48px;
    height: 48px;
    text-align: center;
    box-shadow: 0 2px 5px 0 rgba(0,0,0,.15);
    border: 0;
    cursor: pointer;
}
.slick-arrow:focus{
    outline: 0;
}
.slick-arrow svg{
    width: 12px;
    height: 100%;
    color: rgba(0,0,0,.7);
}
.slick-prev{
    left: 0px;
}
.slick-next{
    right: 0px;
}

.categoryContainer{

    height: 80%;
}



</style>

</head>

<body>

<section style="width:100%"> 


<div style="heigth: 150px;"> </div>



<?php
			require_once('header.php');
?>

 

    <div class="categoryContainer" >

    <div class="container">
        <div class="Carousel">
            <h2>ACCCION</h2>
          
           
            <div class="slick-list" id="slick-list">
               
                <div class="slick-track" id="track">

                <?php for($x = 0; $x < sizeof($actionMovies); $x++): ?>

                    <div class="slick">
                        <div>
                            <a href="/">
                         
                                <figure>
                                 <!--   <img src="Assets/homeAssets/images/3.jpg" alt="Image">  -->
                                   <img src="portadas/<?php echo $actionMovies[$x]-> RutaArchivo ?>" alt="Image"> 
                                </figure>
                                <fig-caption><?php echo $actionMovies[$x]-> NombrePelicula ?></fig-caption>
                            </a>
                        </div>
                    </div>


                <?php endfor; ?>
                    
                </div>
                
            </div>

        </div>

 

        

    </div>
    <div class="container" style:width:80%>
        <div class="Carousel">
            <h2>CIENCIA FICCION</h2>
          
           
            <div class="slick-list" id="slick-list">
                
                <div class="slick-track" id="track">
                    <?php for($x = 0; $x < sizeof($cienceMovies); $x++): ?>

                    <div class="slick">
                        <div>
                            <a href="/">
                         
                                <figure>
                                <!--   <img src="Assets/homeAssets/images/3.jpg" alt="Image">  -->
                                <img src="portadas/<?php echo $cienceMovies[$x]-> RutaArchivo ?>" alt="Image"> 
                                </figure>
                                <fig-caption><?php echo $cienceMovies[$x]-> NombrePelicula ?></fig-caption>
                            </a>
                        </div>
                    </div>


                    <?php endfor; ?>
                    
                </div>
               
            </div>

        </div>


        

    </div>
    <div class="container" style:width:80%>
        <div class="Carousel">
            <h2>COMEDIA</h2>
          
           
            <div class="slick-list" id="slick-list">
               
                <div class="slick-track" id="track">

                <?php for($x = 0; $x < sizeof($comedyMovies); $x++): ?>

                    <div class="slick">
                        <div>
                            <a href="/">
                           
                                <figure>
                                <!--   <img src="Assets/homeAssets/images/3.jpg" alt="Image">  -->
                                <img src="portadas/<?php echo $comedyMovies[$x]-> RutaArchivo ?>" alt="Image"> 
                                </figure>
                                <fig-caption><?php echo $comedyMovies[$x]-> NombrePelicula ?></fig-caption>
                            </a>
                        </div>
                    </div>


                <?php endfor; ?>

                         
                </div>
                
            </div>

        </div>


        

    </div>
    <div class="container" style:width:80%>
        <div class="Carousel">
            <h2>DOCUMENTAL</h2>
          
           
            <div class="slick-list" id="slick-list">
               
                <div class="slick-track" id="track">

                <?php for($x = 0; $x < sizeof($documentaryMovies); $x++): ?>

                    <div class="slick">
                        <div>
                            <a href="/">
                              
                                <figure>
                                <!--   <img src="Assets/homeAssets/images/3.jpg" alt="Image">  -->
                                <img src="portadas/<?php echo $documentaryMovies[$x]-> RutaArchivo ?>" alt="Image"> 
                                </figure>
                                <fig-caption><?php echo $documentaryMovies[$x]-> NombrePelicula ?></fig-caption>
                            </a>
                        </div>
                    </div>


                <?php endfor; ?>

                   
                </div>
               
            </div>

        </div>

   

    </div>
    <div class="container" style:width:80%>
        <div class="Carousel">
            <h2>DRAMA</h2>
          
           
            <div class="slick-list" id="slick-list">
               
                <div class="slick-track" id="track">

                <?php for($x = 0; $x < sizeof($dramaMovies); $x++): ?>

                    <div class="slick">
                        <div>
                            <a href="/">
                              
                                <figure>
                                <!--   <img src="Assets/homeAssets/images/3.jpg" alt="Image">  -->
                                <img src="portadas/<?php echo $dramaMovies[$x]-> RutaArchivo ?>" alt="Image"> 
                                </figure>
                                <fig-caption><?php echo $dramaMovies[$x]-> NombrePelicula ?></fig-caption>
                            </a>
                        </div>
                    </div>


                <?php endfor; ?>
                  
                </div>
              
            </div>

        </div>

       
        </div>
    

    

    <div class="container" style:width:80%>
        <div class="Carousel">
            <h2>INFANTIL</h2>
          
           
            <div class="slick-list" id="slick-list">
               
                <div class="slick-track" id="track">

                <?php for($x = 0; $x < sizeof($kidsMovies); $x++): ?>

                    <div class="slick">
                        <div>
                            <a href="/">
                               
                                <figure>
                                <!--   <img src="Assets/homeAssets/images/3.jpg" alt="Image">  -->
                                <img src="portadas/<?php echo $kidsMovies[$x]-> RutaArchivo ?>" alt="Image"> 
                                </figure>
                                <fig-caption><?php echo $kidsMovies[$x]-> NombrePelicula ?></fig-caption>
                            </a>
                        </div>
                    </div>


                <?php endfor; ?>
                  
                </div>
              
            </div>

        </div>


        </div>
    
     

  

    <div class="container" style:width:80%>
        <div class="Carousel">
            <h2>ROMANCE</h2>
          
           
            <div class="slick-list" id="slick-list">
               
                <div class="slick-track" id="track">

                <?php for($x = 0; $x < sizeof($romanceMovies); $x++): ?>

                    <div class="slick">
                        <div>
                            <a href="/">
                            
                                <figure>
                                <!--   <img src="Assets/homeAssets/images/3.jpg" alt="Image">  -->
                                <img src="portadas/<?php echo $romanceMovies[$x]-> RutaArchivo ?>" alt="Image"> 
                            
                                </figure>
                                <fig-caption><?php echo $romanceMovies[$x]-> NombrePelicula ?></fig-caption>
                            </a>
                        </div>
                    </div>


                <?php endfor; ?>
                  
                </div>
              
            </div>

        </div>

       
        

        </div>
    


        

    </div>



    </div>

 



</section>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<?php
			require_once('footer.php');
		?>


    <script defer src="Views/home/main.js"></script>
</body>
