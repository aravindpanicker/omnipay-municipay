<?php

namespace Omnipay\Municipay;

use Omnipay\Common\AbstractGateway;

/**
 * MuniciPAY Gateway
 *
 */
class Gateway extends AbstractGateway
{
    public function getName()
    {
        return 'Municipay';
    }

    public function getDefaultParameters()
    {
        return [
            'siteId' => '',
            'urlKey' => '',
            'demoMode' => false,
            'amount' => '',
            'transactionId' => '',
            'cartId' => '',
            'success' => '',
            'npsPaymentMethod' => '',
            'npsCardType' => '',
            'npsFirstName' => '',
            'npsLastName' => '',
            'npsTransactionId' => '',
            'npsCFAmount' => '',
        ];
    }

    public function getSiteId()
    {
        return $this->getParameter('siteId');
    }

    public function setSiteid($value)
    {
        return $this->setParameter('siteId', $value);
    }

    public function getTransactionId()
    {
        return $this->getParameter('transactionId');
    }

    public function setTransactionId($value)
    {
        return $this->setParameter('transactionId', $value);
    }

    public function getUrlKey()
    {
        return $this->getParameter('urlKey');
    }

    public function setUrlKey($value)
    {
        return $this->setParameter('urlKey', $value);
    }

    public function getRedirectUrl()
    {
        return $this->getParameter('redirectURL');
    }

    public function setRedirectUrl($value)
    {
        return $this->setParameter('redirectURL', $value);
    }

    public function getDemoMode()
    {
        return $this->getParameter('demoMode');
    }

    public function setDemoMode($value)
    {
        return $this->setParameter('demoMode', $value);
    }

    public function getAmount()
    {
        return $this->getParameter('amount');
    }

    public function setAmount($value)
    {
        return $this->setParameter('amount', $value);
    }

    public function getCartId()
    {
        return $this->getParameter('cartId');
    }

    public function setCartId($value)
    {
        return $this->setParameter('cartId', $value);
    }

    public function getSuccess()
    {
        return $this->getParameter('success');
    }

    public function setSuccess($value)
    {
        return $this->setParameter('success', $value);
    }

    public function getNpsPaymentMethod()
    {
        return $this->getParameter('npsPaymentMethod');
    }

    public function setNpsPaymentMethod($value)
    {
        return $this->setParameter('npsPaymentMethod', $value);
    }

    public function getNpsCardType()
    {
        return $this->getParameter('npsCardType');
    }

    public function setNpsCardType($value)
    {
        return $this->setParameter('npsCardType', $value);
    }

    public function getNpsFirstName()
    {
        return $this->getParameter('npsFirstName');
    }

    public function setNpsFirstName($value)
    {
        return $this->setParameter('npsFirstName', $value);
    }

    public function getNpsLastName()
    {
        return $this->getParameter('npsLastName');
    }

    public function setNpsLastName($value)
    {
        return $this->setParameter('npsLastName', $value);
    }

    public function getNpsTransactionId()
    {
        return $this->getParameter('npsTransactionId');
    }

    public function setNpsTramsactionId($value)
    {
        return $this->setParameter('npsTransactionId');
    }

    public function purchase(array $parameters = array())
    {
        return $this->createRequest('\Omnipay\Municipay\Message\PurchaseRequest', $parameters);
    }

    public function completePurchase(array $parameters = array())
    {
        return $this->createRequest('\Omnipay\Municipay\Message\CompletePurchaseRequest', $parameters);
    }
}
