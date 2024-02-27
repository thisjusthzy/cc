<div class="col-md-12 col-sm-12 col-xs-12">
  <div class="x_panel">
    <div class="x_title">
      <h2>Barang</h2>
      <ul class="nav navbar-right panel_toolbox">
        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
        </li>
        <li class="dropdown">
          
        </li>
        <li><a class="close-link"><i class="fa fa-close"></i></a>
        </li>
      </ul>
      <div class="clearfix"></div>
    </div>
    <div class="x_content">

      <form class="form-horizontal form-label-left" novalidate  action="<?= base_url('home/aksi_simpanA')?>" method="post">


        <div class="item form-group">
          <label class="control-label col-md-3 col-sm-3 col-xs-12">Nama Anak <span class="required">*</span>
          </label>
          <div class="col-md-6 col-sm-6 col-xs-12">
            <input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="name" placeholder="Nama Anak" required="required" type="text">
          </div>
        </div>
        <div class="item form-group">
          <label class="control-label col-md-3 col-sm-3 col-xs-12">Tanggal Lahir <span class="required">*</span>
          </label>
          <div class="col-md-6 col-sm-6 col-xs-12">
            <input type="date" id="kode" name="kode" required="required" placeholder="Kode" class="form-control col-md-7 col-xs-12">
          </div>
        </div>
       <!--  <div class="item form-group">
          <label class="control-label col-md-3 col-sm-3 col-xs-12">Jumlah Product <span class="required">*</span>
          </label>
          <div class="col-md-6 col-sm-6 col-xs-12">
            <input type="text" id="jumlah" name="jumlah" required="required" placeholder="Kode" class="form-control col-md-7 col-xs-12">
          </div>
        </div> -->
        <div class="item form-group">
          <label class="control-label col-md-3 col-sm-3 col-xs-12">Usia Anak<span class="required">*</span>
          </label>
          <div class="col-md-6 col-sm-6 col-xs-12">
            <input type="text" id="harga" name="harga" placeholder="Harga" required="required" class="form-control col-md-7 col-xs-12">
          </div>
        </div>
        
      </div>
      <div class="ln_solid"></div>
      <div class="form-group">
        <div class="col-md-6 col-md-offset-3">
          <button type="submit" class="btn btn-primary">Cancel</button>
          <button id="send" type="submit" class="btn btn-success">Submit</button>
        </div>
      </div>
    </form>
  </div>
</div>
</div>