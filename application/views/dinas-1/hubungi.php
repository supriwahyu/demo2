<?php $alamat = $this->model_utama->view_where('mod_alamat',array('id_alamat' => 1))->row_array(); ?>  

<div>
      <img src="<?php echo base_url(); ?>asset/foto_banner/37.jpg">
</div>

<div class="container">
	<div class="row" style="padding-top:15px;"> 
		<div class="col-md-6">
			<div class="blog-post single-post">
				<article class="post blog-single-post">
					<div>
					<header><h2 style="text-align: center;"><b>Contact</b></h2></header>
					</div>
					<div class="wpb_wrapper wpb_text_column td_block_wrap td_block_wrap vc_column_text  td_block_template_1">
					<div class="td-block-title-wrap"></div>
					<p><span style="font-size:13px"><?php echo $alamat['alamat']; ?></span></p>
					</div>

				</article>
			</div>
		</div>
		<div class="col-md-6">
		<div class="wpb_wrapper shadow-lg p-3 mb-5 bg-white rounded">
			<iframe width="100%" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="<?php echo "$iden[maps]"; ?>"></iframe>
		</div>
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
       
	   
	