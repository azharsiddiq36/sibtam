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

	// authentication
	$route['administrator/logout'] = 'AuthController/logout';
    $route['login'] = 'AuthController/login';
	$route['default_controller'] = 'AuthController';
	$route['404_override'] = '';
	$route['translate_uri_dashes'] = FALSE;

