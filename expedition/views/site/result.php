<?php

/* @var $this yii\web\View */

$this->title = 'Expedition on Budget';
?>

<!-- start section result -->
<div id="result" class="text-left paddsection">

<div class="container">
  <div class="section-title text-center">
    <h2>Result</h2>
  </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
              <h3 class="box-title">Hasil Fuzzy</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Nomor</th>
                  <th>Ekspedisi</th>
                  <th>Jenis</th>
                  <th>Tarif</th>
                  <th>Durasi</th>
                </tr>
                </thead>
                <tbody>
                <?php 
                  $nmr = 1;
                  foreach($data as $result) { ?>
                  <tr>
                    <td><?=$nmr++?></td>
                    <td><?=$result['ekspedisi']?></td>
                    <td><?=$result['jenis']?></td>
                    <td>Rp <?=number_format($result['tarif'], 2, ',', '.')?></td>
                    <td><?=$result['durasi']?> Hari</td>
                  </tr>
                <?php } ?>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
        </div>
    </div>
</div>

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