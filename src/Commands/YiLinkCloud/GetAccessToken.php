<?php

namespace EasySwoole\EasyPrinter\Commands\YiLinkCloud;

/**
 * 获取请求令牌
 * Class GetAccessToken
 * @package Commands\YiLinkCloud
 */
class GetAccessToken extends BaseCommand
{
    const SCOPE_ALL = 'all';
    const TYPE_CLIENT_CREDENTIALS = 'client_credentials';

    protected $url = 'https://open-api.10ss.net/oauth/oauth';
    protected $scope = GetAccessToken::SCOPE_ALL;
    protected $grant_type = GetAccessToken::TYPE_CLIENT_CREDENTIALS;

    /**
     * @return string
     */
    public function getScope()
    {
        return $this->scope;
    }

    /**
     * @param string $scope
     * @return GetAccessToken
     */
    public function setScope($scope)
    {
        $this->scope = $scope;
        return $this;
    }

    /**
     * @return string
     */
    public function getGrantType()
    {
        return $this->grant_type;
    }

    /**
     * @param string $grant_type
     * @return GetAccessToken
     */
    public function setGrantType($grant_type)
    {
        $this->grant_type = $grant_type;
        return $this;
    }
}