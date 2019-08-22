<div class="container-fluid">
    <!-- Begin Page Header-->
    <?php if ($this->session->flashdata('msg')){
        ?>
        <div class="auto-hide alert alert-success" role="alert">
            <strong>Selamat !</strong> <?= $this->session->flashdata('msg')?>
        </div>
        <?php
    }?>

    <div class="row">
        <div class="page-header">
            <div class="d-flex align-items-center">
                <h2 class="page-header-title"><?= $title?></h2>
                <div>
                    <div class="page-header-tools">
                        <a class="btn btn-gradient-01" href="<?= base_url("tambah_pengguna")?>">Tambah Pengguna</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xl-12">
            <!-- Sorting -->
            <div class="widget has-shadow">
                <div class="widget-header bordered no-actions d-flex align-items-center">
                    <h4>Tabel Pengguna</h4>
                </div>
                <div class="widget-body">
                    <div class="table-responsive">
                        <table id="sorting-table" class="table mb-0">
                            <thead>
                            <tr>
                                <th>No</th>
                                <th>Email</th>
                                <th>Nama</th>
                                <th>Hak Akses</th>
                                <th>Nomor HP</th>
                                <th><span style="width:100px;">Status</span></th>
                                <th>Aksi</th>
                            </tr>
                            </thead>
                            <tbody>

                            <?php
                            $no = 1;
                            foreach ($data as $key){?>
                            <tr>
                                <td><span class="text-primary"><?= $no++?></span></td>
                                <td><?= $key->pengguna_nama?></td>
                                <td><?= $key->pengguna_email?></td>
                                <td><?= $key->pengguna_hak_akses?></td>
                                <td><?= $key->pengguna_nomor?></td>
                                <?php
                                if($key->pengguna_status == "aktif"){
                                ?>
                                    <td><span style="width:100px;"><span class="badge-text badge-text-small info"><?= $key->pengguna_status?></span></span></td>
                                <?php
                                }
                                else{
                                ?>
                                    <td><span style="width:100px;"><span class="badge-text badge-text-small danger"><?= $key->pengguna_status?></span></span></td>
                                <?php
                                }
                                ?>

                                <td class="td-actions">
                                    <a class ="btn-detail"data-id = "<?= $key->pengguna_id?>" data-toggle="modal" data-target="#modal_pengguna"><i class="la la-eye edit"></i></a>
                                    <a href="<?= base_url("edit_pengguna/".$key->pengguna_id)?>"><i class="la la-edit edit"></i></a>
                                    <a onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')" href="<?= base_url("delete_pengguna/".$key->pengguna_id)?>"><i class="la la-close delete"></i></a>
                                </td>
                            </tr>
                            <?php }?>


                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- End Sorting -->

        </div>
    </div>
    <!-- Begin Centered Modal -->

    <div id="modal_pengguna" class="modal fade">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Rincian Pengguna</h4>
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">×</span>
                        <span class="sr-only">close</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="widget-body">
                        <div class="mt-5">
                            <img src="assets/img/avatar/avatar-01.jpg" alt="..." style="width: 120px;" class="avatar rounded-circle d-block mx-auto">
                        </div>
                        <h3 class="text-center mt-3 mb-1"><label id = "nama"></label></h3>
                        <p class="text-center"><label id = "email"></label></p>
                        <div class="em-separator separator-dashed"></div>
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link" href="javascript:void(0)"><i class="la la-phone la-2x align-middle pr-2"></i><label id = "nomor"></label></a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="javascript:void(0)"><i class="la la-key la-2x align-middle pr-2"></i><label id = "hak_akses"></label></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="javascript:void(0)"><i class="la la-intersex la-2x align-middle pr-2"></i><label id="jk"></label></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="javascript:void(0)"><i class="la la-map-marker la-2x align-middle pr-2"></i><label id = "alamat"></label></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="javascript:void(0)"><i class="la la-user la-2x align-middle pr-2"></i><label id = "status"></label></a>
                            </li>
                        </ul>
                        <div id="percobaan"></div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-shadow" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save</button>
                </div>
            </div>
        </div>
    </div>