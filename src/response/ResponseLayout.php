<?php
namespace util\response;

class ResponseLayout
{
    public static function apply($bool=true,$msg='',$data=array())
    {
        try{
            $result = [];
            $result['status'] = $bool ? 1 : 0;
            if (is_array($msg)){
                $result['msg'] = $bool ? '成功！' : '失败！';
                $result['data'] = $msg;
            }else{
                if (empty($msg)){
                    $result['msg'] = $bool ? '成功！' : '失败！';
                }else{
                    $result['msg'] = $msg;
                }
                $result['data'] = !empty($data) ? $data : '';
            }
            return response() -> json($result);
        }catch (Exception $exception){
            throw new Exception('System Error!');
        }

    }
}