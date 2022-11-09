<?php

namespace alexeevdv\SumSub\Request;

final class ShareTokenRequest
{
    /**
     * Applicant ID on service X
     *
     * @var string
     */
    private $applicantId;

    /**
     * Client ID of service Y (ask them for this information).
     * You can find your clientId at the dashboard in the applicant
     * profile - field of "Created for" and at response of getting
     * applicant data request - clientId
     *
     * @var string
     */
    private $clientId;

    /**
     * Lifespan of a token in seconds. Default value is equal to 20 mins.
     *
     * @var int|null
     */
    private $ttlInSecs;

    /**
     * ShareTokenRequest constructor.
     *
     * @param string   $userId
     * @param string   $levelName
     * @param int|null $ttlInSecs
     */
    public function __construct($applicantId, $clientId, $ttlInSecs = null)
    {
        $this->applicantId = $applicantId;
        $this->clientId = $clientId;
        $this->ttlInSecs = $ttlInSecs;
    }

    /**
     * @return string
     */
    public function getApplicantId()
    {
        return $this->applicantId;
    }

    /**
     * @return string
     */
    public function getClientId()
    {
        return $this->clientId;
    }

    /**
     * @return int|null
     */
    public function getTtlInSecs()
    {
        return $this->ttlInSecs;
    }
}
