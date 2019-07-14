<?php


namespace App\Extension\Log\Processors;


use Webpatser\Uuid\Uuid;

class UidProcessor
{
    private $uuid;

    /**
     * UidProcessor constructor.
     *
     * @param int $length
     * @author chenpeng1@guahao.com
     */
    public function __construct($length = 7)
    {
        if (!defined('LOG_UUID')) {
            if (!is_int($length) || $length > 32 || $length < 1) {
                throw new \InvalidArgumentException('The uid length must be an integer between 1 and 32');
            }

            $this->uuid = strtoupper(substr(hash('md5', Uuid::generate()->string), 0, $length));
        }

    }

    /**
     * 获取频道名称
     *
     * @param array $record
     *
     * @return array
     * @author chenpeng1@guahao.com
     */
    public function __invoke(array $record)
    {

        $record['extra']['uid'] = $this->uuid;

        return $record;
    }
}
