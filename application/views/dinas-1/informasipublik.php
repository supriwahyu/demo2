<?php $alamat = $this->model_utama->view_where('mod_alamat',array('id_alamat' => 1))->row_array(); ?>  

<div class="container">
	<div class="row" style="padding-top:15px;"> 
		<div class="col-md-9">
			<div class="blog-post single-post">
				<article class="post blog-single-post">
					<div>
					<header><h2>Informasi Publik</h2></header>
					</div>
					<div class="wpb_wrapper wpb_text_column td_block_wrap td_block_wrap vc_column_text  td_block_template_1">
					<div class="td-block-title-wrap"></div>
					<p><span style="font-size:13px"><?php echo $alamat['alamat']; ?></span></p>
					</div>

				</article>
			</div>
		</div>
			