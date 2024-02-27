
<?php
        if(session()->get('level')== 1 ||  session()->get('level')==2){
          ?>
<div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Data</h1>
          </div>

          <section id="multiple-column-form">
            <div class="row match-height">
              <div class="col-12">
                <div class="card">
                  <div class="card-content">
                    <div class="card-body">
                    <form class="form-horizontal form-label-left" novalidate action="<?= base_url('pembayaran/aksi_tambah_pembayaran')?>" method="post" enctype="multipart/form-data">
                        <div class="row">
                        
                        <div class="col-md-6 col-12">
                            <div class="form-group">
                              <label for="email-id-column">Pelanggan</label>
                              <select class="form-control" name="pelanggan" >
                                            <option>-PILIH-</option>
                                            <?php
                                             foreach ($a as $b) {
                                                 ?>
                                                 <option value ="<?= $b->id_pelanggan?>"><?php echo $b->id_pelanggan?>
                                                </option>
                                                <?php } ?>
                                            </select>
                            </div>
                          </div>
                          <div class="col-md-6 col-12">
    <div class="form-group">
        <label for="email-id-column">Tagihan</label>
        <select class="form-control" name="tagihan">
            <option>-PILIH-</option>
            <?php
            foreach ($c as $d) {
                $bulanTahun = $d->bulan . ' ' . $d->tahun;
                ?>
                <option value="<?= $d->id_tagihan ?>"><?= $bulanTahun ?></option>
            <?php } ?>
        </select>
    </div>
</div>

                       
                      
                          
                          
                          <div class="col-12 d-flex justify-content-end">
                            <button
                              type="submit"
                              class="btn btn-primary me-1 mb-1"
                            >
                              Submit
                            </button>
                            <button
                              type="reset"
                              class="btn btn-light-secondary me-1 mb-1"
                            >
                              Reset
                            </button>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          </div>
          <?php
        }else if(session()->get('level')== 3 ||  session()->get('level')==4){
          ?>
          <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Data</h1>
          </div>

          <section id="multiple-column-form">
            <div class="row match-height">
              <div class="col-12">
                <div class="card">
                  <div class="card-content">
                    <div class="card-body">
                    <form class="form-horizontal form-label-left" novalidate action="<?= base_url('pembayaran/aksi_tambah_pembayaran')?>" method="post" enctype="multipart/form-data">
                        <div class="row">
                        
                      
                          <div class="col-md-6 col-12">
    <div class="form-group">
        <label for="email-id-column">Tagihan</label>
        <select class="form-control" name="tagihan">
            <option>-PILIH-</option>
            <?php
            foreach ($c as $d) {
                $bulanTahun = $d->bulan . ' ' . $d->tahun;
                ?>
                <option value="<?= $d->id_tagihan ?>"><?= $bulanTahun ?></option>
            <?php } ?>
        </select>
    </div>
</div>

                       
                      
                          
                          
                          <div class="col-12 d-flex justify-content-end">
                            <button
                              type="submit"
                              class="btn btn-primary me-1 mb-1"
                            >
                              Submit
                            </button>
                            <button
                              type="reset"
                              class="btn btn-light-secondary me-1 mb-1"
                            >
                              Reset
                            </button>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          </div>
          <?php } ?>