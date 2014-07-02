<div class="footer">
    <div class="container">
        <div class="row">

            <div class="col-md-8">
                <div id="map_canvas"></div>
            </div>

            <div class="col-md-4">
                <section class="footer-text">
                    <h2>Намерете ни</h2>
                    <address>
                        <strong>
                            София, кв. Хаджи Димитър, ул. "Васил Кънчев" 26,<br>
                            Бизнес център "Стефан Караджа", вх. Д, етаж 4<br>
                        </strong>
                        <span>Работно време:</span> 10:00 - 18:00 (понеделник - петък)<br>
                        <span>Телефон:</span>+359 899 55 55 92<br>
                        <span>Пощенски код:</span> 1510<br>
                        <span>E-mail:</span>
                        <span>
                            <a href="mailto:info@softuni.bg">info@softuni.bg</a>
                        </span>
                    </address>
                    <ul class="share">
                        <li class="facebook"><a href="https://www.facebook.com/SoftwareUniversity"></a></li>
                        <li class="twitter"><a href="https://twitter.com/softunibg"></a></li>
                        <li class="google"><a href="https://plus.google.com/+SoftuniBg/posts"></a></li>
                    </ul>
                    <div class="right">
                        <a href="http://css-validator.org/check/referer" target="_blank" >
                            <img style="border:0;width:88px;height:31px"
                                 src="http://css-validator.org/images/vcss-blue.png"
                                 alt="Valid CSS!"/>
                        </a>
                        <a target="_blank" href="http://validator.w3.org/check?uri=http://<?php echo $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] ?>">
                            <img alt="banner-html" src="assets/images/w3c-valid-html5.png" />
                        </a>
                    </div>
                </section>
            </div>
        </div>
    </div>
</div>

<script src="https://maps.googleapis.com/maps/api/js" type='text/javascript'></script>
<script type='text/javascript'>
    function initialize() {
        var map_canvas = document.getElementById('map_canvas');
        var map_options = {
            center: new google.maps.LatLng(42.709714, 23.356242),
            zoom: 16,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        };
        var map = new google.maps.Map(map_canvas, map_options);
        var marker2 = new google.maps.Marker({
            position: new google.maps.LatLng(42.709714, 23.356242),
            map: map
        });
    }

    google.maps.event.addDomListener(window, 'load', initialize);
</script>