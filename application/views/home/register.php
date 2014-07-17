<div class="container">
<div class="head-top"><img src="<?php echo base_url() ?>assetx/img/logo_pzh.png"  class="img-responsive gambar-headerku" alt="Responsive image"></div>
</div>
<div class="container container-bg">
<center><h2>Pendaftaran Santri Baru<small> Tahun Ajaran 2014</small></h2></center><hr><p>* Wajib Di Isi</p>
<div class="row">

<?php echo form_open('santri_daftar'); ?>
<div class="col-lg-6">
<!--panel awal-->
<div class="panel panel-primary">
<div class="panel-body">
  <div class="form-group">
    <label for="nama_lengkap">Nama Lengkap *</label>
    <?php echo form_error('nama_lengkap'); ?>
    <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" placeholder="ex: Muhammad Naufal Bahtiar" value="<?php echo set_value('nama_lengkap'); ?>">
  </div>
  <div class="form-group">
    <label for="nama_panggilan">Nama Panggilan</label>
    <input type="text" class="form-control" id="nama_panggilan" name="nama_panggilan" placeholder="ex: Rio" value="<?php echo set_value('nama_panggilan'); ?>">
  </div>
  <div class="form-group">
    <label for="tempat_lahir">Tempat Lahir *</label>
    <?php echo form_error('tempat_lahir'); ?>
    <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" placeholder="ex: Jember" value="<?php echo set_value('tempat_lahir'); ?>">
  </div>
  <div class="form-group">
    <label for="tanggal_lahir">Tanggal Lahir *</label>
    <?php echo form_error('tanggal_lahir'); ?>
    <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" placeholder="ex: 21-01-1991" value="<?php echo set_value('tanggal_lahir'); ?>">
  </div>
  <div class="form-group">
    <label for="kelamin">Jenis Kelamin *</label>
    <?php echo form_error('kelamin'); ?>
   	<select class="form-control" id="kelamin" name="kelamin" value="<?php echo set_value('kelamin'); ?>">
  <option value="Pria">Pria</option>
  <option value="Wanita">Wanita</option>
	</select>
  </div>
    <div class="form-group">
    <label for="catatan_kesehatan">Catatan Kesehatan</label>
    <?php echo form_error('catatan_kesehatan'); ?>
    <textarea name="catatan_kesehatan" class="form-control" id="catatan_kesehatan" placeholder="Berisi tentang histori riwayat kesehatan, sebutkan penyakit diderita atau jika tidak ada dapat dikosongkan atau di tulis Sehat" value="<?php echo set_value('catatan_kesehatan'); ?>"></textarea>
  </div>
  <div class="form-group">
    <label for="warga_negara">Warga Negara *</label>
    <?php echo form_error('warga_negara'); ?>
<select class="form-control" id="warga_negara" name="warga_negara" value="<?php echo set_value('warga_negara'); ?>">
  <option value="WNI">Warga Negara Indonesia</option>
  <option value="WNA">Warga Negara Asing</option>
	</select>  </div>
  <div class="form-group">
    <label for="alamat">Alamat *</label>
    <?php echo form_error('Alamat'); ?>
    <textarea name="alamat" class="form-control" id="alamat" placeholder="ex: JL. Raya Gunung Raung, , No 21, RT:01 RW:09 Sumber Wringin" value="<?php echo set_value('alamat'); ?>"></textarea>
  </div>
  <div class="form-group">
    <label for="provinsi">Provinsi </label>
<select class="form-control" id="provinsi" name="provinsi" value="<?php echo set_value('provinsi'); ?>">

	</select>  </div>

      <div class="form-group">
    <label for="kode_pos">Kode Pos</label>
    <input type="text" class="form-control" id="kode_pos" name="kode_pos" placeholder="ex: 68287" value="<?php echo set_value('kode_pos'); ?>">
 </div>
       <div class="form-group">
    <label for="pendidikan_terakhir">Pendidikan Terakhir *</label>
    <?php echo form_error('pendidikan_terakhir'); ?>
<select class="form-control" id="pendidikan_terakhir" name="pendidikan_terakhir" value="<?php echo set_value('pendidikan_terakhir'); ?>">
  <option value="WNI">SD/MI</option>
  <option value="WNA">SMP/Mts</option>
  <option value="WNA">SMA/MA</option>
  <option value="WNA">S1/D3</option>
  <option value="WNA">Lainnya</option>
	</select>  </div>
          <div class="form-group">
    <label for="tahun_lulus">Tahun Lulus *</label>
    <?php echo form_error('tahun_lulus'); ?>
    <input type="text" class="form-control" id="tahun_lulus" name="tahun_lulus" placeholder="ex: 2010" value="<?php echo set_value('tahun_lulus'); ?>">
 </div>
