<div>
      <img src="<?php echo base_url(); ?>asset/foto_banner/53.jpg">
</div>
        <?php 
    echo "<div class='container' style='padding-top: 50px;'>
          <div class='row'>
          <div class='col-md-12'>
              <div class='card box box-info'>
                <div class='align-middle card-body box-header with-border'>
                  <h3 style='margin-top: 25px;' class='text-center default-text py-3 box-title'><b>Pendaftaran <br>Genggam Bencana Award</b>".$this->session->disabled." </h3>
                </div>
              <div class='md-form box-body'>";
              $attributes = array('class'=>'form-horizontal','role'=>'form');
              echo form_open_multipart('upload/proses',$attributes); 
          echo "<div class='col-md-12'>
                  <table class='table table-condensed table-bordered'>
                  <tbody>
                    <input type='hidden' name='id' value=''>
                    <tr><th width='120px' scope='row'>BPBD kab/kota</th>    <td><input type='text' class='form-control' name='b' required></td></tr>
                    <tr><th scope='row'>Provinsi</th>              <td><input type='text' class='form-control' name='c'></td></tr>
                    <tr><th scope='row'>Alamat Kantor</th>          <td><input type='text' class='form-control' name='d'></td></tr>
                    <tr><th scope='row'>Contact Person</th>               <td><input type='text' name='a' class='form-control' required>";
                                                                            
                                                                            
                    echo "</td></tr>
                    <tr><th scope='row'>Jabatan</th>               <td><input type='text' name='e' class='form-control'></td></tr>
                    <tr><th scope='row'>NIP</th>               <td><input type='text' name='f' class='form-control'></td></tr>
                    <tr><th scope='row'>No HP</th>               <td><input type='text' name='g' class='form-control'></td></tr>
                    
                    <tr><th scope='row'>KRB</th>                 <td><input type='file' class='form-control' name='first_file'></td></tr>
                    <tr><th scope='row'>RPB</th>                 <td><input type='file' class='form-control' name='second_file'></td></tr>
                    <tr><th scope='row'>RENKON</th>                 <td><input type='file' class='form-control' name='third_file'></td></tr>
                    <tr><th scope='row'>SKPDB</th>                 <td><input type='file' class='form-control' name='fourth_file'></td></tr>"
                    ;
                                                                            
                    echo "</div></td></tr>
                  </tbody>
                  </table>
                </div>
              
              <div class='row justify-content-center box-footer' style='padding-bottom: 10px;'>
                    <button type='submit' name='submit' class='btn btn-info'>Submit</button>
                    <div style='width: 5px;'></div>
                    <a href='index.php'><button type='button' class='btn btn-default pull-right'>Cancel</button></a>
                    
                  </div>
            </div></div></div></div></div>";
            echo form_close();