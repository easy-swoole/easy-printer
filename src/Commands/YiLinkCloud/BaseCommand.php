<?php

namespace EasySwoole\EasyPrinter\Commands\YiLinkCloud;

use EasySwoole\EasyPrinter\Commands\AbstractCommand;
use EasySwoole\Utility\Random;
use Exception;

/**
 * 基础命令
 * Class BaseCommand
 * @package Commands\YiLinkCloud
 */
class BaseCommand extends AbstractCommand
{
    protected $id;           // 当前请求的id
    protected $sign;         // 当前请求签名
    protected $timestamp;    // 当前命令的时间戳
    protected $client_id;    // 当前终端编号
    protected $access_token; // 当前请求令牌
    protected $apiUrl;          // 当前请求的路径

    /**
     * 获取请求的UUID
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * 设置请求的UUID
     * @param mixed $id
     * @return BaseCommand
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * 获取请求的签名
     * @return mixed
     */
    public function getSign()
    {
        return $this->sign;
    }

    /**
     * 设置请求的签名
     * @param mixed $sign
     * @return BaseCommand
     */
    public function setSign($sign)
    {
        $this->sign = $sign;
        return $this;
    }

    /**
     * 获取请求的时间戳
     * @return mixed
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }

    /**
     * 设置请求的时间戳
     * @param mixed $timestamp
     * @return BaseCommand
     */
    public function setTimestamp($timestamp)
    {
        $this->timestamp = $timestamp;
        return $this;
    }

    /**
     * 获取请求的ClientId
     * @return mixed
     */
    public function getClientId()
    {
        return $this->client_id;
    }

    /**
     * 设置请求的ClientId
     * @param mixed $client_id
     * @return BaseCommand
     */
    public function setClientId($client_id)
    {
        $this->client_id = $client_id;
        return $this;
    }

    /**
     * 获取当前接口的Url
     * @return mixed
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * 获取请求令牌
     * @return mixed
     */
    public function getAccessToken()
    {
        return $this->access_token;
    }

    /**
     * 设置请求令牌
     * @param mixed $access_token
     * @return BaseCommand
     */
    public function setAccessToken($access_token)
    {
        $this->access_token = $access_token;
        return $this;
    }

    /**
     * 对当前请求进行自签名
     * @param $clientSecret
     * @throws Exception
     */
    public function prepareCommand($clientSecret)
    {
        // 必须已经写入了ClientId
        if (empty($this->client_id)) {
            throw new Exception('YiLinkCloud Command ClientId Is Empty!');
        }

        // 为请求初始化必须字段
        if (empty($this->getId())) $this->setId(Random::makeUUIDV4());
        if (empty($this->getTimestamp())) $this->setTimestamp(time());

        // 创建请求签名
        $this->setSign(md5($this->getClientId() . $this->getTimestamp() . $clientSecret));
    }

    /**
     * 当前类转为请求参数
     * @return array
     */
    public function toRequestParam()
    {
        $data = $this->toArray();
        unset($data['apiUrl']);
        return $data;
    }
}