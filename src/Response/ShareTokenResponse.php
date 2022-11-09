<?php

namespace alexeevdv\SumSub\Response;

final class ShareTokenResponse
{
    /**
     * A newly generated share token for an applicant.
     *
     * @var string
     */
    private $token;

    /**
     * Sumsub clientId
     *
     * @var string
     */
    private $clientId;

    /**
     * @param string $token
     * @param string $clientId
     *
     */
    public function __construct($token, $clientId)
    {
        $this->token = $token;
        $this->clientId = $clientId;
    }

    /**
     * @return string
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * @return string
     */
    public function getClientId()
    {
        return $this->clientId;
    }
}
