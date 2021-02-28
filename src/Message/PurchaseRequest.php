<?php

namespace Omnipay\Municipay\Message;

/**
 * MuniciPAY Purchase Request
 */
class PurchaseRequest extends AbstractRequest
{
    public function getData()
    {
        $this->validate('siteId','urlKey');
        foreach($this->getListItmes() as $index => $listItem) {
            $lineNumber = $index + 1;
            foreach($listItem as $key => $value) {
                $this->setParameter($key . '_' . $lineNumber, $value);
            }
        }
        $data = array();
        $data = $this->getParameters();
        $data['demo'] = $this->getDemoMode();
        unset($data['listItems']);
        return $data;
    }

    public function sendData($data)
    {
        return $this->response = new PurchaseResponse($this, $data);
    }
}
