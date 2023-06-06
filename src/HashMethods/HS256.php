<?php


namespace Jybtx\Token\HashMethod;


class HS256 extends HashMethod
{
    protected $keyType = 'HMAC';

    public function getAlgorithm()
    {
        return 'SHA256';
    }
}