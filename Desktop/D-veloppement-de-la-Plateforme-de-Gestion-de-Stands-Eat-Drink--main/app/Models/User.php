<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * Les attributs assignables en masse.
*
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'nom_entreprise',
        'role',
    ];

    /**
     * Les attributs cachés pour la sérialisation.
*
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Les attributs castés.
*
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
}

    /**
     * Relation: un utilisateur -> stand.
     */
    public function stand()
    {
        return $this->hasOne(Stand::class);
}

    /**
     * Relation: un utilisateur peut avoir plusieurs produits via son stand.
     */
    public function products()
    {
        return $this->hasManyThrough(Product::class, Stand::class);
}
}
