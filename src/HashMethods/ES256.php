<?php


namespace Jybtx\Token\HashMethod;


class ES256 extends HashMethod
{
    protected $keyType = OPENSSL_KEYTYPE_RSA;

    public function getAlgorithm()
    {
        if (version_compare(phpversion(), '5.4.8', '<')) {
            return 'SHA256';
        } else {
            if (!extension_loaded('openssl')) {
                throw new \InvalidArgumentException('You cannot use this hashing method without OpenSSL support');
            }
            return OPENSSL_ALGO_SHA256;
        }
    }
}