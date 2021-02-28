<?php

namespace Omnipay\Municipay\Message;

use Omnipay\Common\Message\AbstractRequest as BaseAbstractRequest;

/**
 * Abstract Request.
 */
abstract class AbstractRequest extends BaseAbstractRequest
{
    public function getSiteId()
    {
        return $this->getParameter('siteId');
    }

    public function setSiteid($value)
    {
        return $this->setParameter('siteId', $value);
    }

    public function getProdId()
    {
        return $this->getParameter('prodId');
    }

    public function setProdId($value)
    {
        return $this->setParameter('prodId', $value);
    }

    public function getUrlKey()
    {
        return $this->getParameter('urlKey');
    }

    public function setUrlKey($value)
    {
        return $this->setParameter('urlKey', $value);
    }

    public function getDemoMode()
    {
        return $this->getParameter('demo');
    }

    public function setDemoMode($value)
    {
        return $this->setParameter('demo', $value);
    }

    public function getRefNum()
    {
        return $this->getParameter('refNum');
    }

    public function setRefNum($value)
    {
        return $this->setParameter('refNum', $value);
    }

    public function getAmount()
    {
        return $this->getParameter('amount');
    }

    public function setAmount($value)
    {
        return $this->setParameter('amount', $value);
    }

    public function getTransactionId()
    {
        return $this->getParameter('transactionId');
    }

    public function setTransactionId($value)
    {
        return $this->setParameter('transactionId', $value);
    }

    public function getRedirectUrl()
    {
        return $this->getParameter('redirectURL');
    }

    public function setRedirectUrl($value)
    {
        return $this->setParameter('redirectURL', $value);
    }

    public function getListItmes()
    {
        return $this->getParameter('listItems');
    }

    public function setListItems($value)
    {
        return $this->setParameter('listItems', $value);
    }
}