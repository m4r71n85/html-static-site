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
                        <email>
                            <a href="mailto:info@softuni.bg">info@softuni.bg</a>
                        </email>
                    </address>
                    <ul class="share">
                        <li class="facebook"><a href="https://www.facebook.com/SoftwareUniversity"></a></li>
                        <li class="twitter"><a href="https://twitter.com/softunibg"></a></li>
                        <li class="google"><a href="https://plus.google.com/+SoftuniBg/posts"></a></li>
                    </ul>
                </section>
            </div>
        </div>
    </div>
</div>

<script src="https://maps.googleapis.com/maps/api/js" type='text/javascript'></script>
<script>
                                function initialize() {
                                    var map_canvas = document.getElementById('map_canvas');
                                    var map_options = {
                                        center: new google.maps.LatLng(42.709714, 23.356242),
                                        zoom: 16,
                                        mapTypeId: google.maps.MapTypeId.ROADMAP
                                    }
                                    var map = new google.maps.Map(map_canvas, map_options);
                                    var marker2 = new google.maps.Marker({
                                        position: new google.maps.LatLng(42.709714, 23.356242),
                                        map: map
                                    });
                                }

                                google.maps.event.addDomListener(window, 'load', initialize);
</script>