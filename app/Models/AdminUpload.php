<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminUpload extends Model
{
    use HasFactory;

    protected $table = 'admin_uploads';


    public function admin(){
        return $this->belongsTo(Admin::class);
    }

    protected $fillable = [
        'name_content',
        'admin_id',
        'content_charged',
        'is_arrived',
        'duration',
    ];
}
