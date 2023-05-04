<?php

namespace service\KitAPI\Handler\Request;

use Psr\Http\Message\StreamFactoryInterface;
use service\KitAPI\Enum\RequestMethod;
use service\KitAPI\Handler\AbstractHandler;
use service\KitAPI\Interfaces\FormEncoderInterface;
use service\KitAPI\Model\RequestData;

class RequestDataHandler extends AbstractHandler
{

    /**
     * @var StreamFactoryInterface
     */
    private $streamFactory;

    /**
     * @var FormEncoderInterface
     */
    private $formEncoder;

    /**
     * @param FormEncoderInterface $formEncoder
     * @param StreamFactoryInterface $streamFactory
     */
    public function __construct(FormEncoderInterface $formEncoder, StreamFactoryInterface $streamFactory)
    {
        $this->formEncoder = $formEncoder;
        $this->streamFactory = $streamFactory;
    }

    /**
     * @param $item
     * @return mixed|null
     * @throws \Exception
     */
    public function handle($item)
    {
        if ($item instanceof RequestData && $item->request !== null) {
            $formData = '';

            if ($item->requestModel !== null) {
                try {
                    $formData = $this->formEncoder->encode($item->requestModel);
                } catch (\Throwable $exception) {
                    throw new \Exception($exception->getMessage(), $exception->getCode(), $exception);
                }
            }

            if (!empty($item->requestForm)) {
                $formData = json_encode($item->requestForm);
            }

            if ($formData !== '') {
                if (static::queryShouldBeUsed($item->request->getMethod())) {
                    $item->request = $item->request->withUri($item->request->getUri()->withQuery($formData));
                } else {
                    $item->request = $item->request->withBody($this->streamFactory->createStream($formData));
                }
            }
        }
        return parent::handle($item);
    }

    /**
     * @param string $method
     * @return bool
     */
    private static function queryShouldBeUsed(string $method): bool
    {
        return in_array(
            strtoupper($method),
            [RequestMethod::GET, RequestMethod::DELETE],
            true
        );
    }
}