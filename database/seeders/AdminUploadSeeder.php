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
                'is_arrived' => true,
                'duration' => 120
            ],
            [
                'name_content' => 'La Bella e la Bestia',
                'content_charged' => 'La Bella e la Bestia è un classico animato della Disney...',
                'is_arrived' => true,
                'duration' => 90
            ],
            [
                'name_content' => 'Avengers: Endgame',
                'content_charged' => 'Avengers: Endgame è un film di supereroi basato sui personaggi dei fumetti Marvel...',
                'is_arrived' => true,
                'duration' => 180
            ],
            [
                'name_content' => 'Interstellar',
                'content_charged' => 'Interstellar è un film di fantascienza diretto da Christopher Nolan...',
                'is_arrived' => true,
                'duration' => 169
            ],
        ];



        foreach ($admin_uploads as $upload) {
           $newAdminUpload = new AdminUpload();
           $newAdminUpload->name_content = $upload['name_content'];
           $newAdminUpload->content_charged = $upload['content_charged'];
           $newAdminUpload->is_arrived = $upload['is_arrived'];
           $newAdminUpload->duration = $upload['duration'];
           $newAdminUpload->admin_id = Admin::inRandomOrder()->first()->id;
           $newAdminUpload->save();
        }
    }
}
