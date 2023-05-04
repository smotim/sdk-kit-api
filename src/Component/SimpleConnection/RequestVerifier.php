<?php

namespace service\KitAPI\Component\SimpleConnection;

class RequestVerifier
{

    public function verify(string $secret, RequestConnectionRegister $registerRequest): bool
    {
        $hash = TokenCreator::create($registerRequest->apiKey, $secret);

        return hash_equals($hash, $registerRequest->token);
    }
}