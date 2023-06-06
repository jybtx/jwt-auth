<?php


namespace Jybtx\Token\HashMethod;


class HS384 extends HashMethod
{
    protected $keyType = 'HMAC';

    public function getAlgorithm()
    {
        return 'SHA384';
    }
}