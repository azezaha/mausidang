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
        <form role="form" action="<?=\Yii::$app->homeUrl;?>site/result" method="post">
        <div class="form-group">
          <label>Origin</label>
          <select name="origin" class="form-control select2" style="width: 100%;">
            <?php foreach ($kota as $key) { ?> 
              <option value="<?=$key['city_id']?>" > <?=$key['city_name']?></option>
            <?php } ?>
          </select>
        </div>
        <!-- /.form-group -->
        <div class="form-group">
          <label>Destination</label>
          <select name="destination" class="form-control select2" style="width: 100%;">
            <?php foreach ($kota as $key) { ?> 
              <option value="<?=$key['city_id']?>" > <?=$key['city_name']?></option>
            <?php } ?>
          </select>
        </div>
        <!-- /.form-group -->
        <div class="form-group">
        <label>Weight</label>
          <input name="weight" type="number" class="form-control input" placeholder="dalam gram" data-rule="required" data-msg="Harus diisi" />
          <div class="validation"></div>
        </div>
        <!-- /.form-group -->
        <div class="form-group text-center">
          <input type="submit" class="btn btn-defeault btn-send" value="Check">
        </div>
      </div>
      </form>
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

<div class="container">
  <div class="journal-block">
    <div class="row">
      <div class="col-lg-4 col-md-4">
        <div class="journal-info">

          <a href="profile-page.html"><img src="<?=Yii::$app->homeUrl?>web/images/jne.jpg" class="img-responsive" alt="img"></a>

          <div class="journal-txt">

            <h4><a href="profile-page.html">TiKi</a></h4>
            <p class="separator">Profil JNE
            </p>

          </div>

        </div>
      </div>

      <div class="col-lg-4 col-md-4">
        <div class="journal-info">

          <a href="profile-page.html"><img src="<?=Yii::$app->homeUrl?>web/images/tiki.jpg" class="img-responsive" alt="img"></a>

          <div class="journal-txt">

            <h4><a href="#blog-single.html">JNE</a></h4>
            <p class="separator">Profil TiKi
            </p>

          </div>

        </div>
      </div>

      <div class="col-lg-4 col-md-4">
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