<div class="product-area">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="section-title">
                    <h3>Daftar Bibit</h3>
                </div>
            </div>
        </div>
        <div class="product-area-inner">
            <div class="row">

                <div class="product-carousel-active-3 owl-carousel">
                        <?php
                        $no = 0;
                        foreach ($data as $key){
                        ?>

                    <div class="col-sm-12">
                        <!-- single product -->
                        <div class="single-product-area">
                            <div class="product-wrapper gridview">
                                <div class="list-col4">
                                    <div class="product-image">
                                        <a href="index.html">
                                            <img src="<?= base_url() ?>assets/img/upload/<?= $key->tanaman_foto ?>"
                                                 alt="">
                                        </a>

                                    </div>
                                </div>
                                <div class="list-col8">
                                    <div class="product-info">
                                        <h2><a href="single-product.html"><?= $key->tanaman_nama ?></a></h2>
                                        <span class="price">
                                            Rp. <?= $key->tanaman_harga_satuan?>
                                                    </span>
                                    </div>
                                    <div class="product-hidden">
                                        <div class="add-to-cart">
                                            <a href="<?= base_url('pemesanan/'.$key->tanaman_id)?>">Pesan</a>
                                        </div>
                                        <div class="star-actions">
                                            <div class="product-rattings">
                                                <span><i><?= $key->kategori_nama?></i></span>
                                                <span><i>|</i></span>
                                                <span><i><?= $key->ukuran_nama?></i></span>
                                            </div>
                                            <ul class="actions">
                                                <li><span>Stok : </span></li>
                                                <li><span><?= $key->tanaman_stok?></span></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                            <?php


                            } ?>



                </div>
            </div>
        </div>
    </div>
</div>
