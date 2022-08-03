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
                        <th>BPBD kab/kota</th>
                        <th>Provinsi</th>
                        <th>Alamat Kantor</th>
                        <th>Contact Person</th>
                        <th>Jabatan</th>
                        <th>NIP</th>
                        <th>No HP</th>
                        <th>KRB</th>
                        <th>RPB</th>
                        <th>RENKON</th>
                        <th>SKPDB</th>
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
                              <td>$row[alamat]</td>
                              <td>$row[contact]</td>
                              <td>$row[jabatan]</td>
                              <td>$row[nip]</td>
                              <td>$row[no_hp]</td>
                              
                              <td><a title='$row[krb]' target='_BLANK' href='".base_url()."asset/berkas/$row[krb]'><i class='glyphicon glyphicon-download'></i></a></td>
                              <td><a title='$row[krb]' target='_BLANK' href='".base_url()."asset/berkas/$row[rpb]'><i class='glyphicon glyphicon-download'></i></a></td>
                              <td><a title='$row[krb]' target='_BLANK' href='".base_url()."asset/berkas/$row[renkon]'><i class='glyphicon glyphicon-download'></i></a></td>
                              <td><a title='$row[krb]' target='_BLANK' href='".base_url()."asset/berkas/$row[skpdb]'><i class='glyphicon glyphicon-download'></i></a></td>
                            </tr>";
                  
                      $no++;
                    }
                    ?>
                  </tbody>
                </table>
              </div>