<!DOCTYPE html>
<html>
    <head>
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <!-- <script async src="https://www.googletagmanager.com/gtag/js?id=UA-172909379-1"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'UA-172909379-1');
        </script> -->


        <title>Pixellabbet - Kontakt</title>

        <link rel="stylesheet" href="./style.css">
        <link rel="icon" href="./images/Logo.svg">
        <meta charset="utf-8">
        <meta name="description" content="Professionella drönartjänster">
        <meta name="keywords" content="Drönare, Flygfoto, Ortofoto, Mäklarfoto">
        <meta name="author" content="Pixellabbet">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <header>
            <div class="center-box">
                <a href="/">
                    <img src="./images/LogoText_Låg.png" alt="" id="header-logo">
                </a>
                <nav>
                    <input id="menu-btn" type="checkbox">
                    <label for="menu-btn">
                        <span></span>
                    </label>
                    <ul>
                        <li><a href="./index.html">Hem</a></li>
                        <li><a href="./tjanster.html">Tjänster</a></li>
                        <li><a href="./teknik.html">Teknik</a></li>
                        <li><a href="./kontakt.php">Kontakt</a></li>
                    </ul>
                </nav>
            </div>
        </header>
        <main id="contact-site">
            <section id="site-header" class="site-header">
                <div class="center-box">
                    <h2>Kontakt</h2>
                    <p>Kontakta oss om du har några frågor eller idéer om hur en drönare kan hjälpa dig.</p>   
                </div>
            </section>

            <section class="row">
                <h2>Kontaktinformation</h2>
                <section class="col-5 col-s-6 contact-info">
                    <section class="clearfix">
                        <svg viewBox="0 0 24 24">
                            <path d="M6.62,10.79C8.06,13.62 10.38,15.94 13.21,17.38L15.41,15.18C15.69,14.9 16.08,14.82 16.43,14.93C17.55,15.3 18.75,15.5 20,15.5A1,1 0 0,1 21,16.5V20A1,1 0 0,1 20,21A17,17 0 0,1 3,4A1,1 0 0,1 4,3H7.5A1,1 0 0,1 8.5,4C8.5,5.25 8.7,6.45 9.07,7.57C9.18,7.92 9.1,8.31 8.82,8.59L6.62,10.79Z" />
                        </svg>  
                        <a href="tel:0728895205">072-889 52 05</a>
                    </section>
                    <section class="clearfix">
                        <svg viewBox="0 0 24 24">
                            <path d="M12,15C12.81,15 13.5,14.7 14.11,14.11C14.7,13.5 15,12.81 15,12C15,11.19 14.7,10.5 14.11,9.89C13.5,9.3 12.81,9 12,9C11.19,9 10.5,9.3 9.89,9.89C9.3,10.5 9,11.19 9,12C9,12.81 9.3,13.5 9.89,14.11C10.5,14.7 11.19,15 12,15M12,2C14.75,2 17.1,3 19.05,4.95C21,6.9 22,9.25 22,12V13.45C22,14.45 21.65,15.3 21,16C20.3,16.67 19.5,17 18.5,17C17.3,17 16.31,16.5 15.56,15.5C14.56,16.5 13.38,17 12,17C10.63,17 9.45,16.5 8.46,15.54C7.5,14.55 7,13.38 7,12C7,10.63 7.5,9.45 8.46,8.46C9.45,7.5 10.63,7 12,7C13.38,7 14.55,7.5 15.54,8.46C16.5,9.45 17,10.63 17,12V13.45C17,13.86 17.16,14.22 17.46,14.53C17.76,14.84 18.11,15 18.5,15C18.92,15 19.27,14.84 19.57,14.53C19.87,14.22 20,13.86 20,13.45V12C20,9.81 19.23,7.93 17.65,6.35C16.07,4.77 14.19,4 12,4C9.81,4 7.93,4.77 6.35,6.35C4.77,7.93 4,9.81 4,12C4,14.19 4.77,16.07 6.35,17.65C7.93,19.23 9.81,20 12,20H17V22H12C9.25,22 6.9,21 4.95,19.05C3,17.1 2,14.75 2,12C2,9.25 3,6.9 4.95,4.95C6.9,3 9.25,2 12,2Z" />
                        </svg>
                        <a href="mailto:oscar@pixellabbet.se">oscar@pixellabbet.se</a>
                    </section>
                    <section class="clearfix">
                        <svg viewBox="0 0 24 24">
                            <path d="M12,11.5A2.5,2.5 0 0,1 9.5,9A2.5,2.5 0 0,1 12,6.5A2.5,2.5 0 0,1 14.5,9A2.5,2.5 0 0,1 12,11.5M12,2A7,7 0 0,0 5,9C5,14.25 12,22 12,22C12,22 19,14.25 19,9A7,7 0 0,0 12,2Z" />
                        </svg>
                        <a href="https://g.page/Pixellabbet?share">
                            Lövhult Östregård 3 <br>
                            363 94 Lammhult
                        </a>
                    </section>
                </section>
                <section class="col-7 col-s-6 contact-form"> <!-- Contact form -->
                    <?php
                        $errors = 0;
                        $nameError = $emailError = $phoneError = $msgError = "";
                        $name = $email = $phone = $msg = "";

                        if ($_SERVER["REQUEST_METHOD"] == "POST") {
                            if (empty($_POST["name"])){
                                $nameError = "Ett namn måste anges.";
                                $errors++;
                            }else{
                                $name = test_input($_POST["name"]);
                                if (!preg_match("/^[a-zA-ZåäöÅÄÖ ]*$/",$name)) {
                                    $nameError = "Endast bokstäver och mellanslag är tillåtna.";
                                    $errors++;
                                }
                            }
                            if (empty($_POST["email"]) and empty($_POST["phone"])) {
                                $emailError = "E-postsadress eller telefonnummer måste anges.";
                                $errors++;
                            }else{
                                $email = test_input($_POST["email"]);
                                $phone = test_input($_POST["phone"]);

                                if (!empty($email) and !filter_var($email, FILTER_VALIDATE_EMAIL)) {
                                    $emailError = "Felaktigt format för e-postadressen.";
                                    $errors++;
                                }
                                if (!empty($phone) and !preg_match("/^[0-9 -]*$/",$phone)) {
                                    $phoneError = "Felaktigt format för telefonnummret.";
                                    $errors++;
                                }

                            }
                            $msg = test_input($_POST["msg"]);

                            if ($errors == 0) {

                                $message = 

                                $message = "
                                <html>
                                <head></head>
                                <body>
                                    Namn: <br>" . $name . "<br><br>
                                    E-post: <br>" . $email . "<br><br>
                                    Telefonnummer: <br>" . $phone . "<br><br>
                                    Meddelande: <br>" . $msg . "
                                </body>
                                </html>
                                ";

                                $message = wordwrap($message, 70, "\r\n");

                                $to = "oscar@pixellabbet.se";
                                $subject = "Kontaktformulär från " . $name;
                                $headers = "From: Kontaktformulär <kontakt@pixellabbet.se>" . "\r\n" .
                                "Reply-To: " . $email . "\r\n" .
                                "Content-Type:text/html;charset=utf-8" . "\r\n" .
                                "X-Mailer: PHP/" . phpversion();

                                $success = 0;
                                $success = mail($to, $subject, $message, $headers);
                                // if (!$success) {
                                //     $errorMessage = error_get_last()['message'];
                                // }
                                // echo "E-post: " . $success . "/" . $errorMessage;
                            }
                        }

                        function test_input($data) {
                            $data = trim($data);
                            $data = stripslashes($data);
                            $data = htmlspecialchars($data);
                            return $data;
                        }
                    ?>

                    <h3>Kontaktformulär</h3>
                    <?php if ($success) {echo "<p class='sent'>Ditt meddelande är nu skickat.</p>";} ?> 
                    <form class="clearfix" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
                        <p>Namn<br>
                            <input type="text" name="name" value="<?php echo $name;?>"> <br> <span class="error"><?php echo $nameError; ?></span>
                        </p>
                        <p>E-post<br>
                            <input type="text" name="email" value="<?php echo $email;?>"> <br> <span class="error"><?php echo $emailError; ?></span>
                        </p>
                        <p>Telefonnummer<br>
                            <input type="text" name="phone" value="<?php echo $phone;?>"> <br> <span class="error"><?php echo $phoneError; ?></span>
                        </p>
                        <p>Meddelande<br>
                            <textarea name="msg" rows="10"><?php echo $msg;?></textarea>
                        </p>
                        <input class="button blue solid" type="submit" value="Skicka">
                    </form>

                    <!-- <?php
                        echo "<h3>Your Input:</h3>";
                        echo $name;
                        echo "<br>";
                        echo $email;
                        echo "<br>";
                        echo $msg;
                    ?> -->
                </section>
            </section>
        </div>


        <footer>
            <h2>&copy; 2019-<script>document.write(new Date().getFullYear());</script> Pixellabbet</h2>
        </footer>
        
        <script>
            // Max 450
            function funcMax450(varMax450) {
                if (varMax450.matches) { // If media query matches
                    document.getElementById("header-logo").src = "./images/logo/logo.svg";
                } else {
                    document.getElementById("header-logo").src = "images/logo/text.png";
                }
            }
        
            var varMax450 = window.matchMedia("(max-width: 450px)")
            funcMax450(varMax450) // Call listener function at run time
            varMax450.addListener(funcMax450) // Attach listener function on state changes

            // Season image
            var path = "./images/";
            var season = "";

            var date = new Date;
            var month = date.getMonth() + 1;
            if (month <= 4 || month >= 11) {    // Vinter
                season = "vinter";
            } else if (month <=9) { // Sommer
                season = "somer";
            } else {    // Fall
                season = "fall";
            }
            
            var siteStartImgName = "site-start-img.jpg";
            var siteStartImgPath = path + season + "/" + siteStartImgName;
            document.getElementById("site-header").style.backgroundImage = 'linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("' + siteStartImgPath + '")';
        </script>
    </body>
</html>