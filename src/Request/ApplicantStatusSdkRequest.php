<?php

namespace alexeevdv\SumSub\Request;

final class ApplicantStatusSdkRequest
{
    /**
     * @var string
     */
    private $applicantId;

    /**
     * @param string $applicantId,
     */
    public function __construct(string $applicantId)
    {
        $this->applicantId = $applicantId;
    }

    /**
     * @return string
     */
    public function getApplicantId(): string
    {
        return $this->applicantId;
    }
}
