<a type="button" class="btn btn-primary pull-right" href="<?= base_url('administrator/tanaman/tambah')?>">
    <em class="fa fa-plus-circle fa-fw mr-sm"></em>Add Item</a>
<h3><?= $title?>
    <br>
    <small>Sistem Informasi Bibit Tanaman</small>
</h3>
<?php if ($this->session->flashdata('msg')){
    ?>
    <div data-toggle="notify" data-onload data-message="&lt;b&gt;Selamat ! <?= $this->session->flashdata('msg')?>&lt;/b&gt;." data-options="{&quot;status&quot;:&quot;success&quot;, &quot;pos&quot;:&quot;top-right&quot;}"
    <?php
}?>
<div class="row">

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">Data Tabel |
                <small>Tanaman</small>
            </div>
            <div class="panel-body">
                <table id="datatable3" class="table table-striped table-hover">
                    <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Kategori</th>
                        <th>Ukuran</th>
                        <th>Stok</th>
                        <th>Harga</th>
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
                            <td><?= $key->tanaman_nama?></td>
                            <td><?= $key->kategori_nama?></td>
                            <td><?= $key->ukuran_nama?></td>
                            <td><?= $key->tanaman_stok?></td>
                            <td><?= $key->tanaman_harga_satuan?></td>
                            <td>
                                <a href="<?= base_url("administrator/tanaman/edit/".$key->tanaman_id)?>" class="btn btn-warning"><i class="fa fa-edit"></i></a>
                                <a onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')" href="<?= base_url("administrator/tanaman/hapus/".$key->tanaman_id)?>"class="btn btn-danger"><i class="fa fa-trash"></i></a></td>
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
                        <th>Kategori</th>
                        <th>Ukuran</th>
                        <th>Stok</th>
                        <th>Harga</th>
                        <th>Aksi</th>
                    </tr>
                    </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>

