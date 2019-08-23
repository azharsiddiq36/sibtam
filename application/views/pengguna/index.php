<div id="wrapper">

    <!-- Main page header -->
    <section class="container" role="main">
        <div class="row">
            <!-- Data block -->
            <article class="col-sm-12">
                <div class="dark data-block">
                    <header>
                        <h2><?= $title?></h2>
                        <ul class="data-header-actions">
                            <li><a href="<?= base_url('administrator/pengguna/tambah')?>">Tambah Pengguna</a></li>
                        </ul>
                    </header>
                    <section>
                        <table class="datatable table table-striped table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Hak Akses</th>
                                <th>Nomor</th>
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
                                    <td><?= $key->pengguna_nama?></td>
                                    <td><?= $key->pengguna_email?></td>
                                    <td><?= $key->pengguna_hak_akses?></td>
                                    <td><?= $key->pengguna_nomor?></td>
                                    <td><?php
                                        if ($key->pengguna_status == 'aktif'){
                                            ?>
                                            <span class="label label-success"><?= $key->pengguna_status?></span>
                                        <?php
                                        }
                                        else{
                                            ?>
                                            <span class="label label-danger"><?= $key->pengguna_status?></span>
                                        <?php
                                        }

                                        ?></td>
                                    <td><a href="" class="btn btn-primary btn-sm"><span class="elusive icon-eye-open"></span></a>
                                        <a href="<?= base_url("administrator/pengguna/edit/".$key->pengguna_id)?>" class="btn btn-warning btn-sm"><span class="elusive icon-pencil"></span></a>
                                        <a onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')" href="<?= base_url("administrator/pengguna/hapus/".$key->pengguna_id)?>"class="btn btn-danger btn-sm"><span class="elusive icon-remove"></span></a></td>
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