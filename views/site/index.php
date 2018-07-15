<?php

/* @var $this yii\web\View */

$this->title = 'Expedition on Budget';
?>
<!-- start section header -->
<div id="header" class="home">

<div class="container">
  <div class="header-content">
    <h1>We are <span class="typed"></span></h1>
  </div>
</div>
</div>
<!-- End section header -->


<!-- start section about us -->
<div id="form" class="paddsection">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-md-offset-3">
        <div class="section-title text-center">
          <h2>FORM</h2>
        </div>
        <div class="form-group">
          <label>Origin</label>
          <select class="form-control select2" style="width: 100%;">
            <option selected="selected">Alabama</option>
            <option>Alaska</option>
            <option>California</option>
            <option>Delaware</option>
            <option>Tennessee</option>
            <option>Texas</option>
            <option>Washington</option>
          </select>
        </div>
        <!-- /.form-group -->
        <div class="form-group">
          <label>Destination</label>
          <select class="form-control select2" style="width: 100%;">
            <option selected="selected">Alabama</option>
            <option>Alaska</option>
            <option>California</option>
            <option>Delaware</option>
            <option>Tennessee</option>
            <option>Texas</option>
            <option>Washington</option>
          </select>
        </div>
        <!-- /.form-group -->
        <div class="form-group">
        <label>Weight</label>
          <input type="text" class="form-control" placeholder="ex: 1000" />
        </div>
        <!-- /.form-group -->
        <div class="form-group text-center">
          <input type="submit" class="btn btn-defeault btn-send" value="Check">
          </div>
      </div>
    </div>
    <!-- /.row -->
  </div>
</div>
<!-- end section about us -->


<!-- start section map -->
<div id="map" class="text-center paddsection" style="height:500px"></div>
<!-- End section map -->

<!-- start section journal -->
<div id="portofolio" class="text-left paddsection">

<div class="container">
  <div class="section-title text-center">
    <h2>PROFIL PERUSAHAAN & TESTIMONIAL KONSUMEN</h2>
  </div>
</div>

</div>

<div class="container">
  <div class="journal-block">
    <div class="row">

      <div class="col-lg-4 col-md-6">
        <div class="journal-info">

          <a href="profile-page.html"><img src="<?=Yii::$app->homeUrl?>web/images/jne.jpg" class="img-responsive" alt="img"></a>

          <div class="journal-txt">

            <h4><a href="profile-page.html">TiKi</a></h4>
            <p class="separator">Profil JNE
            </p>

          </div>

        </div>
      </div>

      <div class="col-lg-4 col-md-6">
        <div class="journal-info">

          <a href="profile-page.html"><img src="<?=Yii::$app->homeUrl?>web/images/tiki.jpg" class="img-responsive" alt="img"></a>

          <div class="journal-txt">

            <h4><a href="#blog-single.html">JNE</a></h4>
            <p class="separator">Profil TiKi
            </p>

          </div>

        </div>
      </div>

      <div class="col-lg-4 col-md-6">
        <div class="journal-info">

          <a href="blog-single.html"><img src="<?=Yii::$app->homeUrl?>web/images/pos.jpg" class="img-responsive" alt="img"></a>

          <div class="journal-txt">

            <h4><a href="blog-single.html">POS Indonesia</a></h4>
            <p class="separator">Profil Pos Indonesia
            </p>

          </div>

        </div>
      </div>

    </div>
  </div>
</div>

</div>
<!-- End section journal -->


<!-- start sectoion contact -->
<!-- <div id="contact" class="paddsection">
<div class="container">
  <div class="contact-block1">
    <div class="row">

      <div class="col-lg-6">
        <div class="contact-contact">

          <h2 class="mb-30">GET IN TOUCH</h2>

          <ul class="contact-details">
            <li><span>23 Main, Street</span></li>
            <li><span>New York, United States</span></li>
            <li><span>+88 01912704287</span></li>
            <li><span>example@example.com</span></li>
          </ul>

        </div>
      </div>

      <div class="col-lg-6">
        <form action="" method="post" role="form" class="contactForm">
          <div class="row">

            <div id="sendmessage">Your message has been sent. Thank you!</div>
            <div id="errormessage"></div>

            <div class="col-lg-6">
              <div class="form-group contact-block1">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validation"></div>
              </div>
            </div>

            <div class="col-lg-6">
              <div class="form-group">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                <div class="validation"></div>
              </div>
            </div>

            <div class="col-lg-12">
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validation"></div>
              </div>
            </div>

            <div class="col-lg-12">
              <div class="form-group">
                <textarea class="form-control" name="message" rows="12" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                <div class="validation"></div>
              </div>
            </div>

            <div class="col-lg-12">
              <input type="submit" class="btn btn-defeault btn-send" value="Send message">
            </div>

          </div>
        </form>
      </div>
    </div>
  </div>
</div>
</div> -->
<!-- start sectoion contact -->

<script>
    var map;

    function initMap() {
        var locations = [
            <?php 
                $i = 0;
                foreach($markers as $marker) { ?>
                    ['<?=$marker['nama']?>', <?=$marker['lat']?>, <?=$marker['lng']?>, <?=$i++?>],
                <?php } ?>
        ];

        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 15,
            center: new google.maps.LatLng(-7.276495, 112.793831),
            mapTypeId: google.maps.MapTypeId.ROADMAP
        });

        var infowindow = new google.maps.InfoWindow({});

        var marker, i;

        for (i = 0; i < locations.length; i++) {
            marker = new google.maps.Marker({
                position: new google.maps.LatLng(locations[i][1], locations[i][2]),
                map: map
            });

            google.maps.event.addListener(marker, 'click', (function (marker, i) {
                return function () {
                    infowindow.setContent(locations[i][0]);
                    infowindow.open(map, marker);
                }
            })(marker, i));
        }

        // Try HTML5 geolocation.
        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function(position) {
            var pos = {
              lat: position.coords.latitude,
              lng: position.coords.longitude
            };

            infoWindow.setPosition(pos);
            infoWindow.setContent('Location found.');
            map.setCenter(pos);
          }, function() {
            handleLocationError(true, infoWindow, map.getCenter());
          });
        } else {
          // Browser doesn't support Geolocation
          handleLocationError(false, infoWindow, map.getCenter());
        }
    }

    function handleLocationError(browserHasGeolocation, infoWindow, pos) {
        infoWindow.setPosition(pos);
        infoWindow.setContent(browserHasGeolocation ?
                              'Error: The Geolocation service failed.' :
                              'Error: Your browser doesn\'t support geolocation.');
      }
</script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD0e4iutMPxYs_WOwoMDRcujusYHAww0J0&callback=initMap"></script>