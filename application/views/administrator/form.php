<div class="col-xs-12">  
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Semua Form</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th style='width:20px'>No</th>
                        <th>Judul Berita</th>
                        <th>Tanggal</th>
                        <th>Status</th>
                        <th>gambar</th>
                        <th>gambar</th>
                        <th>gambar</th>
                        <th>gambar</th>
                        <th>gambar</th>
                        <th>gambar</th>
                        <th>gambar</th>
                      </tr>
                    </thead>
                    <tbody>
                  <?php 
                    $no = 1;
                    foreach ($record as $row){
                    ?>
                    <?php
                    echo "<tr><td>$no</td>
                              <td>$row[bpbd]</td>
                              <td>$row[provinsi]</td>
                              <td>$row[provinsi]</td>
                              <td>$row[provinsi]</td>
                              <td>$row[provinsi]</td>
                              <td>$row[alamat]</td>
                              
                              <td><a title='$row[krb]' target='_BLANK' href='".base_url()."asset/berkas/$row[krb]'>Download</a></td>
                              <td><a title='$row[krb]' target='_BLANK' href='".base_url()."asset/berkas/$row[rpb]'>Download</a></td>
                              <td><a title='$row[krb]' target='_BLANK' href='".base_url()."asset/berkas/$row[renkon]'>Download</a></td>
                              <td><a title='$row[krb]' target='_BLANK' href='".base_url()."asset/berkas/$row[skpdb]'>Download</a></td>
                            </tr>";
                  
                      $no++;
                    }
                    ?>
                  </tbody>
                </table>
              </div>