<?php

namespace App\Common\Models;

use App\Common\Extensions\Code;
use App\Common\PublicModel;

class Carousel extends PublicModel
{
    protected $table = 'carousels';

    protected $primaryKey = "id";

    protected $guarded = ['id'];

    public static function getList(int $type = Code::YES)
    {
        // 一般情况下新增的ID越大所以此处我用id，也可以按时间排序self::CREATED_AT
        return parent::getList($type)
            ->orderBy("id", 'desc')
            ->get();
    }
}