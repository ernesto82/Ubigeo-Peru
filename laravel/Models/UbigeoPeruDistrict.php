<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UbigeoPeruDistrict extends Model
{
    use HasFactory;

    protected $table = 'ubigeo_peru_districts';
    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $keyType = 'string';

    public function province()
    {
        return $this->belongsTo(UbigeoPeruProvince::class, 'province_id', 'id');
    }

    public function department()
    {
        return $this->belongsTo(UbigeoPeruDepartment::class, 'department_id', 'id');
    }
}
