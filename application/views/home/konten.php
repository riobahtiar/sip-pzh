<div class="container">
<div class="head-top"><img src="<?php echo base_url() ?>assetx/img/logo_pzh.png"  class="img-responsive gambar-headerku" alt="Responsive image"></div>


</div>


<div class="container container-bg">

<div class="col-xs-9">

<div class="panel panel-default  bg-conten">
 <div id="carousel-example-generic" class="carousel slide">
  <!-- Indicators -->


  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="<?php echo base_url() ?>assetx/img/1.jpg" alt="satu" class="img-responsive" alt="Responsive image">
      
    </div>
    <div class="item">
      <img src="<?php echo base_url() ?>assetx/img/2.jpg" alt="dua" class="img-responsive" alt="Responsive image">
      
    </div>
    <div class="item">
      <img src="<?php echo base_url() ?>assetx/img/3.jpg" alt="Tiga" class="img-responsive" alt="Responsive image">
    </div>
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
    <span class="icon-prev"></span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
    <span class="icon-next"></span>
  </a>
</div>
<!--end of slider carouser-->

</div>


<div class="panel panel-primary">
<div class="panel-heading" id="border-orange-bawah"><i class="fa fa-star fa-spin" ><a href="/localhost"></a> </i> &nbsp;&nbsp;<b>Pengumuman Terbaru </b><span class="pull-right"><b><i class="fa fa-folder"></i> Arsip</b></span></div>
  <div class="panel-body">
    <?php foreach ($homes as $hm): ?>
    <div class="bs-callout bs-callout-info">
      <h4><?php echo $hm->judul_pengumuman;?></h4>
            <h5><span class="label label-pengumuman"><span class="fa fa-bookmark-o"></span>  Kategori </span><span class="label label-pengumuman-samping"><?php echo $hm->nkat2;?></span></h5>
    </div>
    <?php endforeach; ?>  
</div><center><?php echo $halaman;?></center></div>




</div>
<!--Col-lg-3-->
<div class="col-xs-3">
<!--Widget 1 -->
<div class="list-group ">
  <a href="#" class="list-group-item panel-head1">
    <img src="<?php echo base_url() ?>assetx/img/quick.png" alt="QuickLink" width="242">
  </a>
  <a href="#" class="list-group-item">
    <h4 class="list-group-item-heading"><span class="fa fa-user"></span>&nbsp;&nbsp;<b>Santri Baru</b></h4>
    <p class="list-group-item-text">Pengumuman, Informasi Syarat, Ketentuan dan Biaya Pendaftaran</p>
  </a>
  <a href="#" class="list-group-item">
    <h4 class="list-group-item-heading"><span class="fa fa-group"></span>&nbsp;&nbsp;<b>Wali Santri</b></h4></h4>
    <p class="list-group-item-text">Informasi Seputar Kegiatan Santri, Pengumuman dan Informasi Lainnya</p>
  </a>
  <a href="#" class="list-group-item">
    <h4 class="list-group-item-heading"><span class="fa fa-sitemap"></span>&nbsp;&nbsp;<b>Staff Pesantren</b></h4>
    <p class="list-group-item-text">Informasi dan Pengumuman Terbaru untuk Pengurus Pesantren Zainul Hasan</p>
  </a>
  <a href="#" class="list-group-item">
    <h4 class="list-group-item-heading"><span class="fa fa-smile-o"></span>&nbsp;&nbsp;<b>Guru dan Staff Sekolah</b></h4>
    <p class="list-group-item-text">Pendaftaran, Informasi Event dan Hal Penting Lainnya</p>
  </a>
</div>
<!--Widget 2 -->
<div class="panel panel-primary">
  <div class="panel-heading" id="border-orange-bawah"> <i class="fa fa-external-link"></i>&nbsp;&nbsp; <b>Tetap Terhubung</b></div>

  
<div class="list-group ">
  <a href="#" class="btn custom-font-widget2">
    <h4 class="list-group-item-heading"><span class="fa fa-facebook-square"></span>&nbsp;&nbsp;<b>Facebook</b></h4>
  </a><br>
  <a href="#" class="btn">
    <h4 class="list-group-item-heading"><span class="fa fa-twitter-square"></span>&nbsp;&nbsp;<b>Twitter</b></h4></h4>
  </a><br>
  <a href="#" class="btn">
    <h4 class="list-group-item-heading"><span class="fa fa-linkedin-square"></span>&nbsp;&nbsp;<b>LinkedIn</b></h4>
  </a><br>
  <a href="#" class="btn">
    <h4 class="list-group-item-heading"><span class="fa fa-youtube-square"></span>&nbsp;&nbsp;<b>Youtube</b></h4>
  </a><br>
  <a href="#" class="btn">
    <h4 class="list-group-item-heading"><span class="fa fa-flickr"></span>&nbsp;&nbsp;<b>Flickr</b></h4>
  </a><br>
  <a href="#" class="btn">
    <h4 class="list-group-item-heading"><span class="fa fa-foursquare"></span>&nbsp;&nbsp;<b>Foursquare</b></h4>
  </a><br>
  <a href="#" class="btn">
    <h4 class="list-group-item-heading"><span class="fa fa-quote-left"></span>&nbsp;&nbsp;<b>Official Blog</b></h4>
  </a><br>
</div>


</div>
<!--Widget 4 -->
<div class="panel panel-primary">
  <div class="panel-heading" id="border-orange-bawah">Follow Kami di Twitter</div>

  <div class="panel-body">
    
      <a class="twitter-timeline" data-dnt="true" href="https://twitter.com/pzhgenggong"  data-widget-id="347122255291113472"  data-chrome="nofooter transparent noheader noscrollbar" >Tweets by @pzhgenggong</a>
      <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
      

  </div>
</div>

</div>

</div><br><br>