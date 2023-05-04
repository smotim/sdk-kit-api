<?php

namespace service\KitAPI\Model\Response;

use Psr\Http\Message\StreamInterface;
use service\KitAPI\Interfaces\ResponseInterface;

class FileDownloadResponse implements ResponseInterface
{
    /** @var string */
    public $fileName;

    /** @var StreamInterface */
    public $data;

    /**
     * @param string $fileName
     * @param StreamInterface $data
     */
    public function __construct(string $fileName, StreamInterface $data)
    {
        $this->fileName = $fileName;
        $this->data = $data;
    }
}