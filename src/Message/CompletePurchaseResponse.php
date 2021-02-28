<?php

namespace Omnipay\Municipay\Message;

use Omnipay\Common\Message\AbstractResponse;
use Omnipay\Common\Message\ResponseInterface;

/**
 * MuniciPAY Complete Purchase Response
 */
class CompletePurchaseResponse extends AbstractResponse implements ResponseInterface
{
    public function isSuccessful()
    {
        return isset($this->data['success']) ? $this->data['success'] : null;
    }

    public function getTransactionReference()
    {
        return isset($this->data['transactionId']) ? $this->data['transactionId'] : null;
    }
}
