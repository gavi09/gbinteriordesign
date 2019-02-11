<!DOCTYPE html>
<html>

<head>
    <title>Design Studio</title>
        <!-- MATERILIZE CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="stylesheet-portfolio.css">
        <link rel="stylesheet" href="stylesheet.css">
        <link href="https://fonts.googleapis.com/css?family=Abril+Fatface|Muli|Permanent+Marker|Poppins|Vidaloka" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- Compiled and minified JavaScript -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https:///cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
        <script src="https://isotope.metafizzy.co/v1/jquery.isotope.min.js"></script>
</head>
<body>     
                <!-- NAVIGATION !-->
                <?php include 'template/nav.php';?>  
                    <!-- MOBILE MENU COLLAPSE FUNCTION !-->                   
                            
        <script>
                $(window).load(function(){
                var $container = $('.portfolioContainer');
                $container.isotope({
                    filter: '*',
                    animationOptions: {
                        duration: 750,
                        easing: 'linear',
                        queue: false
                    }
            });
        
            $('.portfolioFilter a').click(function(){
                $('.portfolioFilter .current').removeClass('current');
                $(this).addClass('current');
        
                var selector = $(this).attr('data-filter');
                $container.isotope({
                    filter: selector,
                    animationOptions: {
                        duration: 750,
                        easing: 'linear',
                        queue: false
                        }
                    }); 
                    return false;
                }); 
            });
        </script>

        
        <!-- SECTION 2 !-->
        <section id="sectionportfolio"> 
                    <div class="row">
                        <div class="col s12">
                            <h1>Portfolio</h1>
                        </div>
                    </div>
            <!-- CONTAINER !-->
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="portfolioFilter">
                            <a href="#" data-filter="*" class="current">All Categories</a>
                            <a href="#" data-filter=".webTemplates">Web Templates</a>
                            <a href="#" data-filter=".logos">Logos</a>
                            <a href="#" data-filter=".drawings">Drawings</a>
                            <a href="#" data-filter=".ui">UI Elements</a>
                        </div>
                    </div>
                    <div class="portfolioContainer isotope">
                  
                        <div class="webTemplates objects">
                            <img class="port-img" src="imgs/portfolio/1.jpg" alt="image">
                        </div>

                        <div class="drawings places">
                            <img class="port-img" src="imgs/portfolio/2.jpg" alt="image">
                        </div>

                        <div class="webTemplates food">
                            <img class="port-img" src="imgs/portfolio/3.jpg" alt="image">
                        </div>
             
                        <div class="logos drawings">
                            <img class="port-img" src="imgs/portfolio/4.jpg" alt="image">
                        </div>

                        <div class="webTemplates">
                            <img class="port-img" src="imgs/portfolio/5.jpg" alt="image">
                        </div>

                        <div class="ui">
                            <img class="port-img" src="imgs/portfolio/6.jpg" alt="image">
                        </div>

                        <div class="logos drawings">
                            <img class="port-img" src="imgs/portfolio/7.jpg" alt="image">
                        </div>

                        <div class="webTemplates">
                            <img class="port-img" src="imgs/portfolio/8.jpg" alt="image">
                        </div>

                        <div class="ui">
                            <img class="port-img" src="imgs/portfolio/9.jpg" alt="image">
                        </div>
                    
                    </div>
                </div>
                </div>

        </section>

        <!-- FOOTER !-->
        <?php include 'template/footer.php';?>

    </body>
</html>

