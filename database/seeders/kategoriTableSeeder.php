<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class kategoriTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kategori')->insert(
            array(
            [
                'id_kategori' => '19',
                'nama_kategori' => 'Teknologi',
                'username' => '',
                'kategori_seo' => 'teknologi',
                'aktif' => 'Y'
            ],
            [
                'id_kategori' => '2',
                'nama_kategori' => 'Olahraga',
                'username' => '',
                'kategori_seo' => 'olahraga',
                'aktif' => 'Y'  
            ],
            [
                'id_kategori' => '21',
                'nama_kategori' => 'Ekonomi',
                'username' => '',
                'kategori_seo' => 'ekonomi',
                'aktif' => 'N'  
            ],
            [
                'id_kategori' => '22',
                'nama_kategori' => 'Politik',
                'username' => '',
                'kategori_seo' => 'politik',
                'aktif' => 'N'  
            ],
            [
                'id_kategori' => '23',
                'nama_kategori' => 'Hiburan',
                'username' => '',
                'kategori_seo' => 'hiburan',
                'aktif' => 'Y'  
            ],
            [
                'id_kategori' => '31',
                'nama_kategori' => 'Kesehatan',
                'username' => '',
                'kategori_seo' => 'kesehatan',
                'aktif' => 'Y'  
            ],
            [
                'id_kategori' => '36',
                'nama_kategori' => 'Komunitas',
                'username' => '',
                'kategori_seo' => 'komunitas',
                'aktif' => 'N'  
            ],
            [
                'id_kategori' => '34',
                'nama_kategori' => 'Seni & Budaya',
                'username' => '',
                'kategori_seo' => 'seni--budaya',
                'aktif' => 'N'  
            ],
            [
                'id_kategori' => '37',
                'nama_kategori' => 'Sekitar kita',
                'username' => '',
                'kategori_seo' => 'sekitar-kita',
                'aktif' => 'N'  
            ],
            [
                'id_kategori' => '39',
                'nama_kategori' => 'Internasional',
                'username' => '',
                'kategori_seo' => 'internasional',
                'aktif' => 'Y'  
            ],
            [
                'id_kategori' => '40',
                'nama_kategori' => 'Kuliner',
                'username' => '',
                'kategori_seo' => 'kuliner',
                'aktif' => 'Y'  
            ],
            [
                'id_kategori' => '41',
                'nama_kategori' => 'Metropolitan',
                'username' => '',
                'kategori_seo' => 'metropolitan',
                'aktif' => 'N'  
            ],
            [
                'id_kategori' => '42',
                'nama_kategori' => 'Dunia Islam',
                'username' => '',
                'kategori_seo' => 'dunia-islam',
                'aktif' => 'N'  
            ],
            [
                'id_kategori' => '44',
                'nama_kategori' => 'Wisata',
                'username' => '',
                'kategori_seo' => 'wisata',
                'aktif' => 'N'  
            ],
            [
                'id_kategori' => '46',
                'nama_kategori' => 'Daerah',
                'username' => '',
                'kategori_seo' => 'daerah',
                'aktif' => 'N'  
            ],
            [
                'id_kategori' => '47',
                'nama_kategori' => 'Gaya Hidup',
                'username' => '',
                'kategori_seo' => 'gaya-hidup',
                'aktif' => 'N'  
            ],
            [
                'id_kategori' => '48',
                'nama_kategori' => 'Hukum',
                'username' => '',
                'kategori_seo' => 'hukum',
                'aktif' => 'N'  
            ],
            [
                'id_kategori' => '52',
                'nama_kategori' => 'Sejarah Indonesia',
                'username' => 'admin',
                'kategori_seo' => 'sejarah-indonesia',
                'aktif' => 'N'
                  
            ],
            [
                'id_kategori' => '53',
                'nama_kategori' => 'Tokoh',
                'username' => 'admin',
                'kategori_seo' => 'tokoh',
                'aktif' => 'N'
            ],
            [
                'id_kategori' => '54',
                'nama_kategori' => 'Info',
                'username' => 'admin',
                'kategori_seo' => 'info',
                'aktif' => 'Y'   
            ])
        );
    }
}
