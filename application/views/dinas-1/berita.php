<div>
      <img src="<?php echo base_url(); ?>asset/foto_banner/25.jpg">
</div>

<div class="container">
				<br/>
				<h2 style="text-align: center;">Semua Berita</h2>
				<div class="btmline" style="margin-bottom: 46px;"></div>
                <div class="row" style="padding-top:15px;"> 
                    <div class="col-md-9">
                        <div class="blog-post single-post">
						<?php 
						foreach ($berita->result_array() as $row) {    
						$total_komentar = $this->model_utama->view_where('komentar',array('id_berita' => $row['id_berita']))->num_rows();
						$tgl = tgl_indo($row['tanggal']);
						$isi_berita = strip_tags($row['isi_berita']); 
						$isi = substr($isi_berita,0,120); 
						$isi = substr($isi_berita,0,strrpos($isi," "));
						?>
                            <article class="post post-medium" style="padding-bottom: 10px;padding-top:20px;">
								<div class="row">
										<div class="col-md-5">
											<div class="img-responsive">
												<?php
												if ($row['gambar'] ==''){
													echo "<a href='".base_url()."berita/detail/$row[judul_seo]' rel='bookmark' title='$row[judul]'><img width='336' style='height:189px;' height='189' class='img-responsive' src='https://cdn.statically.io/img/ditjenbinaadwil.kemendagri.go.id/f=auto,w=300/asset/foto_berita/no-image.jpg' alt='$row[gambar]' title='$row[judul]'/></a>";
												}else{
													echo "<a href='".base_url()."berita/detail/$row[judul_seo]' rel='bookmark' title='$row[judul]'><img width='336' style='height:189px;' height='189' class='img-responsive' src='https://cdn.statically.io/img/ditjenbinaadwil.kemendagri.go.id/f=autow=300/asset/foto_berita/$row[gambar]' alt='$row[gambar]' title='$row[judul]'/></a>";
												}
												?>

												<!--<?php
												if ($row['gambar'] ==''){
													echo "<a href='".base_url()."berita/detail/$row[judul_seo]' rel='bookmark' title='$row[judul]'><img width='336' style='height:189px;' height='189' class='img-responsive' src='".base_url()."asset/foto_berita/no-image.jpg' alt='$row[gambar]' title='$row[judul]'/></a>";
												}else{
													echo "<a href='".base_url()."berita/detail/$row[judul_seo]' rel='bookmark' title='$row[judul]'><img width='336' style='height:189px;' height='189' class='img-responsive' src='".base_url()."/asset/foto_berita/$row[gambar]' alt='$row[gambar]' title='$row[judul]'/></a>";
												}
												?>-->
											</div>
										</div>
										<div class="col-md-7">

											<div class="post-content">

												<h4><a href="<?php echo base_url() . "berita/detail/$row[judul_seo]" ?>"><?php echo $row['judul']; ?></a></h4>
												<p><?php echo $isi;?></p>

											</div>
										</div>
										

									<div class="col-md-7">
										<div class="post-meta">
											<span><i class="fa fa-calendar"></i> <?php echo $tgl;?> </span>
											<a href="<?php echo base_url() . "berita/detail/$row[judul_seo]" ?>" class="btn btn-xs btn-primary pull-right">Read more...</a>
										</div>
									</div>
								</div>

							</article>
							<div class="clearfix" style="border-bottom: 1px solid #eee; padding-bottom:10px; line-height:10px;"></div>
						<?php
						}
						?>
                        </div>
						<div class="pagination--wrapper clearfix bdtop--1 bd--color-2 ptop--60 pbottom--30">
											
									<ul class="pagination float--right">
										<li>
										<?php echo $this->pagination->create_links(); ?>
										</li>
									</ul>
									
								</div>
                    </div>

                    <div class="col-md-3">
                        <aside class="siderbar">
							<h4 class="heading-primary">Berita Terkini</h4>
                            <ul class="nav nav-list mb-xlg">
							<?php
							$pilihan = $this->model_utama->view_join_two('berita','users','kategori','username','id_kategori',array('berita.aktif' => 'Y','status' => 'Y'),'id_berita','DESC',0,8);
							foreach ($pilihan->result_array() as $row) {   
                                    echo "<li><a href='$row[judul_seo]'>$row[judul]</a></li>";
                            }
							?>
                            </ul>
                            <hr />
							
                            <h4 class="heading-primary">Kategori</h4>
                            <ul class="nav nav-list mb-xlg">
                                    <?php
									$kategori = $this->model_utama->view_join_two('berita','users','kategori','username','id_kategori',array('judul_seo' => $this->uri->segment(3)),'id_berita','DESC',0,1);
									foreach ($kategori->result_array() as $kat){
									?>
										<li><a href="../../kategori/detail/<?php echo $kat['kategori_seo']; ?>"><?php echo $kat['nama_kategori']; ?></a></li>
                                    <?php
									}
									?>
                            </ul>
                            <hr />
                            
                       
                        </aside>
                    </div>
                </div>
            </div>
       



