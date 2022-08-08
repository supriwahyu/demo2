 <?php 
	$iden = $this->model_utama->view_where('identitas',array('id_identitas' => 1))->row_array();
	$alamat = $this->model_utama->view_where('mod_alamat',array('id_alamat' => 1))->row_array();
	
?>
    <div class="container">
        <div class="row">
           
            <div class="col-md-8">
               <h2 class="mb-sm" style="text-align: center; font-size: 30px; font-weight: 300;"><b>LOKASI</b></h2>
               <?php
				$iden = $this->model_utama->view_where('identitas',array('id_identitas' => 1))->row_array();
				$alamat = $this->model_utama->view_where('mod_alamat',array('id_alamat' => 1))->row_array();
				?>
				<iframe class="shadow-lg p-3 mb-5 bg-white rounded" width="100%" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="<?php echo "$iden[maps]"; ?>"></iframe>

            </div>
			<!-- <div class="col-md-4">
                <h2 class="mb-sm" style="text-align: center; font-size: 30px; font-weight: 300;"><b>FANSPAGE</b></h2>
                <div class="fb-page" data-href="https://www.facebook.com/Direktorat-Jenderal-Bina-Administrasi-Kewilayahan-101532105026824" data-tabs="timeline" data-width="300" data-height="300" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/Direktorat-Jenderal-Bina-Administrasi-Kewilayahan-101532105026824" class="fb-xfbml-parse-ignore shadow-lg p-3 mb-5 bg-white rounded"><a href="https://www.facebook.com/Direktorat-Jenderal-Bina-Administrasi-Kewilayahan-101532105026824">Ditjen Bina Adwil</a></blockquote></div>

            </div> -->
			<div class="col-md-4">
                <h2 class="mb-sm" style="text-align: left; font-size: 30px; font-weight: 300;"><b>CONTACT US</b></h2>
                <p style="font-size:18px;" class="phone"><?php echo $iden['no_telp']; ?></p>
                <?php
				echo $alamat["alamat"];
				?>
                <ul class="social-icons mt-xl">
                        <li>
                            <a class="sc-1" href="https://www.facebook.com/profile.php?id=100063944497625" target="_blank"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li>
                            <a class="sc-2" href="https://twitter.com/ditjenbinaadwil" target="_blank"><i class="fa fa-twitter"></i></a>
                        </li>
                        <!-- <li>
                            <a class="sc-11" href="#" target="_blank"><i class="fa fa-instagram"></i></a>
                        </li> -->
                        <li>
                            <a class="sc-3" href="https://www.youtube.com/channel/UCoY6RrIhU45oc63pSgYxquA" target="_blank"><i class="fa fa-youtube"></i></a>
                        </li>
                </ul>

            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container">
            <div class="row">
                <div class="col-md-11">
                    <p>© <?php echo Date('Y'); ?> Ditjen Bina Administrasi Kewilayahan</p> <span style="opacity:0;">Dioptimasi oleh<a href="https://www.zakiy.my.id">Zakiy</a> dari <a href="https://www.mogodev.id">Mogodev</a></span>
                </div>
            </div>
        </div>
    </div>
