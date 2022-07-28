<div id="carousel-example-generic" class="carousel slide">
        <!-- Indicators -->
		<ol class="carousel-indicators">
		<?php
		$no = 0;
		$utama1 = $this->model_utama->view('banner');
		foreach ($utama1->result_array() as $rw) {    
			if($no == 0){
				echo "<li data-target='#carousel-example-generic' data-slide-to='$no' class='active'></li>";
			}else{
				echo "<li data-target='#carousel-example-generic' data-slide-to='$no'></li>";
			}
			$no++;
		}
		?>
                
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox" style="height: 600px;">
                <?php
				$no = 0;
				$utama1 = $this->model_utama->view('banner');
				$imgs = array("2.jpg", "3.jpg", "4.jpg");
				shuffle($imgs);
				$txts = array("Besar harapan saya Tahun Anggaran 2022, Ditjen Bina Adwil dapat mencapai target realisasi 99% dan tetap memperhatikan target IKPA Nasional", "
Kerjasama Kelompok Kerja/Jawatan Kuasa Kerja Sosio Ekonomi Malaysia-Indonesia (KK/JKK SOSEK MALINDO) dan Sub Organisasi dibawahnya telah memperkuat kerjasama bilateral Indonesia-Malaysia dibidang sosial-ekonomi di Kawasan Perbatasan

", "Kabar gembira bagi seluruh pejabat fungsional Damkar dan Analis Kebakaran, khususnya yang diangkat melalui mekanisme penyesuaian/inpassing, karena Bapak Presiden telah menandatangani Peraturan Presiden tentang besaran tunjangan fungsionalnya");
				
				shuffle($txts);
				foreach ($imgs as $img) {    
					if($no == 0){
						echo "<div class='item active'>";
					}else{
						echo "<div class='item'>";
					}
				foreach ($txts as $txt)
				foreach ($utama1->result_array() as $row)
					?>
					<img id="image-banner" src="<?php echo base_url(); ?>/asset/foto_banner/<?php echo $img?>" class="img-responsive" style="object-fit: cover; width: 100%;"/>
                    <div id="slide-caption" class="carousel-caption animated fadeInLeft" style="margin: auto; padding-top: 300px;">
                            <p id="slider1" style="font-size: 16px;" class="slide-text-heading " data-animation="animated bounceInLeft">
                                <?php print_r($txt)?>
                            </p>
                            <h4 class="slide-text-desc" data-animation="animated bounceInUp">
                                <h4 style="text-align: left;"><span style="color: #ffffff;"><?php echo $row['deskripsi'];?><br /></span></h4>
                            </h4>

                    </div>
					</div>
					<?php
					$no++;
				}
				
				?>
				
        </div><!-- /.carousel-inner -->
        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div><!-- /.carousel -->



