<?php
namespace util\date;


class ExcelDate
{
    public static function toTime(int $time)
    {
        if (empty($time)){
            return new \Exception("数据不能为空");
        }
        if (is_int($time)){
            return  new \Exception("数据类型不匹配 需要为 int 类型数据");
        }
        $d = 25569;
        $fixationT = 24 * 60 * 60;
        return gmdate('Y-m-d',($time - $d) * $fixationT);
    }

}