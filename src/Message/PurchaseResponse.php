<?php

namespace Omnipay\Municipay\Message;

use Omnipay\Common\Message\AbstractResponse;
use Omnipay\Common\Message\RedirectResponseInterface;

/**
 * MuniciPAY Purchase Response
 */
class PurchaseResponse extends AbstractResponse implements RedirectResponseInterface
{
    protected $liveEndpoint = 'https://secure.municipay.com/payapp/public/WSRequest.html';
    protected $demoEndpoint = 'https://demo.municipay.com/payapp/public/WSRequest.html';

    /**
     * Get appropriate MuniciPAY endpoint
     * 
     * @return string
     */
    public function getEndPoint()
    {
        if ($this->data['demo']) {
            return $this->demoEndpoint;
        } else {
            return $this->liveEndpoint;
        }
    }

    /**
     * @return bool
     */
    public function isSuccessful()
    {
        return false;
    }

    /**
     * @return bool
     */
    public function isRedirect()
    {
        return true;
    }

    /**
     * @return string
     */
    public function getRedirectUrl()
    {
        $endpint = $this->getEndPoint();
        unset($this->data['demo']);
        return $endpint . '?' . http_build_query($this->data);
    }

    public function getRedirectMethod()
    {
        return 'GET';
    }

    public function getRedirectData()
    {
        return $this->data;
    }
}
