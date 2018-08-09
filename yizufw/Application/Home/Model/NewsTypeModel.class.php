<?php

namespace Home\Model;

use Think\Model;
use Think\Page;

class NewsTypeModel extends Model
{

    public function checkAll(){
        $type = M('NewsType');
        $res = $type->select();
        return $res;
    }

}