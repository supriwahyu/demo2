<!--<!DOCTYPE html>
<html>
 <head>
  <title>Text</title>
 </head>
 <body>
  <marquee bgcolor="#FF8C00" height="25" width="1400" color="white">INTRUKSI MENTERI DALAM NEGERI NO.1/2020 TENTANG PENCEGAHAN PENYEBARAN DAN PERCEPATAN PENANGANAN CORONA VIRUS DISEASE 2019 DI LINGKUNGAN PEMDA
 </body>
</html>-->

<div>
	<?php include "slide.php"; ?>
</div><!-- /.container -->

<marquee style="background:yellow;color:white;" height="25" scrollamount="3" scrolldelay="5" direction="left" onmouseover="this.stop()" onmouseout="this.start()"><a target="_blank" color="#FFFFFF" href="https://ditjenbinaadwil.kemendagri.go.id/download/file/Instruksi_Menteri_Dalam_Negeri_Nomor_29_Tahun_2022.pdf">INSTRUKSI MENTERI DALAM NEGERI NOMOR 29 TAHUN 2022 TENTANG PEMBERLAKUAN PEMBATASAN KEGIATAN MASYARAKAT LEVEL 1 CORONA VIRUS DISEASE 2019 DI WILAYAH JAWA DAN BALI</a> - <a target="_blank" color="#FFFFFF" href="https://ditjenbinaadwil.kemendagri.go.id/download/file/Instruksi_Menteri_Dalam_Negeri_Nomor_30_Tahun_2022.pdf">INSTRUKSI MENTERI DALAM NEGERI NOMOR 30 TAHUN 2022 TENTANG PEMBERLAKUAN PEMBATASAN KEGIATAN MASYARAKAT LEVEL 2, DAN LEVEL 1 SERTA MENGOPTIMALKAN POSKO PENANGANAN CORONA VIRUS DISEASE 2019 DI TINGKAT DESA DAN KELURAHAN UNTUK PENGENDALIAN PENYEBARAN CORONA VIRUS DISEASE 2019 DI WILAYAH SUMATERA, NUSA TENGGARA, KALIMANTAN, SULAWESI, MALUKU, DAN PAPUA</a></marquee>


