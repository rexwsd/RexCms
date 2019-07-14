<?php


namespace App\Services;


use Illuminate\Support\Facades\Log;

class AvatarService
{
    /********************
     * 创建人: Rex.栗田庆
     * 邮件: litq@guahao.com
     * 创建日期: 2019-07-14
     * 创建时间: 15:32
     * 功能描述: 中文字符串截取后几位
     * @param string $str
     * @param int $length
     * @return bool|string
     *******************/
    public function extractTheTail(string $str, int $length)
    {
        try {
            $result = mb_substr($str, -$length);
            app('log')->channel('avatar')->debug('中文字符串截取后几位', [
                "params" => [
                    "str" => $str,
                    "length" => $length,
                ],
                "result" => $result
            ]);
            return $result;
        } catch (\Exception $exception) {
            app('log')->channel('avatar')->info('中文字符串截取后几位', [
                "params" => [
                    "str" => $str,
                    "length" => $length,
                ],
                "exception" => $exception
            ]);
        }

    }
}
