<?php

namespace App\Http\Controllers\Test;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TestController extends Controller{


    function  xmlTest(){
        $xml_str ='<xml><ToUserName><![CDATA[gh_5102346a3a94]]></ToUserName>
<FromUserName><![CDATA[o3yQ4t7dxMNH1vv0lxV6SGrYhpgU]]></FromUserName>
<CreateTime>1576220014</CreateTime>
<MsgType><![CDATA[text]]></MsgType>
<Content><![CDATA[4444]]></Content>
<MsgId>22566043325870616</MsgId>
</xml>';

        $xml_obj=simplexml_load_string($xml_str);
        echo  '<pre>';print_r($xml_obj);echo '</pre>';
        echo  '<pre>';print_r($xml_obj);echo '</pre>'; echo '<hr>';
        echo  'ToUserName:'.$xml_obj->ToUserName;  echo '<br>';
        echo  'FromUserName:'.$xml_obj->FromUserName; echo '<br>';
    }
}


