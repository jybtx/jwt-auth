<?php


namespace Jybtx\Token\Claims;


class Expiration extends Claim
{
    protected $type = 'exp';
    protected $name = 'expiration';

    /**
     * Validate the Issued At data
     *
     * @param $value
     * @return bool
     */
    public function validate($value)
    {
        if (!is_numeric($value)) {
            return false;
        }
        return true;
    }
}