<!--sidebar-menu-->
<div id="sidebar"><a href="#" class="visible-phone"><i class="icon icon-home"></i> Dashboard</a>
  <ul>
    <li><a href="<?php echo base_url().'admin/dashboard' ?>"><i class="icon icon-home"></i> <span>Dashboard</span></a> </li>
    <li> <a href="<?php echo base_url().'admin/kategori' ?>"><i class="icon icon-signal"></i> <span>Kategori</span></a> </li>
    <li class="active"> <a href="<?php echo base_url().'admin/produk' ?>"><i class="icon icon-inbox"></i> <span>Produk</span></a> </li>
  </ul>
</div>

<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="<?php echo base_url().'admin/dashboard/index' ?>" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="<?php echo base_url().'admin/produk/index' ?>" class="current">Produk</a> </div>
  </div>
  <div class="container-fluid">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Produk <span class="icon-arrow-right"></span><a href="#" data-toggle="modal" data-target="#ModalAdd"> Tambah produk</a></h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-striped table-bordered data-table" id="table">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Produk</th>
                  <th>Gambar</th>
                  <th>Harga</th>
                  <th>Stok</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody id="show_data">
                
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

<!-- Start modal add -->
<div class="modal fade modal hide" id="ModalAdd" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
        <h3 class="modal-title" id="myModalLabel">Tambah Produk</h3>
      </div>
      <form class="form-horizontal">
          <div class="modal-body">

              <div class="control-group">
                  <label class="control-label" >Produk : </label>
                  <div class="controls">
                      <input name="produk" id="produk" class="span3" type="text" placeholder="Produk" required="">
                  </div>
              </div>

              <div class="control-group">
                  <label class="control-label" >Gambar : </label>
                  <div class="controls">
                      <input name="gambar" id="gambar" type="file" required="">
                  </div>
              </div>

               <div class="control-group">
                  <label class="control-label" >Harga : </label>
                  <div class="controls">
                      <input name="harga" id="harga" class="span2" type="text" placeholder="Harga" required="">
                  </div>
              </div>

               <div class="control-group">
                  <label class="control-label" >Stok : </label>
                  <div class="controls">
                      <input name="stok" id="stok" class="span1" type="text" placeholder="stok" required="">
                  </div>
              </div>


          </div>

          <div class="modal-footer">
              <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
              <button class="btn btn-info" id="btn_simpan">Simpan</button>
          </div>
      </form>
    </div>
  </div>
</div>
<!-- End modal add -->

<!-- Start modal edit -->
<div class="modal fade" id="ModalEdit" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
        <h3 class="modal-title" id="myModalLabel">Edit Produk</h3>
    </div>
    <form class="form-horizontal">
        <div class="modal-body">
        <input type="hidden" name="id" id=id>

            <div class="control-group">
                <label class="control-label" >Produk : </label>
                <div class="controls">
                    <input name="produk" id="produk" class="span3" type="text">
                </div>
            </div>

            <div class="control-group">
                <label class="control-label" >Gambar : </label>
                <div class="controls">
                    <input name="gambar" id="gambar" type="file">
                </div>
            </div>

        </div>

        <div class="modal-footer">
            <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
            <button class="btn btn-info" id="btn_update">Update</button>
        </div>
    </form>
    </div>
    </div>
</div>
<!-- End modal edit -->

<!-- Start modal hapus -->
<div class="modal fade" id="ModalHapus" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">x</span></button>
                <h4 class="modal-title" id="myModalLabel">Hapus Kategori</h4>
            </div>
            <form class="form-horizontal">
            <div class="modal-body">
                                  
                    <input type="hidden" name="id" id="text_id" value="">
                    <div class="alert alert-warning"><p>Apakah Anda yakin mau menghapus kategori ini?</p></div>
                                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                <button class="btn_hapus btn btn-danger" id="btn_hapus">Hapus</button>
            </div>
            </form>
        </div>
    </div>
</div>
<!-- End modal hapus -->

<!-- start footer part -->
<div class="row-fluid">
  <div id="footer" class="span12"> 2013 &copy; Matrix Admin. Brought to you by <a href="http://themedesigner.in">Themedesigner.in</a> </div>
</div>

<!--end-Footer-part-->

