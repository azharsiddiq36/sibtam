
<h3><?= $title?>
    <br>
    <small>Sistem Informasi Bibit Tanaman</small>
</h3>
<div data-toggle="notify" data-onload data-message="&lt;b&gt;Terdapat <?=$data?> tanaman yang stoknya berada dibawah 10&lt;/b&gt;." data-options="{&quot;status&quot;:&quot;warning&quot;, &quot;pos&quot;:&quot;top-right&quot;}"
     class="hidden-xs"></div>
<div data-toggle="notify" data-onload data-message="&lt;b&gt;Terdapat <?=$stok?> tanaman yang stoknya sudah habis&lt;/b&gt;." data-options="{&quot;status&quot;:&quot;danger&quot;, &quot;pos&quot;:&quot;top-right&quot;}"
     class="hidden-xs"></div>
<section class="col-md-9">
    <div class="row">

        <aside class="col-md-4">
            <!-- START widget-->
            <!-- END widget-->
            <!-- START widget-->
            <a href="<?= base_url('administrator/pengguna')?>">
                <div data-toggle="play-animation" data-play="fadeInDown" data-offset="0" data-delay="100" class="panel widget">
                    <div class="panel-body bg-primary">
                        <div class="row row-table row-flush">
                            <div class="col-xs-8">
                                <p class="mb0">Pengguna</p>

                            </div>
                            <div class="col-xs-4 text-center">
                                <em class="fa fa-user fa-2x"><sup class="fa fa-plus"></sup>
                                </em>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
            <!-- START widget-->
        </aside>
        <aside class="col-md-4">
            <!-- START widget-->
            <!-- END widget-->
            <!-- START widget-->
            <a href="<?= base_url('administrator/tanaman')?>">
                <div data-toggle="play-animation" data-play="fadeInDown" data-offset="0" data-delay="100" class="panel widget">
                    <div class="panel-body bg-success">
                        <div class="row row-table row-flush">
                            <div class="col-xs-8">
                                <p class="mb0">Tanaman</p>

                            </div>
                            <div class="col-xs-4 text-center">
                                <em class="fa fa-user fa-2x"><sup class="fa fa-plus"></sup>
                                </em>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
            <!-- START widget-->
        </aside>
        <aside class="col-md-4">
            <!-- START widget-->
            <!-- END widget-->
            <!-- START widget-->
            <a href="<?= base_url('administrator/pemesanan')?>">
                <div data-toggle="play-animation" data-play="fadeInDown" data-offset="0" data-delay="100" class="panel widget">
                    <div class="panel-body bg-warning">
                        <div class="row row-table row-flush">
                            <div class="col-xs-8">
                                <p class="mb0">Pemesanan</p>

                            </div>
                            <div class="col-xs-4 text-center">
                                <em class="fa fa-user fa-2x"><sup class="fa fa-plus"></sup>
                                </em>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
            <!-- START widget-->
        </aside>
        <aside class="col-md-4">
            <!-- START widget-->
            <!-- END widget-->
            <!-- START widget-->
            <a href="<?= base_url('administrator/pembayaran')?>">
                <div data-toggle="play-animation" data-play="fadeInDown" data-offset="0" data-delay="100" class="panel widget">
                    <div class="panel-body bg-purple">
                        <div class="row row-table row-flush">
                            <div class="col-xs-8">
                                <p class="mb0">pembayaran</p>

                            </div>
                            <div class="col-xs-4 text-center">
                                <em class="fa fa-user fa-2x"><sup class="fa fa-plus"></sup>
                                </em>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
            <!-- START widget-->
        </aside>
        <aside class="col-md-4">
            <!-- START widget-->
            <!-- END widget-->
            <!-- START widget-->
            <a href="<?= base_url('administrator/kategori')?>">
                <div data-toggle="play-animation" data-play="fadeInDown" data-offset="0" data-delay="100" class="panel widget">
                    <div class="panel-body bg-gray-darker">
                        <div class="row row-table row-flush">
                            <div class="col-xs-8">
                                <p class="mb0">Kategori</p>

                            </div>
                            <div class="col-xs-4 text-center">
                                <em class="fa fa-user fa-2x"><sup class="fa fa-plus"></sup>
                                </em>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
            <!-- START widget-->
        </aside>
        <aside class="col-md-4">
            <!-- START widget-->
            <!-- END widget-->
            <!-- START widget-->
            <a href="<?= base_url('administrator/ukuran')?>">
                <div data-toggle="play-animation" data-play="fadeInDown" data-offset="0" data-delay="100" class="panel widget">
                    <div class="panel-body bg-info">
                        <div class="row row-table row-flush">
                            <div class="col-xs-8">
                                <p class="mb0">Ukuran</p>

                            </div>
                            <div class="col-xs-4 text-center">
                                <em class="fa fa-user fa-2x"><sup class="fa fa-plus"></sup>
                                </em>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
            <!-- START widget-->
        </aside>

    </div>
</section>
<aside class="col-md-3">
    <!-- START widget-->
    <!-- END widget-->
    <!-- START widget-->
    <a href="<?= base_url('administrator/cetak')?>">
        <div data-toggle="play-animation" data-play="fadeInDown" data-offset="0" data-delay="100" class="panel widget">
            <div class="panel-body bg-green">
                <div class="row row-table row-flush">
                    <div class="col-xs-8">
                        <p class="mb0">Cetak</p>

                    </div>
                    <div class="col-xs-4 text-center">
                        <em class="fa fa-user fa-2x"><sup class="fa fa-plus"></sup>
                        </em>
                    </div>
                </div>
            </div>

        </div>
    </a>
    <!-- START widget-->
</aside>
<?php if ($data >= 1 ){
    ?>
    <aside class="col-md-3">
        <!-- START widget-->
        <!-- END widget-->
        <!-- START widget-->
        <a>
            <div data-toggle="play-animation" data-play="fadeInDown" data-offset="0" data-delay="100" class="panel widget">
                <div class="panel-body bg-warning">
                    <div class="row row-table row-flush">
                        <div class="col-xs-8">
                            <p class="mb0">Terdapat <?= $data?> tanaman yang stoknya hampir habis</p>
                        </div>
                        <div class="col-xs-4 text-center">

                        </div>
                    </div>
                </div>

            </div>
        </a>
        <!-- START widget-->
    </aside>
<?php
}?>
<?php if ($stok >=1){
    ?>
    <aside class="col-md-3">
        <!-- START widget-->
        <!-- END widget-->
        <!-- START widget-->
        <a>
            <div data-toggle="play-animation" data-play="fadeInDown" data-offset="0" data-delay="100" class="panel widget">
                <div class="panel-body bg-danger">
                    <div class="row row-table row-flush">
                        <div class="col-xs-8">
                            <p class="mb0">Terdapat <?= $data?> tanaman yang stoknya sudah habis</p>
                        </div>
                        <div class="col-xs-4 text-center">

                        </div>
                    </div>
                </div>

            </div>
        </a>
        <!-- START widget-->
    </aside>
    <?php
}?>

