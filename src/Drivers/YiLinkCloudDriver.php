<?php

namespace EasySwoole\EasyPrinter\Drivers;

use EasySwoole\EasyPrinter\Commands\YiLinkCloud\BaseCommand;
use EasySwoole\EasyPrinter\Commands\YiLinkCloud\GetAccessToken;
use EasySwoole\HttpClient\Bean\Response;
use EasySwoole\HttpClient\HttpClient;
use Exception;
use SwooleKit\Cache\Cache;
use Throwable;

/**
 * 云打印驱动类
 * Class YiLinkCloudDriver
 */
class YiLinkCloudDriver implements DriverInterface
{
    protected $clientId;
    protected $clientSecret;
    protected $tokenCacheKey;

    /**
     * YiLinkCloudDriver constructor.
     * @param $clientId
     * @param $clientSecret
     */
    function __construct($clientId, $clientSecret)
    {
        $this->clientId = $clientId;
        $this->clientSecret = $clientSecret;
        $this->tokenCacheKey = 'YiLinkCloud_' . $clientId;
    }

    /**
     * 发送一个命令
     * @param BaseCommand $commandPack
     * @return array
     * @throws Throwable
     */
    function sendCommand($commandPack)
    {
        $accessToken = $this->getAccessToken();
        $commandPack->setClientId($this->clientId);
        $commandPack->setAccessToken($accessToken);
        $commandPack->prepareCommand($this->clientSecret);
        $httpClient = new HttpClient($commandPack->getApiUrl());
        return $this->checkResponse($httpClient->post($commandPack->toRequestParam()));
    }

    /**
     * 获取请求令牌
     * @throws Throwable
     */
    function getAccessToken()
    {
        $cacheToken = Cache::get($this->tokenCacheKey);
        if (is_null($cacheToken)) {

            $command = new GetAccessToken();
            $command->setClientId($this->clientId);
            $command->prepareCommand($this->clientSecret);
            $httpClient = new HttpClient($command->getApiUrl());
            $responseData = $this->checkResponse($httpClient->post($command->toRequestParam()));

            if (!isset($responseData['body']['access_token']) || empty($responseData['body']['access_token'])) {
                throw new Exception('YiLinkCloud GetAccessToken Error!');
            }

            Cache::set($this->tokenCacheKey, $responseData['body']['access_token']);
            $cacheToken = $responseData['body']['access_token'];
        }

        return $cacheToken;
    }

    /**
     * 检查响应内容
     * @param Response $comResponse
     * @return array
     * @throws Exception
     */
    private function checkResponse($comResponse)
    {
        // 网络响应失败
        if ($comResponse->getErrCode()) {
            throw  new Exception('YiLinkCloud Api NetWork Error: ' . $comResponse->getErrMsg());
        }

        // 解码请求内容
        $contentJson = $comResponse->getBody();
        $contentArr = json_decode($contentJson, true);
        if (json_last_error()) {
            throw  new Exception('YiLinkCloud Api Decode Error: ' . json_last_error_msg());
        }

        // 响应是否为空
        if (empty($contentArr)) {
            throw  new Exception('YiLinkCloud Api Response Empty!');
        }

        // 是否存在错误信息
        if (isset($contentArr['error']) && $contentArr['error'] != 0) {
            throw  new Exception('YiLinkCloud Api Error: ' . $contentArr['error_description']);
        }

        return $contentArr;
    }
}