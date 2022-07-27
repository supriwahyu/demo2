 <?php 
	$iden = $this->model_utama->view_where('identitas',array('id_identitas' => 1))->row_array();
	$alamat = $this->model_utama->view_where('mod_alamat',array('id_alamat' => 1))->row_array();
	
?>
    <div class="container">
        <div class="row">
           
            <div class="col-md-4">
               <h2 class="mb-sm">LOKASI</h2>
               <?php
				$iden = $this->model_utama->view_where('identitas',array('id_identitas' => 1))->row_array();
				$alamat = $this->model_utama->view_where('mod_alamat',array('id_alamat' => 1))->row_array();
				?>
				<iframe width="100%" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="<?php echo "$iden[maps]"; ?>"></iframe>

            </div>
			<div class="col-md-4">
                <h2 class="mb-sm">FANSPAGE</h2>
                <div class="fb-page" data-href="https://www.facebook.com/Direktorat-Jenderal-Bina-Administrasi-Kewilayahan-101532105026824" data-tabs="timeline" data-width="300" data-height="300" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/Direktorat-Jenderal-Bina-Administrasi-Kewilayahan-101532105026824" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/Direktorat-Jenderal-Bina-Administrasi-Kewilayahan-101532105026824">Ditjen Bina Adwil</a></blockquote></div>

            </div>
			<div class="col-md-4">
                <h2 class="mb-sm">Contact Us</h2>
                <p style="font-size:18px;" class="phone"><?php echo $iden['no_telp']; ?></p>
                <?php
				echo $alamat["alamat"];
				?>
                <ul class="social-icons mt-xl">
                        <li>
                            <a class="sc-1" href="#" target="_blank"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li>
                            <a class="sc-2" href="#" target="_blank"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li>
                            <a class="sc-11" href="#" target="_blank"><i class="fa fa-instagram"></i></a>
                        </li>
                        <li>
                            <a class="sc-3" href="#" target="_blank"><i class="fa fa-youtube"></i></a>
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
