<div class="panel-footer bg-footer">

<div class="container text-muted">

	<div class="col-xs-3">
<img src="assetx/img/ban.png">

    </div>
    <div class="col-xs-3 fok">
      <strong class="text-warning"><span class="fa fa-external-link-square">&nbsp;</span>&nbsp;Link Sekolah</strong><br>
       <?php foreach ($links_sch as $sch): ?>
  <span class="fa fa-circle-o"></span>&nbsp;<a href="<?php echo $sch->link ?>" title="<?php echo $sch->nama_lengkap ?>" target="_blank"><?php echo $sch->text_link ?></a><br>
       <?php endforeach; ?>
    </div>
    <div class="col-xs-3">
  <strong class="text-warning"><span class="fa fa-external-link-square">&nbsp;</span>&nbsp;Link Kampus</strong><br>
  <?php foreach ($links_pt as $pt): ?>
  <span class="fa fa-circle-o"></span>&nbsp;<a href="<?php echo $pt->link ?>" title="<?php echo $pt->nama_lengkap ?>" target="_blank"><?php echo $pt->text_link ?></a><br>
  <?php endforeach; ?>
    </div>
    <div class="col-xs-3">
    <h4 class="text-warning"><b><span class="fa fa-2x fa-map-marker">&nbsp;</span>&nbsp;<i>Kantor Pusat</i></b></h4>
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

    </div>
</div>

</div>
<div class="text-center text-muted">Best Resolution in 1026x768px</div>
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
