<!DOCTYPE html>
<html>

<head>
    <title>Design Studio</title>
        <!-- MATERILIZE CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="stylesheet.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css?family=Abril+Fatface|Muli|Permanent+Marker|Poppins|Vidaloka" rel="stylesheet">
        <!-- Compiled and minified JavaScript -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
    <body>     
                <!-- NAVIGATION !-->
                <?php include 'template/nav.php';?>  
                    <!-- MOBILE MENU COLLAPSE FUNCTION !-->                   
                            
                <!-- SECTION 1 !-->
                <section id="section1">
                    <!-- ROW 1 !-->
                    <div class="row">
                            <div id="title">                       
                                <h1><br>Your space<br>renovated<br>into something BEAUTIFUL.</h1>
                                    <br> 
                                        <p id="parrag-1">
                                            We make every space comfortable, inviting, and uplifting. Because we 
                                            believe it should feel that way wherever you live, work, and play.                                 
                                        </p>
                                        <br>
                                        <a class="waves-effect waves-light btn" id="buttons">START</a>
                            </div>   
                        </div>
                    </div>
                </section>
                
                <!-- SECTION 2 !-->
                <section id="section2"> 
                    <!--GRID !--> 
                        <div class="grid-container">
                            <!--GRID  ITEM 1 !--> 
                                <div class="grid-item1">
                                    <img src="imgs/chair5.jpg" id="chair5"> 
                                </div>
                            <!--GRID  ITEM 2 !--> 
                                <div class="grid-item2">
                                    <br>
                                        <h3>Simplicity is Key.</h3>
                                            <br>
                                            <br> 
                                            <img src="imgs/paint.png" id="paint">
                                            <br> 
                                            <br>
                                            <p>
                                                When it comes to beautiful interior design, often times less is more and simple 
                                                equates to elegance. With a clean and simple palate, the right accessories can 
                                                help add some pop and pizazz to most any space.  
                                            </p> 
                                            <br>    
                                                <a href="#" class="links">View Item</a>            
                                </div>
                            <!--GRID  ITEM 3 !--> 
                                <div class="grid-item3">                                
                                    <img src="imgs/space4.jpeg" id="space4">
                                </div>   
                        </div>
                </section>

                <script>
                    document.addEventListener('DOMContentLoaded', function() {
                        var elems = document.querySelectorAll('.slider');
                        var options = document.querySelectorAll('slides');
                        var instances = M.Slider.init(elems, options);
                    });
                </script>

                <!-- SECTION 4 !-->
                <section id="section4">
                    <div id="header">
                        <h3>It's all about the details...</h3>
                    </div>
                    <!-- ROW 1 !-->
                    <div class="row">
                        <div class="col s12 m3">
                            <div class="card">
                                <div class="card-image waves-effect waves-block waves-light">
                                    <img class="activator" src="imgs/design7.jpeg">
                                </div>
                            </div>
                        </div>
                        <div class="col s12 m3">
                            <div class="card">
                                <div class="card-image waves-effect waves-block waves-light">
                                    <img class="activator" src="imgs/space5.jpeg">
                                </div>
                            </div>
                        </div>
                        <div class="col s12 m3">
                            <div class="card">
                                <div class="card-image waves-effect waves-block waves-light">
                                    <img class="activator" src="imgs/bath1.jpg">
                                </div>
                            </div>
                        </div>
                        <div class="col s12 m3">
                            <div class="card">
                                <div class="card-image waves-effect waves-block waves-light">
                                    <img class="activator" src="imgs/space12.jpg">
                                </div>
                            </div>
                        </div>

                    </div>
                    <i class="material-icons medium" id="arrow">arrowforward</i>
                </section>


                <!-- SECTION 5 !-->
                <section id="section5">
                    <!-- ROW 1 !-->
                    <div class="row">
                        <div class="col s7">                        
                            <img src="" id=""> 
                        </div>
                        <div class="col s5">                        
                            <h1><br>Your space<br>renovated<br>into something BEAUTIFUL.</h1>
                                <br>
                                <img src="imgs/paint.png" id="paint">
                                <br> 
                                    <p id="parrag-1">
                                        We make every space comfortable, inviting, and uplifting. Because we 
                                        believe it should feel that way wherever you live, work, and play.                                 
                                    </p>
                                    <br>
                                    <br>
                                    <a class="waves-effect waves-light btn" id="buttons">START</a>
                                    <br>
                                    
                        </div>
                    </div>
                </section>
                
                <!-- FOOTER !-->
                <?php include 'template/footer.php';?>

        </body>
    </html>

