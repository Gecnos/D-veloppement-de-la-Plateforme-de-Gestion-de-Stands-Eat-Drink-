<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

require_once __DIR__ . '/../../vendor/autoload.php';

class Stand extends Model
{
    protected $fillable = [
        'nom_stand',
        'description',
        'user_id',
    ];
}

Schema::create('stands', function (Blueprint $table) {
    $table->id();
    $table->string('nom_stand');
    $table->text('description')->nullable();
    $table->foreignId('user_id')->constrained()->onDelete('cascade');
    $table->timestamps();
});

public function user() {
    return $this->belongsTo(User::class);
}

public function user(){
    return $this->belongsTo(User::class);
}


1