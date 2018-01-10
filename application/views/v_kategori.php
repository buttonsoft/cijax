<!--sidebar-menu-->
<div id="sidebar"><a href="#" class="visible-phone"><i class="icon icon-home"></i> Dashboard</a>
  <ul>
    <li><a href="<?php echo base_url().'admin/dashboard'?>"><i class="icon icon-home"></i> <span>Dashboard</span></a> </li>
    <li class="active"> <a href="<?php echo base_url().'admin/kategori' ?>"><i class="icon icon-signal"></i> <span>Kategori</span></a> </li>
    <li> <a href="<?php echo base_url().'admin/produk' ?>"><i class="icon icon-inbox"></i> <span>Produk</span></a> </li>
  </ul>
</div>

<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="<?php echo base_url().'admin/dashboard/index' ?>" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="<?php echo base_url().'admin/kategori/index' ?>" class="current">Kategori</a> </div>
  </div>
  <div class="container-fluid">
        <div class="widget-box">
            <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Kategori <span class="icon-arrow-right"></span> <a href="#" data-toggle="modal" data-target="#ModalAdd"> Tambah data</a></h5>
          </div>
          <div class="widget-content nopadding">
            <div id="reload">
                <table class="table table-bordered" id="kategoriData">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Kategori</th>
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
    </div>


<!-- Start modal add -->
<div class="modal fade" id="ModalAdd" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
        <h3 class="modal-title" id="myModalLabel">Tambah Kategori</h3>
    </div>
    <form class="form-horizontal">
        <div class="modal-body">

            <div class="control-group">
                <label class="control-label" >Kategori : </label>
                <div class="controls">
                    <input name="kategori" id="kategori_add" class="span3" type="text" placeholder="Kategori" required="">
                </div>
            </div>

        </div>

        <div class="modal-footer">
            <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
            <button class="btn btn-info" id="btn_save">Simpan</button>
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
        <h3 class="modal-title" id="myModalLabel">Edit Kategori</h3>
    </div>
    <form class="form-horizontal">
        <div class="modal-body">
        <input type="hidden" name="id2" id=id_edit>
            <div class="control-group">
                <label class="control-label" >Kategori : </label>
                <div class="controls">
                    <input name="kategori2" id="kategori_edit" class="span3" type="text">
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
<div class="modal fade" id="ModalDelete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">x</span></button>
                <h4 class="modal-title" id="myModalLabel">Hapus Kategori</h4>
            </div>
            <form class="form-horizontal">
            <div class="modal-body">
                                  
                    <input type="hidden" name="id3" id="id_delete" value="">
                    <div class="alert alert-warning"><p>Apakah Anda yakin mau menghapus kategori ini?</p></div>
                                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                <button class="btn_delete btn btn-danger" id="btn_delete">Hapus</button>
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

    // Calling function show list kategori
    show_list_category();
    
    $('#kategoriData').dataTable({
        "bJQueryUI": true,
        "sPaginationType": "full_numbers",
        "sDom": '<""l>t<"F"fp>'
    });
     
    // Show kategori
    function show_list_category() {
        $.ajax({
            type  : "ajax",
            url   : "<?php echo base_url().'admin/kategori/list_kategori'?>",
            async : false,
            dataType : "JSON",
            success : function(data){
                var html = '';
                var i;
                for(i=0; i<data.length; i++){
                    html += '<tr>'+
                          '<td>'+i+'</td>'+
                            '<td>'+data[i].kategori+'</td>'+
                            '<td style="text-align:center;">'+
                                    '<a href="javascript:;" class="btn btn-info btn-mini edit" data="'+data[i].id_kat+'">Update</a>'+' || '+
                                    '<a href="javascript:;" class="btn btn-danger btn-mini delete" data="'+data[i].id_kat+'">Delete</a>'+
                                '</td>'+
                            '</tr>';
                }
                $('#show_data').html(html);
            }

        });
    }

    // Save kategori
    $('#btn_save').on('click',function(){
        var kategori=$('#kategori_add').val();
        $.ajax({
            type : "POST",
            url  : "<?php echo base_url().'admin/kategori/save_kategori'?>",
            dataType : "JSON",
            data : {kategori:kategori},
            success: function(data){
                $('[name="kategori1"]').val("");
                $('#ModalAdd').modal('hide');
                show_list_category();
            }
        });
        return false;
    });

    // Get update
    $('#show_data').on('click','.edit',function(){
        var id_kat=$(this).attr('data');
        $.ajax({
            type : "GET",
            url  : "<?php echo base_url().'admin/kategori/get_kategori'?>",
            dataType : "JSON",
            data : {id_kat:id_kat},
            success: function(data){
                $.each(data,function(id_kat, kategori){
                    $('#ModalEdit').modal('show');
                    $('[name="id2"]').val(data.id_kat);
                    $('[name="kategori2"]').val(data.kategori);
                });
            }
        });
        return false;
    });

    // Update kategori
    $('#btn_update').on('click',function(){
        var id_kat=$('#id_edit').val();
        var kategori=$('#kategori_edit').val();
        $.ajax({
            type : "POST",
            url  : "<?php echo base_url().'admin/kategori/update_kategori'?>",
            dataType : "JSON",
            data : {id_kat:id_kat, kategori:kategori},
            success: function(data){
                $('[name="id2"]').val("");
                $('[name="kategori2"]').val("");
                $('#ModalEdit').modal('hide');
                show_list_category();
            }
        });
        return false;
    });

    // Get delete
    $('#show_data').on('click','.delete',function(){
        var id_kat=$(this).attr('data');
        $('#ModalDelete').modal('show');
        $('[name="id3"]').val(id_kat);
    });

    // Delete kategori
    $('#btn_delete').on('click',function(){
        var id_kat=$('#id_delete').val();
        $.ajax({
        type : "POST",
        url  : "<?php echo base_url().'admin/kategori/delete_kategori'?>",
        dataType : "JSON",
                data : {id_kat:id_kat},
                success: function(data){
                        $('#ModalDelete').modal('hide');
                        show_list_category();
                }
            });
            return false;
        });

});

</script>

</body>
</html>
