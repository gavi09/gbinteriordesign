<?
          session_start();
          include('connection_script.php');

          if(isset($_POST['submit'])){
            $to = "uniqstudio@gmail.com"; // this is your Email address
            $from = $_POST['email']; // this is the sender's Email address
            $first_name = $_POST['first_name'];
            $last_name = $_POST['last_name'];
            $subject = "Form submission";
            $subject2 = "Copy of your form submission";
            $message = $first_name . " " . $last_name . " wrote the following:" . "\n\n" . $_POST['message'];
            $message2 = "Hi " . $first_name . "\n\n" . $_POST['message'];
        
            $headers = "From:" . $from;
            $headers2 = "From:" . $to;
            mail($to,$subject,$message,$headers);
            mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
            echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
            // You can also use header('Location: thank_you.php'); to redirect to another page.
            }

            ?>

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
                <script>
                        document.addEventListener('DOMContentLoaded', function() {
                                var elems = document.querySelectorAll('.sidenav', '.social-media');
                                var options = document.querySelectorAll('nav-wrapper');
                                var instances = M.Sidenav.init(elems, options);
                            });   
                </script>    
                
            <section class="gray-background">
                <section id="section-contact">
                    <!-- ROW 1 !-->
                    <div class="row">
                        <div class="col s12">
                            <h1>Get In Touch</h1>
                            <p>For more detailed information, quotes, or questions please leave us a message.</p>
                        </div>
                    </div>
                </section>

                <!-- SECTION FORM!-->
                <section id="section-form">
                    <!-- ROW 1!-->
                        <div class="row">
                            <form action="" method="post" class="col s10">
                                <div class="row">
                                    <div class="input-field col s6">
                                        <input placeholder=" " name="first_name" id="first_name" type="text" class="validate">
                                        <label for="first_name">First Name</label>
                                    </div>
                                    <div class="input-field col s6">
                                            <input placeholder=" " name="last_name" id="last_name" type="text" class="validate">
                                            <label for="last_name">Last Name</label>
                                    </div>
                                </div>
                            <!-- ROW 2!-->
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input placeholder=" " name="email" id="email" type="email" class="validate">
                                        <label for="email">Email</label>
                                    </div>
                                </div>
                            <!-- ROW 3!-->
                                <div class="row">
                                        <div class="input-field col s6">
                                            <i class="material-icons prefix">mode_edit</i>
                                               <br> <br>
                                               <textarea id="icon_prefix2" class="materialize-textarea" name="message"></textarea>  <br>                                        
                                        </div>
                                </div>
                                <input type="submit" name="submit" value="Submit"> 
                            </form>
                    </div>
                </section>
            </section>
               <?php include 'template/footer.php';?>
              
    </body>
</html>