</div></div><!--end panel-->      
</div><!--col4-1-->
<div class="col-lg-6">
<!--panel awal-->
<div class="panel panel-primary">
<div class="panel-body">
 <div class="form-group">
    <label for="sekolah_asal">Sekolah Asal **</label>
    <?php echo form_error('sekolah_asal'); ?>
    <input type="text" class="form-control" id="sekolah_asal" name="sekolah_asal" placeholder="ex: SMP Negri 1 Bondowoso" value="<?php echo set_value('sekolah_asal'); ?>">
 </div>
        <div class="form-group">
    <label for="alamat_sekolah">Alamat Sekolah **</label>
    <textarea name="alamat_sekolah" class="form-control" id="alamat_sekolah" placeholder="ex: Jl. Tanggerang, No 25, Tanggerang, Bondowoso, Jawa Timur 68287" value="<?php echo set_value('alamat_sekolah'); ?>"></textarea>
 </div>
  <div class="form-group">
    <label for="nama_wali">Nama Wali/Ayah *</label>
    <?php echo form_error('nama_wali'); ?>
    <input type="text" class="form-control" id="nama_wali" name="nama_wali" placeholder="ex: Rio Bahtiar" value="<?php echo set_value('nama_wali'); ?>">
  </div>
  <div class="form-group">
    <label for="pekerjaan_wali">Pekerjaan Wali *</label>
    <?php echo form_error('pekerjaan_wali'); ?>
    <input type="text" class="form-control" id="pekerjaan_wali" name="pekerjaan_wali" placeholder="ex: Pengusaha" value="<?php echo set_value('pekerjaan_wali'); ?>">
  </div>
  <div class="form-group">
    <label for="kontak_wali">Kontak Wali *</label>
    <?php echo form_error('kontak_wali'); ?>
    <input type="text" class="form-control" id="kontak_wali" name="kontak_wali" placeholder="ex: 081515933306" value="<?php echo set_value('kontak_wali'); ?>">
  </div>
  <div class="form-group">
    <label for="alamat_wali">Alamat Wali *</label>
    <?php echo form_error('alamat_wali'); ?>
    <textarea name="alamat_wali" class="form-control" id="alamat_wali" placeholder="ex: Jl. Nusa Indah, No 25, Tanggerang, Bondowoso, Jawa Timur 68287" value="<?php echo set_value('alamat_wali'); ?>"></textarea>
  </div>
  <div class="form-group">
    <label for="nama_ibu">Nama Ibu *</label>
    <input type="text" class="form-control" id="nama_ibu" name="nama_ibu" placeholder="ex: Suci Azzahra" value="<?php echo set_value('nama_ibu'); ?>">
  </div>
  <div class="form-group">
    <label for="pekerjaan_ibu">Pekerjaan Ibu</label>
    <input type="text" class="form-control" id="pekerjaan_ibu" name="pekerjaan_ibu" placeholder="ex: Guru" value="<?php echo set_value('pekerjaan_ibu'); ?>">
  </div>
  <div class="form-group">
    <label for="kontak_ibu">Kontak Ibu</label>
    <input type="text" class="form-control" id="kontak_ibu" name="kontak_ibu" placeholder="ex: 081515933300" value="<?php echo set_value('kontak_ibu'); ?>">
  </div>
  <div class="form-group">
    <label for="alamat_ibu">Alamat Wali</label>
    <textarea name="alamat_ibu" class="form-control" id="alamat_ibu" placeholder="ex: Jl. Nusa Indah, No 25, Tanggerang, Bondowoso, Jawa Timur 68287" value="<?php echo set_value('alamat_ibu'); ?>"></textarea>
  </div>
    <div class="form-group">
    <label for="email">Email *</label>
    <?php echo form_error('email'); ?>
    <input type="text" class="form-control" id="email" name="email" placeholder="ex: rio_codeops@live.com" value="<?php echo set_value('email'); ?>">
  </div>
  <div class="form-group">
    Dengan Menekan Tombol Submit Ini Saya Telah Menyatakan Tunduk Terhadap Qonun Asasi Yang Berlaku di Pesantren Zainul Hasan Genggong, Dan Akan Mengikuti Semua Tahapan Pendaftaran dengan Jujur dan Amanah</div><br>
  <input name="Submit" type="submit" class="btn btn-lg btn-info" value="Daftarkan Saya" id="Submit">&nbsp;
<input name="Reset" type="reset" class="btn btn-lg btn-danger" value="Reset">
</div></div><!--end panel-->
</div><!--col6-2-->
</div><!--End Row-->
</div><br>
<!-- Modal 3-->
<div class="modal fade" id="empat" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Pendaftaran Sukses</h4>
      </div>
      <div class="modal-body">Pendaftar yang terhormat Data Anda Telah Tersimpan di Server Kami,    <hr>
<p>No Registrasi Anda Adalah : <b>20072014</b> Dengan Nomer Refrensi : <b>100389</b></p>
<hr> Simpan Baik-baik Nomer Refrensi dan Registrasi Anda, Data di Atas digunakan untuk melakukan konfirmasi dan pelengkapan data<br>
*Kami juga telah mengirimkan data ini alamat email info@rio.my.id, Jika anda tidak menerima pesan email dari kami silahkan periksa kota spam email anda. Adapaun untuk informasi lengkapnya, anda dapat menguhubungi kami melalui kontak yang telah disediakan, Terima Kasih
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div>