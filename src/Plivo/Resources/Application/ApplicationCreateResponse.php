<?php

namespace Plivo\Resources\Application;


use Plivo\Resources\ResponseUpdate;

/**
 * Class ApplicationCreateResponse
 * @package Plivo\Resources\Application
 */
class ApplicationCreateResponse extends ResponseUpdate
{

    /**
     * @var string Application ID
     */
    protected $appId;

    /**
     * ApplicationCreateResponse constructor.
     * @param $message
     * @param $appId
     */
    public function __construct($api_id, $message, $appId)
    {
        parent::__construct($message);
        $this->appId = $appId;
        $this->apiId = $api_id;
    }

    /**
     * Get the application ID
     * @return mixed
     */
    public function getAppId()
    {
        return $this->appId;
    }
}
