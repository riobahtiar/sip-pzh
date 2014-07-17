<div class="panel-footer bg-footer">

<div class="container text-muted">

	<div class="col-xs-3 fok">
 <h4 class="text-warning"><span class="fa fa-group fa-2x">&nbsp;</span>&nbsp;<i><b>Link Pondok Cabang</b></i></h4>
  <?php foreach ($links_pondok as $pondok): ?>
  <span class="fa fa-chevron-right"></span>&nbsp;<a href="<?php echo $pondok->website ?>" title="<?php echo $pondok->nama ?>" target="_blank"><?php echo $pondok->nama ?></a><br>
  <?php endforeach; ?>

    </div>
    <div class="col-xs-3 fok">
       <h4 class="text-warning"><span class="fa fa-building fa-2x">&nbsp;</span>&nbsp;<i><b>Link Sekolah</b></i></h4>
       <?php foreach ($links_sch as $sch): ?>
  <span class="fa fa-chevron-right"></span>&nbsp;<a href="<?php echo $sch->website ?>" title="<?php echo $sch->nama ?>" target="_blank"><?php echo $sch->nama ?></a><br>
       <?php endforeach; ?>
    </div>
    <div class="col-xs-3 fok">
  <h4 class="text-warning"><span class="fa fa-building fa-2x">&nbsp;</span>&nbsp;<b><i>Link Kampus</i></b></strong></h4>
  <?php foreach ($links_pt as $pt): ?>
  <span class="fa fa-chevron-right"></span>&nbsp;<a href="<?php echo $pt->website ?>" title="<?php echo $pt->nama ?>" target="_blank"><?php echo $pt->nama ?></a><br>
  <?php endforeach; ?>
    </div>
    <div class="col-xs-3">
    <h4 class="text-warning"><span class="fa fa-2x fa-map-marker">&nbsp;</span>&nbsp;<b><i>Kantor Pusat</i></b></h4>
<address>
  <strong>Pesantren Zainul Hasan Genggong</strong><br>
  Kantor PIP, Lt.1 Pajarakan, Probolinggo<br>
  Jawa Timur, 94107<br>

  <strong class="text-warning"><span class="fa fa-flag">&nbsp;</span>&nbsp;Kontak</strong><br>
  <span class="fa fa-phone-square"></span>&nbsp;(0332) 092-233&nbsp;<span class="label">Pondok Putra</span><br>
  <span class="fa fa-phone-square"></span>&nbsp;(0332) 092-233&nbsp;<span class="label">Pondok Putri</span><br>
  <span class="fa fa-phone-square"></span>&nbsp;(0332) 092-233&nbsp;<span class="label">Faximile</span><br>
  <span class="fa fa-envelope"></span>&nbsp; info@pzhgenggong.or.id<br>
  </address>
<a href="https://twitter.com/pzhgenggong" class="twitter-follow-button" data-show-count="true" data-lang="id">Follow @pzhgenggong</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
    </div>
</div>
<div class="text-center text-muted"><hr>Best Resolution in 1026x768px</div>
</div>

<![endif]>

<!--[if IE ]>


<div class="warning-ie">Maaf Website Ini Tidak Mendukung Browser Anda. Kami Merekomendasikan Anda Menggunakan Browser Mozilla Firefox, Google Chrome/Chromium, Apple Safari Atau Opera Browser,<br> Kunjungi Website <b><a href="http://browsehappy.com/">BrowseHappy.com</a></b> untuk mendapatkan informasi seputar browser terbaik yang dapat anda gunakan</div>
<![endif]-->
<!--biar kenceng loadnya -->
<script src="<?php echo base_url() ?>assetx/js/jquery-1.10.2.min.js"></script>
<script src="<?php echo base_url() ?>assetx/js/bootstrap.min.js"></script>
<script src="<?php echo base_url() ?>assetx/js/jquery-migrate-1.2.1.min.js"></script>
<script src="<?php echo base_url() ?>assetx/js/Chart.js"></script>
</body>
</html>
