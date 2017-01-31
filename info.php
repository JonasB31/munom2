<!DOCTYPE html>
<html>

<head>
    <title>MUNOM 2017 - Information</title>
    <?php include("meta_imports.html");?>
        <?php include("imports.html");?>
            <link rel="stylesheet" type="text/css" href="header.css"> </head>

<body>
    <?php include("sidemenu.html");?>
        <div id="bodybb"></div>
        <?php include("header.html");?>
            <section id="headerjumbo" class="jumbotron">
                <div class="container">
                    <div class="row text-center">
                        <h3 id="headingblack">Everything about MUNOM 2017</h3> </div>
                </div>
            </section>
    <!--Below this is phone only-->
            <div id="menu_phone">
                <a id="GAlink" href="#">
                    <div id="Progswag">
                        <section id="GAjumbo" class="jumbotron">
                            <div class="container">
                                <div class="row text-center">
                                    <h1 id="committeename">Programme of Events</h1> </div>
                            </div>
                        </section>
                    </div>
                </a>
                <a id="GAlink" href="/mun.php">
                    <div id="delswag">
                        <section id="GAjumbo" class="jumbotron">
                            <div class="container">
                                <div class="row text-center">
                                    <h1 id="committeename">For Delegates & Newbies</h1> </div>
                            </div>
                        </section>
                    </div>
                </a>
                <a id="GAlink" href="/lunch.php">
                    <div id="foodswag">
                        <section id="GAjumbo" class="jumbotron">
                            <div class="container">
                                <div class="row text-center">
                                    <h1 id="committeename">Lunch Plan</h1> </div>
                            </div>
                        </section>
                    </div>
                </a>
                <a id="GAlink" href="/rooms.php">
                    <div id="roomswag">
                        <section id="GAjumbo" class="jumbotron">
                            <div class="container">
                                <div class="row text-center">
                                    <h1 id="committeename">Room Plan</h1> </div>
                            </div>
                        </section>
                    </div>
                </a>
            </div>
    
    
    <!--Above here is for phone, below for computers-->
    
    
            <div id="slidey" class="slider">
                <a id="GA" class="Prog1 committee active-slide" href="#">
                    <div id="com_jumbo" class="com_jumbo_noback jumbotron">
                        <div class="container">
                            <div class="row text-center">
                                <h1 id="committeename">Programme of Events</h1> </div>
                        </div>
                    </div>
                </a>
                <a id="ECOSOC" class="del committee" href="/mun.php">
                    <div id="com_jumbo2" class="com_jumbo_noback jumbotron">
                        <div class="container">
                            <div class="row text-center">
                                <h1 id="committeename">For Delegates & Newbies</h1> </div>
                        </div>
                    </div>
                </a>
                <a id="SC" class="lunch committee" href="/lunch.php">
                    <div id="com_jumbo3" class="com_jumbo_noback jumbotron">
                        <div class="container">
                            <div class="row text-center">
                                <h1 id="committeename">Lunch Plan</h1> </div>
                        </div>
                    </div>
                </a>
                <a id="Rooms" class="rooms committee" href="/rooms.php">
                    <div id="com_jumbo4" class="com_jumbo_noback jumbotron">
                        <div class="container">
                            <div class="row text-center">
                                <h1 id="committeename">Room Plan</h1> </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="slider-nav">
                <a href="#" class="arrow-prev"><img src="http://s3.amazonaws.com/codecademy-content/courses/ltp2/img/flipboard/arrow-prev.png"></a>
                <ul class="slider-dots">
                    <li class="dot active-dot">&bull;</li>
                    <li class="dot">&bull;</li>
                    <li class="dot">&bull;</li>
                    <li class="dot">&bull;</li>
                </ul>
                <a href="#" class="arrow-next"><img src="http://s3.amazonaws.com/codecademy-content/courses/ltp2/img/flipboard/arrow-next.png"></a>
            </div>
            <?php include("scripts.html");?>
            <script src="info_menu.js"></script>
    
            <div id="coolmenufooter">
                <?php include("footer.html");?>
            </div>
</body>

</html>