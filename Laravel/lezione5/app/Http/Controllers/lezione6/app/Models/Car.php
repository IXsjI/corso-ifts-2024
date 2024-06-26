<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Car extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'hp', 'brand-id'];
    //one to one HasOne
    //one to many HasMany | BelongsTo
    //many to many BelongsToMany
    public function brand():BelongsTo{
        return $this->belongsTo(Brand::class);
    }
    
    public function getNameToUpperAttribute(){
        return strtoupper($this->name);
    }
}

