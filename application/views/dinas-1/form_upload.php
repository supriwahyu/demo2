
        <?php 
    echo "<div class='col-md-12'>
              <div class='box box-info'>
                <div class='box-header with-border'>
                  <h3 class='box-title'>Tambah Berita Baru ".$this->session->disabled." </h3>
                </div>
              <div class='box-body'>";
              $attributes = array('class'=>'form-horizontal','role'=>'form');
              echo form_open_multipart('upload/proses',$attributes); 
          echo "<div class='col-md-12'>
                  <table class='table table-condensed table-bordered'>
                  <tbody>
                    <input type='hidden' name='id' value=''>
                    <tr><th width='120px' scope='row'>bpbd</th>    <td><input type='text' class='form-control' name='b' required></td></tr>
                    <tr><th scope='row'>provinsi</th>              <td><input type='text' class='form-control' name='c'></td></tr>
                    <tr><th scope='row'>alamat</th>          <td><input type='text' class='form-control' name='d'></td></tr>
                    <tr><th scope='row'>Kategori</th>               <td><input type='text' name='a' class='form-control' required>";
                                                                            
                                                                            
                    echo "</td></tr>
                    <tr><th scope='row'>Headline</th>               <td><input type='text' name='e' class='form-control'></td></tr>
                    <tr><th scope='row'>Headline</th>               <td><input type='text' name='f' class='form-control'></td></tr>
                    <tr><th scope='row'>Headline</th>               <td><input type='text' name='g' class='form-control'></td></tr>
                    
                    <tr><th scope='row'>Gambar</th>                 <td><input type='file' class='form-control' name='first_file'></td></tr>
                    <tr><th scope='row'>Gambar</th>                 <td><input type='file' class='form-control' name='second_file'></td></tr>
                    <tr><th scope='row'>Gambar</th>                 <td><input type='file' class='form-control' name='third_file'></td></tr>
                    <tr><th scope='row'>Gambar</th>                 <td><input type='file' class='form-control' name='fourth_file'></td></tr>"
                    ;
                                                                            
                    echo "</div></td></tr>
                  </tbody>
                  </table>
                </div>
              
              <div class='box-footer'>
                    <button type='submit' name='submit' class='btn btn-info'>Tambahkan</button>
                    <a href='index.php'><button type='button' class='btn btn-default pull-right'>Cancel</button></a>
                    
                  </div>
            </div></div></div>";
            echo form_close();