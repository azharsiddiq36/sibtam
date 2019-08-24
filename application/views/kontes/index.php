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
                            <li><a href="<?= base_url('administrator/kontes/tambah')?>">Tambah Kontes</a></li>
                        </ul>
                    </header>
                    <section>
                        <table class="datatable table table-striped table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Provinsi</th>
                                <th>Kabupaten</th>
                                <th>Kecamatan</th>
                                <th>Desa</th>
                                <th>Tanggal</th>
                                <th>Kuota</th>
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
                                    <td><?= $key->kontes_nama?></td>
                                    <td><?= $key->kontes_provinsi?></td>
                                    <td><?= $key->kontes_kabupaten?></td>
                                    <td><?= $key->kontes_kecamatan?></td>
                                    <td><?= $key->kontes_desa?></td>
                                    <td><?= $key->kontes_tanggal_mulai?></td>
                                    <td><?= $key->kontes_jumlah_pemesan."/".$key->kontes_kuota?></td>
                                    <td><?= $key->kontes_nomor?></td>
                                    <td><?php
                                        if ($key->kontes_status == 'selesai'){
                                            ?>
                                            <span class="label label-success"><?= $key->kontes_status?></span>
                                        <?php
                                        }
                                        else if ($key->kontes_status == 'menunggu'){
                                            ?>
                                            <span class="label label-warning"><?= $key->kontes_status?></span>
                                            <?php
                                        }
                                        else{
                                            ?>
                                            <span class="label label-primary"><?= $key->kontes_status?></span>
                                        <?php
                                        }

                                        ?></td>
                                    <td><a href="" class="btn btn-primary btn-sm"><span class="elusive icon-eye-open"></span></a>
                                        <a href="<?= base_url("administrator/kontes/edit/".$key->kontes_id)?>" class="btn btn-warning btn-sm"><span class="elusive icon-pencil"></span></a>
                                        <a onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')" href="<?= base_url("administrator/kontes/hapus/".$key->kontes_id)?>"class="btn btn-danger btn-sm"><span class="elusive icon-remove"></span></a></td>
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