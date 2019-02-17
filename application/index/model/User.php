<?php
namespace app\index\model;

use think\Model;

class User extends Model
{
    public function gettest1($userId)
    {
        $data = \Db::name('test1')->where('user_id=:userId', ['userId' => $userId])->select();
        $data1 = \Db::name('test1')->where( ['user_id' => $userId])->select();
        return array_merge($data,$data1);

    }
}