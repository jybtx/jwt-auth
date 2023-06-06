<?php


namespace Jybtx\Token\Claims;


class NotBefore extends Claim
{
    protected $type = 'nbf';
    protected $name = 'notBefore';

    /**
     * Validate the Issued At data
     *
     * @param string $value Claim data
     * @return boolean Pass/fail of validation
     */
    public function validate($value)
    {
        if (!is_numeric($value)) {
            return false;
        }
        return true;
    }
}