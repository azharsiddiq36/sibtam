<div id="wrapper">

    <!-- Main page header -->
    <section class="container" role="main">
        <div class="row">
            <!-- Data block -->
            <?php if ($this->session->flashdata('msg')){
                ?>
                <div class="auto-hide alert alert-success" role="alert">
                    <strong>Selamat !</strong> <?= $this->session->flashdata('msg')?>
                </div>
                <?php
            }?>
            <article class="col-sm-12">
                <div class="dark data-block">
                    <header>
                        <h2><?= $title?></h2>
                        <ul class="data-header-actions">
                            <li><a href="<?= base_url('administrator/toko/tambah')?>">Tambah toko</a></li>
                        </ul>
                    </header>
                    <section>
                        <table class="datatable table table-striped table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Nomor</th>
                                <th>Pemilik</th>
                                <th>Alamat</th>
                                <th>Status</th>
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
                                    <td><?= $key->toko_nama?></td>
                                    <td><?= $key->toko_nomor?></td>
                                    <td><?= $key->toko_pengguna_id?></td>
                                    <td><?= $key->toko_alamat?></td>
                                    <td><span class="label label-<?php
                                        if ($key->toko_status == 'menunggu'){
                                            echo 'warning';
                                        }else if($key->toko_status == 'aktif'){
                                            echo 'success';
                                        }
                                        else{
                                            echo 'danger';
                                        }
                                        ?>"><?= $key->toko_status?></span></td>
                                    <td><a href="<?= base_url("administrator/toko/edit/".$key->toko_id)?>"class="btn btn-primary btn-sm"><span class="elusive icon-eye-open"></span></a>
                                        <a onclick="return confirm('Apakah anda yakin mengaktifkan toko ini?')" href="<?= base_url("administrator/toko/edit/".$key->toko_id)?>"class="btn btn-success btn-sm"><span class="elusive icon-ok"></span></a>
                                        <a onclick="return confirm('Apakah anda yakin ingin menutup toko ini?')" href="<?= base_url("administrator/toko/hapus/".$key->toko_id)?>"class="btn btn-danger btn-sm"><span class="elusive icon-remove"></span></a></td>
                                </tr>
                                <?php
                                $no++;
                            }
                            ?>
                            </tbody>
                        </table>

                    </section>
                </div>
            </article>

            <!-- /Data block -->

        </div>
        <!-- /Grid row -->

    </section>
    <!-- /Main page container -->

</div>