<section class="section section-no-background m-none">
	<div class="container1 animated fadeInRight" style="margin-bottom: 50px; background-image: linear-gradient(to right, #f5f5f5 , #a8a8a8);">
		<div class="row">
			
			<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 welcome padding-left-none padding-bottom-40 scroll_effect fadeInUp" >
				<h2 class="margin-bottom-25 margin-top-none" style="text-align: center; padding-top: 25px;"><b>BERITA TERBARU</b></h2>
				<div class="btmline" style="margin-bottom: 46px;"></div>
				<div style="display: flex; justify-content:center;">
					<img style="width: auto; height:50px;" src="<?php echo base_url(); ?>asset/logo/38.png">
				<p style="text-align:left; color: black; margin-left: 20px; margin-bottom: 50px;">Informasi berita terbaru dari Ditjen Bina Adwil,<br> portal resmi dan akurat</p>
				</div>
				<div id="myCarousel" class="carousel slide" data-ride="carousel">
					<ol class="carousel-indicators">
					<?php
					
					foreach ($terbaru->result_array() as $ban1){ 
						if($no == 0){
						?>
							<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
						<?php
						}else{
						?>
							<li data-target="#myCarousel" data-slide-to="<?php echo $no; ?>" class=""></li>
						<?php
						}
						$no++;
					}
					?>
					</ol>
					<!-- Wrapper for slides -->
					<div class="carousel-inner card">
					<?php
					$no = 0;
					foreach ($terbaru->result_array() as $ban2){ 
						if($no == 0){
						?>
							<div class="item active"><a href="#" target ="_blank"><img  class="max-height:100%;" src="https://cdn.statically.io/img/ditjenbinaadwil.kemendagri.go.id/f=auto,w=458/asset/foto_berita/<?php echo $ban2['gambar']; ?>" alt="<?php echo $ban2['judul'];?>" caption="false"/>
							
							<div class="carousel-caption animated fadeInLeft" style="top:73%;width:100%;">
								<span  data-animation="animated bounceInLeft" style="bottom: 30px; position: fixed; min-width: 350px;left: 20px;">
									<?php echo "<a style='color:white;' href='" . base_url() . "berita/detail/$ban2[judul_seo]'>" . $ban2['judul'] . "</a>";?>
								</span>
							</div>
							
							</a></div>
						<?php
						}else{
						?>
							<div class="item"><a href="#" target ="_blank"><img  class="max-height:100%;" src="https://cdn.statically.io/img/ditjenbinaadwil.kemendagri.go.id/f=auto,w=458/asset/foto_berita/<?php echo $ban2['gambar']; ?>" alt="<?php echo $ban2['judul']; ?>" caption="false"/>
							<div class="carousel-caption animated fadeInLeft" style="top:73%;width:100%;">
								<span data-animation="animated bounceInLeft" style="bottom: 30px; position: fixed; min-width: 350px;left: 20px;">
									<?php echo "<a style='color:white;' href='" . base_url() . "berita/detail/$ban2[judul_seo]'>" . $ban2['judul'] . "</a>";?>
								</span>
							</div>
							
							</a></div>
						<?php
						}
						$no++;
						
					}
					?>
						   
					</div>
				<!-- Left and right controls --> 
				<a class="left carousel-control" href="#myCarousel" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left"></span> <span class="sr-only">Previous</span> </a> <a class="right carousel-control" href="#myCarousel" data-slide="next"> <span class="glyphicon glyphicon-chevron-right"></span> <span class="sr-only">Next</span> </a>
			</div>
		</div>
		
		<!--<div class="col-md-3" data-wow-delay=".4s">
			<h2 class="mb-lg">PENGUMUMAN</h2>
			<?php
			 foreach ($pengumuman->result_array() as $h) {
			?>
					<div class="recent-posts">
						<article class="post">
							<p><span><i class="fa fa-volume-up"></i></span> &nbsp;<?php echo $h['info']; ?></p>
						</article>
					</div>
			<?php
			 }
			?>
		</div>-->
		
		<div class="col-md-6" data-wow-delay=".4s" style="padding-bottom: 75px;">
			<h2 id="dashboard" class="mb-lg" style="text-align: center; padding-top: 25px;"><b>DASHBOARD</b></h2>
			<div class="btmline" style="margin-bottom: 46px;"></div>
			<div style="display: flex; justify-content:center;">
					<img style="width: auto; height:50px;" src="<?php echo base_url(); ?>asset/logo/39.png">
				<p style="text-align:left; color: black; margin-left: 20px; margin-bottom: 50px;">Akses cepat berbagai layanan yang telah<br> disediakan olet Ditjen Bina Adwil</p>
				</div>
			<div class="item active"><a href="https://ditjenbinaadwil.kemendagri.go.id/download/file/flyerkeu1.pdf" target ="_blank"><img class="card2" style="width:auto; max-height: 100%; display: flex; justify-content: center;" src="https://cdn.statically.io/img/ditjenbinaadwil.kemendagri.go.id/f=auto/asset/foto_banner/flyerkeu.jpg" caption="false" title="Alun Penyelesaian Tindak Lanjut Hasil Pemeriksaan (TLHP)" alt="Alun Penyelesaian Tindak Lanjut Hasil Pemeriksaan (TLHP)"/></a>
	</div>
</section>



<div class="container animated fadeInLeft">
  <div class="row align-items-start">
  	<div class="col-lg-6 col-md-6 col-sm-12">
<div class="news-slider">
          <h2 style="text-align: center; font-size: 30px; font-weight: 300;"><b>BERITA <br>KEMENDAGRI</b></h2>
          <div class="btmline" style="margin-bottom: 46px;"></div>
          <div class="owl-carousel owl-carousel1 owl-theme">
          	<?php
			 foreach ($berita1->result_array() as $h) {
			?>
               <div>
                    <div class="card-new text-center">
                         <div class="card-img-thumb" style="background: url(https://cdn.statically.io/img/ditjenbinaadwil.kemendagri.go.id/f=auto,w=270/<?php echo "asset/foto_berita/" . $h['gambar'] ?>);
                         background-size: cover;">                                                       
                         </div>
                         <div class="card-body">
                              <!-- <div class="heading">
                              </div> -->
                               <p style="font-size: 14px;"><span><i class="fa fa-volume-up"></i></span> &nbsp;<a style="color:#777;" href="berita/detail/<?php echo $h['judul_seo']; ?>"><?php echo $h['judul']; ?></a></p>
                                   <div class="card-footer">
                                        <span style="font-size: 14px;"><i class="fa fa-calendar"></i> <?php echo $h['tanggal'] . " " . $h['jam']; ?> </span>
                                   </div>
                         </div>
                         
                    </div>

               </div>
               <?php
						 }
						?>
               </div>
           </div>
           </div>
