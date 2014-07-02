<!DOCTYPE html>
<html lang="en">

    <head>
        <?php include_once "\partials\_Head.php"; ?>
        <link href="css/halfslider.css" rel="stylesheet">
    </head>

    <body>

        <?php include_once '\partials\_MainMenu.php'; ?>
    
        
        
        <div class="container">

            
            <div id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <div class="fill" style="background-image:url('assets/images/softUni-slide1.png');"></div>
                <div class="carousel-caption">
                    <h1>A Full-Width Image Slider Template</h1>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('http://placehold.it/1900x1080&text=Slide Two');"></div>
                <div class="carousel-caption">
                    <h1>Caption 2</h1>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('http://placehold.it/1900x1080&text=Slide Three');"></div>
                <div class="carousel-caption">
                    <h1>Caption 3</h1>
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>
    </div>
            
            <div class="row">
                <div class="col-lg-8">
                    <img class="img-responsive img-rounded" src="assets/images/softuni_header.jpg">
                </div>
                <div class="col-lg-4">
                    <h1>Softuni нинджи</h1>
                    <p>
                        Този сайт е направен за една отборна работа дадена от Софтуерния университет.
                        Той е с хумористичен характер и едно от главните изисквания е да се използват
                        responsive дизайн.
                    </p>
                </div>
            </div>

            <hr>

            <div class="row">
                <div class="col-lg-12">
                    <div class="well text-center">
                        Microsoft искат да преименуват "Cancel" бутона на "Махай се гад мръсна!",но все още чакат позволение от Светлин Наков.
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-lg-4">
                    <img class="img-circle img-responsive text-center" src="assets/images/technologies.png">
                    <h2>Използвани технологии</h2>
                    <p>
                    <ul>
                        <li>
                            Version control - Git
                        </li>
                        <li>
                            Task manager - Kanban
                        </li>
                        <li>
                            Shared documents - Google docs
                        </li>
                        <li>
                            CSS frameworks - Bootstrap
                        </li>
                    </ul>
                    </p>
                </div>
                <div class="col-lg-4">
                    <img class="img-circle img-responsive" src="assets/images/team.jpg">
                    <h2>Участници</h2>
                    <p>
                    <ul>
                        <li>
                            Martin Tsekov
                            (m4r71n85)
                        </li>
                        <li>
                            Nikolay Penev
                            (nyker)
                        </li>
                        <li>
                            Stefan Angelov
                            (cefothe)
                        </li>
                        <li>
                            Georgi Mitov
                            (georgim)
                        </li>
                        <li>
                            Kaloyan Stoyanov
                            (scinetic)
                        </li>
                        <li>
                            zkalev
                            (zkalev)
                        </li>
                    </ul>
                    </p>
                </div>
                <div class="col-lg-4">
                    <img class="img-circle img-responsive" src="assets/images/softUni.png">
                    <h2>За Softuni</h2>
                    <p>
                        Учебният план, по който се провеждат занятията в Софтуерния университет, се състои от няколко нива – едно подготвително ниво за приемния изпит (2 месеца) и 6 нива обучение по програмиране, технологии и разработка на софтуер (всяко по 4 месеца)...
                    </p>
                    <a class="btn btn-default" href="https://softuni.bg">Към сайта...</a>
                </div>
            </div>


        </div>

        <footer>
            <?php include_once "\partials\_Footer.php"; ?>
        </footer>

        <script src="js/jquery-1.10.2.js"></script>
        <script src="js/bootstrap.js"></script>

    </body>

</html>
<script>
    $(document).ready(function(){
        $("#myCarousel").carousel();
    });
</script>