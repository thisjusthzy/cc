<div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>DAFTAR USER</h2>
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
                          <th>Level</th>
                          <th>Act</th>
                         
                        </tr>
                      </thead>


                      <tbody>
                        <?php
                        $no=1;
                        foreach ($okta as $key) {
                      
                        ?>
                        <tr>
                          <td><?php echo $no++ ?></td>
                          <td><?php echo $key->nama?></td>
                          <td><?php echo $key->username?></td>
                          <td>

                        <a href="<?= base_url('/Home/reset_p/'.$key->id_user)?><"button class="btn btn-info"><i class="fa fa-edit"> Reset Password  </i></button></a>
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