<div id="wrapper">

    <!-- Main page header -->
    <section class="container" role="main">
        <div class="row">
            <!-- Data block -->
            <?php if ($this->session->flashdata('msg')) {
                ?>
                <div class="auto-hide alert alert-success" role="alert">
                    <strong>Selamat !</strong> <?= $this->session->flashdata('msg') ?>
                </div>
                <?php
            } ?>
            <article class="col-sm-12">
                <div class="dark data-block">
                    <header>
                        <h2><?= $title ?></h2>
                        <ul class="data-header-actions">
                            <li><a href="<?= base_url('administrator/postingan/tambah') ?>">Tambah Postingan</a></li>
                        </ul>
                    </header>
                    <section>
                        <table class="datatable table table-striped table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Pengguna</th>
                                <th>Kategori</th>
                                <th>Tanggal</th>
                                <th>Deskripsi</th>
                                <th>Aksi</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            $no = 1;
                            foreach ($data as $key) {
                                ?>
                                <tr class="odd gradeX">
                                    <td><?= $no ?></td>
                                    <td><?= $key->postingan_id_pengguna ?></td>
                                    <td><?= $key->postingan_kategori ?></td>
                                    <td><?= $key->postingan_tanggal ?></td>
                                    <td><?php
                                        if (strlen($key->postingan_deskripsi) < 40) {
                                            echo $key->postingan_deskripsi;
                                        } else {
                                            echo substr($key->postingan_deskripsi, 0, 40) . " <b>.....</b>";
                                        } ?></td>


                                    <td><a href="" class="btn btn-primary btn-sm"><span
                                                    class="elusive icon-eye-open"></span></a>
                                    </td>
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