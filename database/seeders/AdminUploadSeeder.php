<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Admin;
use App\Models\AdminUpload;

class AdminUploadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin_uploads = [
            [
                'name_content' => 'Il Ragazzo Invisibile',
                'content_charged' => 'Il Ragazzo Invisibile è un film fantasy...',
                'content_image' => 'https://pad.mymovies.it/filmclub/2016/08/015/locandina.jpg',
                'is_arrived' => true,
                'duration' => 120
            ],
            [
                'name_content' => 'La Bella e la Bestia',
                'content_charged' => 'La Bella e la Bestia è un classico animato della Disney...',
                'content_image' => 'https://www.ucicinemas.it/static/movie/o/2017/la-bella-e-la-bestia-il-film.jpg',
                'is_arrived' => true,
                'duration' => 90
            ],
            [
                'name_content' => 'Avengers: Endgame',
                'content_charged' => 'Avengers: Endgame è un film di supereroi basato sui personaggi dei fumetti Marvel...',
                'content_image' => 'https://lumiere-a.akamaihd.net/v1/images/p_avengersendgame_19751_e14a0104.jpeg?region=0%2C0%2C540%2C810',
                'is_arrived' => true,
                'duration' => 180
            ],
            [
                'name_content' => 'Interstellar',
                'content_charged' => 'Interstellar è un film di fantascienza diretto da Christopher Nolan...',
                'content_image' => 'https://cdn.blogo.it/iTJrXMffB7CISSrgTYitXjFHJKs=/640x641/smart/https://www.blogo.it/app/uploads/sites/3/2023/07/interstellar-torna-al-cinema-lodissea-sci-fi-di-cristopher-nolan-nelle-sale-dal-31-luglio-al-2-agosto-2.png',
                'is_arrived' => true,
                'duration' => 169
            ],
        ];



        foreach ($admin_uploads as $upload) {
           $newAdminUpload = new AdminUpload();
           $newAdminUpload->name_content = $upload['name_content'];
           $newAdminUpload->content_charged = $upload['content_charged'];
           $newAdminUpload->content_image = $upload['content_image'];
           $newAdminUpload->is_arrived = $upload['is_arrived'];
           $newAdminUpload->duration = $upload['duration'];
           $newAdminUpload->admin_id = Admin::inRandomOrder()->first()->id;
           $newAdminUpload->save();
        }
    }
}
