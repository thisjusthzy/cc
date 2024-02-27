<div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>LIST ORANGTUA</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    
                    <table id="datatable-buttons" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Nama</th>
                          <th>Tanggal Lahir</th>
                          <th>No tlp</th>
                         
                          <th>Act</th>
                          <a href="<?php echo base_url('/Home/tk/')?>"> <button class="btn btn-success"><i class="fa fa-plus"></i></button></a>
                        </tr>
                      </thead>


                      <tbody>
                        <?php
                        $no=1;
                        foreach ($okta as $key) {
                      
                        ?>
                        <tr>
                          <td><?php echo $no++ ?></td>
                          <td><?php echo $key->namaortu?></td>
                          <td><?php echo $key->tgl_lahir?></td>
                          <td><?php echo $key->no_tlp?></td>
                          <td>

                        <a href="<?= base_url('/Home/edit_k/'.$key->id_karyawan)?>"> <button class="btn btn-info"><i class="fa fa-edit"></i></button></a>

                        <a href="<?= base_url('/Home/clear_k/'.$key->id_user)?>"> <button class="btn btn-danger"><i class="fa fa-trash"></i></button>
                       </a>
                         </td>
                        </tr>
                       <?php
                     }
                     ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>