<div class="col-lg-6 col-md-6 col-sm-12">
<div class="news-slider">
          <h2 style="font-size: 30px; font-weight: 300;"><b>BERITA DITJEN <br>BINA ADWIL</b></h2>
          <div class="btmline" style="margin-bottom: 46px;"></div>
          <div class="owl-carousel owl-carousel1 owl-theme">
          	<?php
				 foreach ($berita2->result_array() as $h) {
				?>
               <div>
                    <div class="card-new text-center">
                         <div class="card-img-thumb" style="background: url(https://cdn.statically.io/img/ditjenbinaadwil.kemendagri.go.id/f=auto,w=270/<?php echo "asset/foto_berita/" . $h['gambar'] ?>);
                         background-size: cover;">                                                       
                         </div>
                         <div class="card-body">
                              <!-- <div class="heading">
                              </div> -->
                               <p style="font-size: 14px;"><span><i class="fa fa-volume-up"></i></span> &nbsp;<a style="color:#777;" href="berita/detail/<?php echo $h['judul_seo']; ?>"><?php echo $h['judul']; ?></a></p>
                                   <div class="card-footer">
                                        <span style="font-size: 14px;"><i class="fa fa-calendar"></i> <?php echo $h['tanggal'] . " " . $h['jam']; ?> </span>
                                   </div>
                         </div>
                         
                    </div>

               </div>
               <?php
						 }
						?>
               </div>
</div>

</div>
</div>
</div>

<div style="padding-top:50px;" class="container-fluid">
  <div class="row no-gutters animated fadeInRight">
    <div class="col-lg-6 col-md-6 col-sm-12">
      <div class="jumbotron jumbotron-fluid" style="background: #183464; background-size: cover; height: 500px;">



  <div class="container text-white">

    <h1 class="display-4" style="font-size: 30px; font-weight: 300; padding-top: 150px;">INFORMASI PUBLIK</h1>
    <hr class="my-4">
    <p class="text-white" style="font-size:16px;">Undang-Undang Nomor 14 Tahun 2008, tentang Keterbukaan Informasi Publik adalah salah satu produk hukum Indonesia yang dikeluarkan pada tahun 2008 dan diundangkan pada tanggal 30 April 2008 dan mulai berlaku dua tahun setelah diundangkan</p>
    <a class="btn btn-warning btn-lg" style="color: #183464;" href="#" role="button">Selengkapnya</a>

  </div>
  <!-- /.container -->
</div>
<!-- /.jumbotron -->
    </div>
    <div class="col-lg-6 col-md-6 col-sm-12">
      <div class="jumbotron jumbotron-fluid" style="background: url(<?php echo base_url(); ?>asset/img_background/wa1.jpeg); background-size: cover; height: 500px; filter: brightness(50%);">
  </div>
  <!-- /.container -->
</div>
<!-- /.jumbotron -->
    </div>
  </div>
  <div class="row no-gutters animated fadeInRight">
    <div class="col-lg-6 col-md-6 col-sm-12">
      <div class="jumbotron jumbotron-fluid" style="background: url(<?php echo base_url(); ?>asset/img_background/wa2.jpeg); background-size: cover; height: 400px; filter: brightness(50%);">

  
  <!-- /.container -->
