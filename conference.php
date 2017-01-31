<!DOCTYPE html>
<html>

<head>
    <title>MUNOM 2017 - Committees & Topics</title>
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
                        <h3 id="headingblack">Committees & Topics</h3> </div>
                </div>
            </section>
    <!--Below this is phone only-->
            <div id="menu_phone">
                <a id="GAlink" href="Committees/GA.php">
                    <div id="GAswag">
                        <section id="GAjumbo" class="jumbotron">
                            <div class="container">
                                <div class="row text-center">
                                    <h1 id="committeename">General Assembly</h1> </div>
                            </div>
                        </section>
                    </div>
                </a>
                <a id="GAlink" href="Committees/ECOSOC.php">
                    <div id="ECOSOCswag">
                        <section id="GAjumbo" class="jumbotron">
                            <div class="container">
                                <div class="row text-center">
                                    <h1 id="committeename">ECOSOC</h1> </div>
                            </div>
                        </section>
                    </div>
                </a>
                <a id="GAlink" href="Committees/SC.php">
                    <div id="SCswag">
                        <section id="GAjumbo" class="jumbotron">
                            <div class="container">
                                <div class="row text-center">
                                    <h1 id="committeename">Security Council</h1> </div>
                            </div>
                        </section>
                    </div>
                </a>
            </div>
    
    
    <!--Above here is for phone, below for computers-->
    
    
            <div id="slidey" class="slider">
                <a id="GA" class="GA1 committee active-slide" href="Committees/GA.php">
                    <div id="com_jumbo" class="com_jumbo_back jumbotron">
                        <div class="container">
                            <div class="row text-center">
                                <h1 id="committeename">General Assembly</h1> </div>
                        </div>
                    </div>
                </a>
                <a id="ECOSOC" class="ECOSOC1 committee" href="Committees/ECOSOC.php">
                    <div id="com_jumbo2" class="com_jumbo_back jumbotron">
                        <div class="container">
                            <div class="row text-center">
                                <h1 id="committeename">ECOSOC</h1> </div>
                        </div>
                    </div>
                </a>
                <a id="SC" class="SC1 committee" href="Committees/SC.php">
                    <div id="com_jumbo3" class="com_jumbo_back jumbotron">
                        <div class="container">
                            <div class="row text-center">
                                <h1 id="committeename">Security Council</h1> </div>
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
                </ul>
                <a href="#" class="arrow-next"><img src="http://s3.amazonaws.com/codecademy-content/courses/ltp2/img/flipboard/arrow-next.png"></a>
            </div>
            <?php include("scripts.html");?>
            <script src="conference_menu.js"></script>
    
            <div id="coolmenufooter">
                <?php include("footer.html");?>
            </div>
</body>

</html>