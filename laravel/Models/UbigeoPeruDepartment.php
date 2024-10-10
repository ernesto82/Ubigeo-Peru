<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UbigeoPeruDepartment extends Model
{
    use HasFactory;

    protected $table = 'ubigeo_peru_departments';
    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $keyType = 'string';

    public function provinces()
    {
        return $this->hasMany(UbigeoPeruProvince::class, 'department_id', 'id');
    }

    public function districts()
    {
        return $this->hasMany(UbigeoPeruDistrict::class, 'department_id', 'id');
    }
}
