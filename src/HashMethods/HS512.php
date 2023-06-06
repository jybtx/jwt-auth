<?php


namespace Jybtx\Token\HashMethod;


class HS512 extends HashMethod
{
    protected $keyType = 'HMAC';

    public function getAlgorithm()
    {
        return 'SHA512';
    }
}