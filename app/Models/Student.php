<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    //
    protected $fillable = [
        'sbd', 'toan', 'vat_li', 'hoa_hoc', 'sinh_hoc', 'lich_su', 'dia_li', 'gdcd', 'ngu_van', 'ngoai_ngu'
    ];

    // Tính tổng điểm của học sinh trong khối A
    public function totalBlockA()
    {
        return $this->toan + $this->vat_li + $this->hoa_hoc;
    }

    // Tính tổng điểm của học sinh trong khối B
    public function totalBlockB()
    {
        return $this->toan + $this->sinh_hoc + $this->hoa_hoc;
    }

    // Tính tổng điểm của học sinh trong khối C
    public function totalBlockC()
    {
        return $this->lich_su + $this->dia_li + $this->gdcd;
    }

    // Tính tổng điểm của học sinh trong khối D
    public function totalBlockD()
    {
        return $this->toan + $this->ngu_van + $this->ngoai_ngu;
    }
}
