<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//Pengguna
$route['administrator/profile'] = 'PenggunaController/profile';
$route['administrator/dashboard'] = 'PenggunaController';
$route['administrator/pengguna'] = 'PenggunaController/daftar';
$route['administrator/pengguna/tambah'] = 'PenggunaController/tambah';
$route['administrator/pengguna/edit/(:any)'] = 'PenggunaController/edit/$1';
$route['administrator/pengguna/hapus/(:any)'] = 'PenggunaController/delete/$1';
$route['detail_pengguna'] = 'PenggunaController/detail';

//Kategori
$route['administrator/kategori'] = 'KategoriController/daftar';
$route['administrator/kategori/tambah'] = 'KategoriController/tambah';
$route['administrator/kategori/edit/(:any)'] = 'KategoriController/edit/$1';
$route['administrator/kategori/hapus/(:any)'] = 'KategoriController/delete/$1';
//Pemesanan
$route['administrator/pemesanan'] = 'PemesananController/daftar';
$route['administrator/pemesanan/tambah'] = 'PemesananController/tambah';
$route['administrator/pemesanan/edit/(:any)'] = 'PemesananController/edit/$1';
$route['administrator/pemesanan/hapus/(:any)'] = 'PemesananController/delete/$1';
//Pembayaran
$route['administrator/pembayaran'] = 'PembayaranController/daftar';
$route['administrator/pembayaran/tambah'] = 'PembayaranController/tambah';
$route['administrator/pembayaran/edit/(:any)'] = 'PembayaranController/edit/$1';
$route['administrator/pembayaran/hapus/(:any)'] = 'PembayaranController/delete/$1';
//Ukuran
$route['administrator/ukuran'] = 'UkuranController/daftar';
$route['administrator/ukuran/tambah'] = 'UkuranController/tambah';
$route['administrator/ukuran/edit/(:any)'] = 'UkuranController/edit/$1';
$route['administrator/ukuran/hapus/(:any)'] = 'UkuranController/delete/$1';
//Tanaman
$route['administrator/tanaman'] = 'TanamanController/daftar';
$route['administrator/tanaman/tambah'] = 'TanamanController/tambah';
$route['administrator/tanaman/edit/(:any)'] = 'TanamanController/edit/$1';
$route['administrator/tanaman/hapus/(:any)'] = 'TanamanController/delete/$1';
// authentication
$route['administrator/logout'] = 'AuthController/logout';
$route['login'] = 'AuthController/login';
$route['default_controller'] = 'AuthController';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

