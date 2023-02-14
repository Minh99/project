<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    public $timestamps = true;

    const DKY_MOI = 1;
    const DKY_THAY_DOI = 2;
    const TB_THAY_DOI = 3;
    const VI_PHAM_THU_HOI = 4;
    const GIAI_THE = 5;
    const LOAI_KHAC = 6;
}
