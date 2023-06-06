<?php
namespace Jybtx\Token;

use Jybtx\Token\Support\CreateToken;
use Jybtx\Token\Support\TokenBlackList;
use Jybtx\Token\Support\TokenValidator;

class JwtAuthToken
{
    use CreateToken, TokenBlackList, TokenValidator;


    public function getCreateAccessToken($attributes, $flag = null)
    {
        return $this->getCreateToken($attributes, $flag);
    }
}