</div>
<!-- /.jumbotron -->
    </div>
    <div class="col-lg-6 col-md-6 col-sm-12">
      <div class="jumbotron jumbotron-fluid" class="jumbotron jumbotron-fluid" style="background: #ffc107; background-size: cover; height: 400px;">
      	<div class="container">
    <h1 class="display-4" style="color: #183464; font-size: 30px; font-weight: 300; padding-right: 15px; padding-left: 15px;">AGENDA KEGIATAN</h1>
        <hr class="my-4">
    		<?php
			 foreach ($agenda->result_array() as $h) {
			?>
			<span style="padding-right: 15px; padding-left: 15px;"><i class="fa fa-calendar"></i> <?php echo $h['tgl_mulai']; ?> </span>
    <h5 style="padding-right: 15px; padding-left: 15px;"><a href="<?php echo base_url() . "agenda/detail/" . $h['tema_seo']; ?>"><?php echo $h['tema']; ?></a></h5>

  <?php
  	}
  	?>
  </div>
  <!-- /.container -->
</div>
<!-- /.jumbotron -->
    </div>
</div>
</div>
<div class="animated fadeInLeft">
<h2 style="text-align: center; font-size: 30px; font-weight: 300; padding-top: 50px;"><b>LAYANAN</b></h2>
<div class="btmline" style="margin-bottom: 46px;"></div>

<div class="container" id="container-layanan">
  <div class="row">
    <div class="col-lg-6 col-md-6 col-sm-12">
      <div class="jumbotron jumbotron-fluid" style="background: white; background-size: cover; height: 350px;">



  <div class="container">

    <img class="img-fluid" src="<?php echo base_url(); ?>asset/logo/40.png" style="height: 100px; width: auto;">
    <hr class="my-4">
    <p class="text-black" style="font-size: 16px;">Segala bentuk jasa pelayanan, baik dalam bentuk barang publik maupun jasa publik yang pada prinsipnya menjadi tanggung jawab dan dilaksanakan oleh Instansi Pemerintah</p>
    <a class="btn btn-warning btn-lg" href="#" role="button">Selengkapnya</a>

  </div>
  <!-- /.container -->
</div>
<!-- /.jumbotron -->
    </div>
    <div class="col-lg-6 col-md-6 col-sm-12">
    	<div class="row">
		  <div class="col col-md-3" ><a href="https://kemendagri.lapor.go.id/"><img style="height: 70px; width: auto; margin: 15px;" src="<?php echo base_url(); ?>asset/logo/11.png" alt="Lapor Kemendagri" title="Lapor Kemendagri"></div></a>
		  <div class="col col-md-3"><a href="https://cloud-adwil.kemendagri.go.id/"><img style="height: 70px; width: auto; margin: 15px;" src="<?php echo base_url(); ?>asset/logo/22.png" alt=" Bank Data" title=" Bank Data"></div></a>
		  <div class="col col-md-3"><a href="https://satpolpp.kemendagri.go.id/"><img style="height: 70px; width: auto; margin: 15px;" src="<?php echo base_url(); ?>asset/logo/7.png" alt=" Aplikasi Satpol PP" title=" Aplikasi Satpol PP"></div></a>
		  <div class="col col-md-3"><a href="https://pagarspmbencana.kemendagri.go.id/"><img style="height: 70px; width: auto; margin: 15px;" src="<?php echo base_url(); ?>asset/logo/44.png" alt=" Aplikasi Pagar SPM Bencana" title=" Aplikasi Pagar SPM Bencana"></div></a>
		</div>
		<div class="row">
		  <div class="col col-md-3"><a href="https://emonev-adwil.kemendagri.go.id/"><img style="height: 70px; width: auto; margin: 15px;" src="<?php echo base_url(); ?>asset/logo/55.png" alt="Aplikasi E-Monev Adwil" title="Aplikasi E-Monev Adwil"></div></a>
		  <div class="col col-md-3"><a href="https://simpel.kemendagri.go.id/"><img style="height: 70px; width: auto; margin: 15px;" src="<?php echo base_url(); ?>asset/logo/66.png" alt=" Aplikasi Simpel " title=" Aplikasi Simpel "></div></a>
		  <div class="col col-md-3"><a href="https://trantibumlinmas.kemendagri.go.id/"><img style="height: 70px; width: auto; margin: 15px;" src="<?php echo base_url(); ?>asset/logo/77.png" alt=" Aplikasi Trantibumlinmas" title=" Aplikasi Trantibumlinmas"></div></a>
		  <div class="col col-md-3"><a href="https://simlinmas.kemendagri.go.id/management/index"><img style="height: 70px; width: auto; margin: 15px;" src="<?php echo base_url(); ?>asset/logo/88.png" alt=" Aplikasi Simlinmas" title=" Aplikasi Simlinmas"></div></a>
		</div>
		<div class="row">
		  <div class="col col-md-3"><a href="https://profilpulau.kemendagri.go.id/#"><img style="height: 70px; width: auto; margin: 15px;" src="<?php echo base_url(); ?>asset/logo/99.png" alt="Aplikasi Profil Pulau" title="Aplikasi Profil Pulau"></div></a>
		  <div class="col col-md-3"><a href="https://sipgwpp.kemendagri.go.id/"><img style="height: 70px; width: auto; margin: 15px;" src="<?php echo base_url(); ?>asset/logo/1010.png" alt=" SIP GWPP" title=" SIP GWPP"></div></a>
		  <div class="col col-md-3"><a href="https://puu-adwil.kemendagri.go.id/"><img style="height: 70px; width: auto; margin: 15px;" src="<?php echo base_url(); ?>asset/logo/77.png" alt="Aplikasi Perundang-Undangan" title="Aplikasi Perundang-Undangan"></div></a>
		  <div class="col col-md-3"></div>
		</div>
    </div>
  </div>
