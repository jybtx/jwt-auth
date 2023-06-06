<?php


namespace Jybtx\Token\Claims;


class JwtId extends Claim
{
    protected $type = 'jti';
    protected $name = 'jwtId';
}