<?php $alamat = $this->model_utama->view_where('mod_alamat',array('id_alamat' => 1))->row_array(); ?>  

<div class="container">
	<div class="row" style="padding-top:15px;"> 
		<div class="col-md-9">
			<div class="blog-post single-post">
				<article class="post blog-single-post">
					<div>
					<header><h2>Contact</h2></header>
					</div>
					<div class="wpb_wrapper wpb_text_column td_block_wrap td_block_wrap vc_column_text  td_block_template_1">
					<div class="td-block-title-wrap"></div>
					<p><span style="font-size:13px"><?php echo $alamat['alamat']; ?></span></p>
					</div>

				</article>
			</div>
		</div>
			
		<div class="wpb_wrapper">
			<iframe width="100%" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="<?php echo "$iden[maps]"; ?>"></iframe>

			<div class="vc_row_inner vc_custom_1464855984483  vc_row vc_inner wpb_row td-pb-row">
				<div class="vc_column_inner  wpb_column vc_column_container td-pb-span12">
					<div class="vc_column-inner">
						<div class="wpb_wrapper">
							<div class="wpb_wrapper wpb_text_column td_block_wrap td_block_wrap vc_column_text td_block_template_1">
							
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>
</div>
       
	   
	