<script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery.ui.custom.js"></script> 
<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script> 
<script src="<?php echo base_url(); ?>assets/js/jquery.uniform.js"></script> 
<script src="<?php echo base_url(); ?>assets/js/select2.min.js"></script> 
<script src="<?php echo base_url(); ?>assets/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/matrix.js"></script> 
<script src="<?php echo base_url(); ?>assets/js/matrix.tables.js"></script>

<script type="text/javascript">

  $(document).ready(function(){

    show_list_produk(); //panggil fungsi tampil produk

    $('#produkData').dataTable({
      "bJQueryUI" : true,
      "sPaginationType" : "full_numbers",
      "sDom" : '<""l>t<"F"fp>'
    });

    function show_list_produk(){
      $.ajax({
        type : "ajax",
        url : "<?php echo base_url().'admin/produk/list_produk'?>",
        async : false,
        dataType : 'json',
        success : function(data) {
          var html = '';
          var i;
          for (i=0; i<data.length; i++) {
            html += '<tr>'+
                          '<td>'+i+'</td>'+
                            '<td>'+data[i].nama+'</td>'+
                            '<td style="text-align:right;">'+
                                    '<a href="javascript:;" class="btn btn-info btn-mini item_edit" data="'+data[i].id+'">Edit</a>'+' '+
                                    '<a href="javascript:;" class="btn btn-danger btn-mini item_hapus" data="'+data[i].id+'">Hapus</a>'+
                                '</td>'+
                            '</tr>';
          }
          $('#show_data').html(html);
        }
      });
    }

    // Get update
    $('#show_data').on('click','.item_edit',function(){
      var id = $(this).attr('data');
      $.ajax({
        type : "GET",
        url : "<?php echo base_url().'admin/produk/get_produk'?>",
        dataType : "JSON",
        data : {id:id},
        success : function(data){
          $.each(data, function(id, produk, gambar, harga, stok){
            $('#ModalEdit').modal('show');
            $('[name="id_edit"]').val(data.id);
            $('[name="produk_edit"]').val(data.produk);
            $('[name="gambar_edit"]').val(data.gambar);
            $('[name="harga_edit"]').val(data.harga);
            $('[name="stok_edit"]').val(data.stok);
          });
        }
      });
      return false;
    });

    // Get hapus
    $('#show_data').on('click','.item_hapus', function() {
      var id = $(this).attr('data');
      $('#ModalHapus').modal('show');
      $('[name="id"]').val(id);
    });

    // Simpan produk
    $('#btn_simpan').on('click', function() {
      var produk = $('#produk').val();
      var gambar = $('#gambar').val();
      var harga = $('#harga').val();
      var stok = $('#stok').val();
      $.ajax({
        type : "POST",
        url : "<?php echo base_url().'admin/produk/save_produk'?>",
        dataType : "JSON",
        data : {produk:produk, gambar:gambar, harga:harga, stok:stok},
        success : function(data) {
          $('[name="produk"]').val("");
          $('[name="gambar"]').val("");
          $('[name="harga"]').val("");
          $('[name="stok"]').val("");
          $('#ModalAdd').modal('hide');
          show_list_produk();
        }
      });
      return false;
    });

    // Update produk
    $('#btn_update').on('click', function() {
      var id = $('#id_produk2').val();
      var produk = $('#produk2').val();
      var gambar = $('#gambar_produk2').val();
      var harga = $('#harga_produk2').val();
      var stok = $('#stok_produk2').val();
      $.ajax({
        type : "POST",
        url : "<?php echo base_url().'admin/produk/update_produk'?>",
        dataType : "JSON",
        data : {id:id, produk:produk, gambar:gambar, harga:harga, stok:stok},
        success : function(data) {
          $('[name="id_edit"]').val("");
          $('[name="produk_edit"]').val("");
          $('[name="gambar_edit"]').val("");
          $('[name="harga_edit"]').val("");
          $('[name="stok_edit"]').val("");
          $('#ModalEdit').modal('hide');
          show_list_produk();
        }
      });
      return false;
    });

    // Hapus produk
    $('#btn_hapus').on('click', function() {
      var id = $('#text_id').val();
      $.ajax({
        type : "POST",
        url : "<?php echo base_url().'admin/produk/delete_produk'?>",
        dataType : "JSON",
        data : {id:id}
        success : function(data) {
          $('#ModalHapus').modal('hide');
          show_list_produk();
        }
      });
      return false;
    });


  });
</script>

</body>
</html>