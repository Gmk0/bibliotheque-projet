<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Work extends Model
{
    use HasFactory;

    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'matricule',
        'titre',
        'annee_academique',
        'code_classification',
        'nbre_pages',
        'viewCount',
        'path',
        'domain_id',
        'auteur',
        'user_id',
        'publier',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'viewCount' => 'decimal:2',
        'domain_id' => 'integer',
    ];

    public function domain(): BelongsTo
    {
        return $this->belongsTo(Domain::class, 'domain_id');
    }

    public function etudiant(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
