<?php
        if(session()->get('level')== 1 ||  session()->get('level')==2){
          ?>
<div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Data</h1>
          </div>

          <!-- Basic Tables start -->
          <section class="section">
            <div class="card">
              <div class="card-header">Data Pembayaran</div>
              <a href="<?=base_url('/pembayaran/tambah_pembayaran/')?>" style="position: absolute; top: 10px; right: 10px;">
                        <button class="btn btn-primary">Tambah Pembayaran</button>
                    </a>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table" id="table1">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Pelanggan</th>
                        <th>Pembayaran</th>
                        <th>Tanggal</th>
                        
                        <th>Biaya Admin</th>
                     
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php 
                                $no=1;
                                foreach ($a as $b) {
                                    ?>
                                    <tr>
                                        <td><?php echo $no++ ?></td>
                                        <td><?php echo $b->id_pelanggan?> </td>
                                        <td><?php echo $b->bulan . ' ' . $b->tahun?> </td>
                                        <td><?php echo $b->tanggal?> </td>
                                       
                                        <td><?php echo $b->biaya_ad?> </td>
                                      
                                        <td>  
                                        
                                    
                                        <a href="<?=base_url('/Pembayaran/delete_pembayaran/'.$b->id_pembayaran)?>"><button class="btn btn-danger">Delete</button></a>                                        
                                    </td>
                                        <!-- <a href="<?=base_url('/tagihan/edit_tagihan/'.$b->id_tagihan)?>"><button class="btn btn-primary">Edit</button></a>
                                        <a href="<?=base_url('/tagihan/delete_tagihan/'.$b->id_tagihan)?>"><button class="btn btn-danger">Delete</button></a>    
                                     -->
                                     <!-- <a href="<?=base_url('/tagihan/bayar/'.$b->id_tagihan)?>"><button class="btn btn-danger">Bayar</button></a>     -->
                                       

                                    </tr>
                                    <?php
                                    }
                                    ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </section>
     
        </div>
        <?php
        }else if(session()->get('level')== 3){
          ?>
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Data</h1>
          </div>

          <!-- Basic Tables start -->
          <section class="section">
            <div class="card">
              <div class="card-header">Data Pembayaran</div>
             
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table" id="table1">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Pelanggan</th>
                        <th>Pembayaran</th>
                        <th>Tanggal</th>
                        
                        <th>Biaya Admin</th>
                     
                     
                      </tr>
                    </thead>
                    <tbody>
                    <?php 
                                $no=1;
                                foreach ($a as $b) {
                                    ?>
                                    <tr>
                                        <td><?php echo $no++ ?></td>
                                        <td><?php echo $b->id_pelanggan?> </td>
                                        <td><?php echo $b->bulan . ' ' . $b->tahun?> </td>
                                        <td><?php echo $b->tanggal?> </td>
                                       
                                        <td><?php echo $b->biaya_ad?> </td>
                                      
                                      
                                        <!-- <a href="<?=base_url('/tagihan/edit_tagihan/'.$b->id_tagihan)?>"><button class="btn btn-primary">Edit</button></a>
                                        <a href="<?=base_url('/tagihan/delete_tagihan/'.$b->id_tagihan)?>"><button class="btn btn-danger">Delete</button></a>    
                                     -->
                                     <!-- <a href="<?=base_url('/tagihan/bayar/'.$b->id_tagihan)?>"><button class="btn btn-danger">Bayar</button></a>     -->
                                       

                                    </tr>
                                    <?php
                                    }
                                    ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </section>
     
        </div>
        <?php
        }else if(session()->get('level')== 4){
          ?>
       <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Data</h1>
          </div>

          <!-- Basic Tables start -->
          <section class="section">
            <div class="card">
              <div class="card-header">Data Pembayaran</div>
              <a href="<?=base_url('/pembayaran/tambah_pembayaran/')?>" style="position: absolute; top: 10px; right: 10px;">
                        <button class="btn btn-primary">Tambah Pembayaran</button>
                    </a>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table" id="table1">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Pelanggan</th>
                        <th>Pembayaran</th>
                        <th>Tanggal</th>
                        
                        <th>Biaya Admin</th>
                     
                    
                      </tr>
                    </thead>
                    <tbody>
                    <?php 
                                $no=1;
                                foreach ($a as $b) {
                                    ?>
                                    <tr>
                                        <td><?php echo $no++ ?></td>
                                        <td><?php echo $b->id_pelanggan?> </td>
                                        <td><?php echo $b->bulan . ' ' . $b->tahun?> </td>
                                        <td><?php echo $b->tanggal?> </td>
                                       
                                        <td><?php echo $b->biaya_ad?> </td>
                                      
                                       
                                        <!-- <a href="<?=base_url('/tagihan/edit_tagihan/'.$b->id_tagihan)?>"><button class="btn btn-primary">Edit</button></a>
                                        <a href="<?=base_url('/tagihan/delete_tagihan/'.$b->id_tagihan)?>"><button class="btn btn-danger">Delete</button></a>    
                                     -->
                                     <!-- <a href="<?=base_url('/tagihan/bayar/'.$b->id_tagihan)?>"><button class="btn btn-danger">Bayar</button></a>     -->
                                       

                                    </tr>
                                    <?php
                                    }
                                    ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </section>
     
        </div>
        <?php } ?>