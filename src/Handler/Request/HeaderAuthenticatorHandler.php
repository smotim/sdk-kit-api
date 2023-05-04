<?php

namespace service\KitAPI\Handler\Request;

use service\KitAPI\Handler\AbstractHandler;
use service\KitAPI\Model\RequestData;

class HeaderAuthenticatorHandler extends AbstractHandler
{

    /** @var string */
    private $apiKey;

    /**
     * @param string $apiKey
     */
    public function __construct(string $apiKey)
    {
        $this->apiKey = $apiKey;
    }

    /**
     * @param $item
     * @return mixed|null
     */
    public function handle($item)
    {
        if ($item instanceof RequestData && $item->request !== null) {
            $item->request = $item->request->withAddedHeader('Authorization', 'Bearer ' . $this->apiKey);
        }

        return parent::handle($item);
    }
}