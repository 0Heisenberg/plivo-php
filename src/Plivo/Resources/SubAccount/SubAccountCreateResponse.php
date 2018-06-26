<?php

namespace Plivo\Resources\SubAccount;

/*
MODIFYING THE CODE,
Earlier Getting this response
Plivo\Resources\SubAccount\SubAccountCreateResponse Object
(
    [authId:protected] => created
    [authToken:protected] => SANZM0ZMI3NGIZZGVKNM
    [_message:Plivo\Resources\ResponseUpdate:private] => 94cfc51c-78de-11e8-92da-0270ad8a35c4
)

After modifying the code, getting this response:
(
    [authId:protected] => SAZDKXZGQ3NJY2ZTU0MT
    [authToken:protected] => NjMxMjcwMmE5ZTVjNDY4ZjA2NDRhZjliMmYwMjgw
    [_message:Plivo\Resources\ResponseUpdate:private] => created
    [apiId] => 35485f18-78e4-11e8-8d4b-06dc1fa55d82
)
*/
use Plivo\Resources\ResponseUpdate;

/**
 * Class SubAccountCreateResponse
 * @package Plivo\Resources\SubAccount
 */
class SubAccountCreateResponse extends ResponseUpdate
{
    /**
     * @var string
     */
    protected $authId;
    /**
     * @var string
     */
    protected $authToken;

    /**
     * SubAccountCreateResponse constructor.
     * @param $message
     * @param $authId
     * @param $authToken
     */
    public function __construct($api_id, $message, $authId, $authToken)
    {
        parent::__construct($message);
        $this->authId = $authId;
        $this->authToken = $authToken;
        $this->apiId = $api_id;
    }

    /**
     * @return string
     */
    public function getAuthId()
    {
        return $this->authId;
    }

    /**
     * @return string
     */
    public function getAuthToken()
    {
        return $this->authToken;
    }
}
