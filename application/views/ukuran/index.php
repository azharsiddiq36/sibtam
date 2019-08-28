<a type="button" class="btn btn-primary pull-right" href="<?= base_url('administrator/ukuran/tambah')?>">
    <em class="fa fa-plus-circle fa-fw mr-sm"></em>Add Item</a>
<h3><?= $title?>
    <br>
    <small>Sistem Informasi Tanaman Obat</small>
</h3>

<div class="row">

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">Data Tabel |
                <small>Ukuran</small>
            </div>
            <div class="panel-body">
                <table id="datatable3" class="table table-striped table-hover">
                    <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Aksi</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $no = 1;
                    foreach ($data as $key){
                        ?>
                        <tr class="odd gradeX">
                            <td><?= $no?></td>
                            <td><?= $key->ukuran_nama?></td>
                            <td>
                                <a href="<?= base_url("administrator/ukuran/edit/".$key->ukuran_id)?>" class="btn btn-warning"><i class="fa fa-pencil"></i></a>
                                <a onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')" href="<?= base_url("administrator/ukuran/hapus/".$key->ukuran_id)?>"class="btn btn-danger"><i class="fa fa-trash"></i></a></td>
                        </tr>
                        <?php
                        $no++;
                    }
                    ?>
                    </tbody>
                    <tfoot>
                    <tr>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Aksi</th>
                    </tr>
                    </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>