</div>
</div>



<div class="container animated fadeInRight">
<div class="row">
<div class="col-md-12 center">
<!-- <div class="heading heading-border heading-middle-border heading-middle-border-center"> -->
<h2 class="mb-lg" style="text-align: center; font-size: 30px; font-weight: 300;"><b>LAYANAN TERKAIT</b></h2>
<div class="btmline" style="margin-bottom: 46px;"></div>
<!-- </div> -->

<iframe src="<?php echo base_url();?>sliderlogo/" width="100%" frameBorder="0"></iframe>


</div>
</div>
</div>

<div class="clearfix"></div>

<section class="section section-no-background m-none animated fadeInLeft">
	<div class="container">
		<div class="row">
			
		<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 welcome padding-left-none padding-bottom-40 scroll_effect fadeInUp">
			<h2 class="margin-bottom-25 margin-top-none" style="text-align: center; font-size: 30px; font-weight: 300;"><b>GALERI VIDEO</b></h2>
			<?php
			foreach($video1->result_array() as $vid1){
			?>
			<iframe width="375" height="210" src="<?php echo str_replace('watch?v=', 'embed/',  $vid1['youtube']); ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			<?php
			}
			?>
		</div>
		
		<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 welcome padding-left-none padding-bottom-40 scroll_effect fadeInUp">
				<h2 class="margin-bottom-25 margin-top-none"> <strong> &nbsp;</strong></h2>
				<?php
				foreach($video2->result_array() as $vid2){
				?>
				<iframe width="375" height="210" src="<?php echo str_replace('watch?v=', 'embed/',  $vid2['youtube']); ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				<?php
				}
				?>
		</div>
		
		<div class="col-md-4" data-wow-delay=".4s">
			<h2 class="mb-lg" style="text-align: center; font-size: 30px; font-weight: 300;"><strong>POLLING</strong></h2>
			<div class="recent-posts">
				<article class="post">
					<?php
								  $t = $this->model_utama->view_where('poling',array('aktif' => 'Y','status' => 'Pertanyaan'))->row_array();
								  echo " <div style='color:#000; font-weight:bold;'>$t[pilihan] <br></div>";
								  echo "<form method=POST action='".base_url()."polling/hasil'>";
									  $pilih = $this->model_utama->view_where('poling',array('aktif' => 'Y','status' => 'Jawaban'));
									  foreach ($pilih->result_array() as $p) {
									  echo "<input class=marginpoling type=radio name=pilihan value='$p[id_poling]'/>
											<class style=\"color:#666;font-size:12px;\">&nbsp;&nbsp;$p[pilihan]<br />";}
									  echo "<br><input style='width: 110px; padding:2px' type=submit class=simplebtn value='PILIH' />
								  </form>
								  <a href='".base_url()."polling'>
								  <input style='width: 110px; padding:2px;' type=button class=simplebtn value='LIHAT HASIL' /></a>";
								?>
				</article>
			
		</div>
		</div>
	</div>
</section>