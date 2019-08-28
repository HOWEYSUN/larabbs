<?php

namespace App\Observers;

use App\Models\User;

// creating, created, updating, updated, saving,
// saved,  deleting, deleted, restoring, restored

class UserObserver
{
    public function creating(User $user)
    {
        //
    }

    public function updating(User $user)
    {
        //
    }

    public function saving(User $user)
    {
        // 这样写扩展性更高，只有空的时候才指定默认头像
        if (empty($user->avatar)){
            $user->avatar = 'http://image.baidu.com/search/detail?ct=503316480&z=0&ipn=d&word=umf&step_word=&hs=0&pn=7&spn=0&di=38060&pi=0&rn=1&tn=baiduimagedetail&is=0%2C0&istype=0&ie=utf-8&oe=utf-8&in=&cl=2&lm=-1&st=undefined&cs=1330480049%2C1901143759&os=3418073527%2C2998705111&simid=3545234811%2C391181366&adpicid=0&lpn=0&ln=961&fr=&fmq=1566979186731_R&fm=&ic=undefined&s=undefined&hd=undefined&latest=undefined&copyright=undefined&se=&sme=&tab=0&width=undefined&height=undefined&face=undefined&ist=&jit=&cg=&bdtype=0&oriquery=&objurl=http%3A%2F%2Fimagev2.xmcdn.com%2Fgroup42%2FM07%2FAC%2F0B%2FwKgJ9FrER46DvJ_1AAH2nXsrDlY666.jpg!strip%3D1%26quality%3D7%26magick%3Djpg%26op_type%3D5%26upload_type%3Dalbum%26name%3Dmobile_large%26device_type%3Dios&fromurl=ippr_z2C%24qAzdH3FAzdH3Fooo_z%26e3Bxt4wswyw_z%26e3Bv54AzdH3F8alcn0c0cAzdH3Fwsk74AzdH3F89mm8bnmAzdH3F&gsm=0&rpstart=0&rpnum=0&islist=&querylist=&force=undefined';
        }
    }
}
