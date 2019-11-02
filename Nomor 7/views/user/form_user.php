<section class="content-header">
    <h1>Barang
        <small>Control Panel</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i></a></li>
        <li class="active">Barang</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">      

    <div class="box">
        <div class="box-header">
            <h3 class="box-title"><?=ucfirst($page)?> Data User</h3>
            <div class="pull-right">
                <a href="<?=site_url('user')?>" class="btn btn-warning btn-flat">
                    <i class="fa fa-undo"></i> Kembali 
                </a>
            </div>
        </div>
        <div class="box-body">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                <?//=validation_errors() ?>
                    <form action="<?=site_url('user/proses')?>" method="post">
                        <input type="hidden" name="id" value="<?=$row->id?>" class="form-control" required> 
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" name="name" value="<?=$row->name?>" class="form-control" required>   
                        </div>
                         <div class="form-group">
                            <label>E-mail</label>
                            <input type="text" name="email" value="<?=$row->email?>" class="form-control">   
                        </div>
                        <div class="form-group">
                            <label>Jabatan</label>
                            <select name="jabatan" class="form-control">
                                <?php $jabatan = $row->role?>
                                <option value="">- Pilih -</option>
                                <option value="Admin" <?=$jabatan == 'Admin' ? "selected" : null?>>- Admin -</option>
                                <option value="Guest"  <?=$jabatan == 'Guest' ? "selected" : null?>>- Guest -</option>
                            </select>  
                        </div>
                        <div class="form-group">
                            <button type="submit" name="<?=$page?>" class="btn btn-success btn-flat">Simpan</button>
                            <button type="reset" class="btn btn-flat">Reset</button>
                        </div>
                    </form>        
                </div>
            </div>
        </div>

    </div>
</section>