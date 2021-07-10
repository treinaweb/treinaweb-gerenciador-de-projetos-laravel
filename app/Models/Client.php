<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = ['nome', 'endereco', 'observacao'];
    
    use HasFactory;

    /**
     * Define a relação com projeto
     *
     * @return void
     */
    public function projects()
    {
        return $this->hasMany(Project::class, 'client_id', 'id');
    }
}
