<?php


namespace App\Libraries;


class StringHelper
{
    /********************
     * 创建人: Rex.栗田庆
     * 邮件: litq@guahao.com
     * 创建日期: 2019-07-14
     * 创建时间: 15:04
     * 功能描述: 判断字符串是否含有中文
     * @param $str :验证字符串
     * @return boolean
     ********************/
    public function hasChinese(string $str)
    {
        $result = false;
        if (preg_match('/^[\x{4e00}-\x{9fa5}]+$/u', $str) > 0) {
            $result = true;
        } elseif (preg_match('/[\x{4e00}-\x{9fa5}]/u', $str) > 0) {
            $result = true;
        }
        return $result;
    }

    /********************
     * 创建人: Rex.栗田庆
     * 邮件: litq@guahao.com
     * 创建日期: 2019-07-14
     * 创建时间: 15:10
     * 功能描述: 提取中文
     * @param $str :字符串
     * @return string
     ********************/
    public function extractChinese(string $str)
    {
        $preg = "/[\x{4e00}-\x{9fa5}]+/u";
        if (preg_match_all($preg, $str, $matches)) {
            return implode('', $matches);
        }
        return '';
    }


}
