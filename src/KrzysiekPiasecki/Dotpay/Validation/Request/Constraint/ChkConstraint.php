<?php

/*
 * This file is part of Dotpayds project.
 * (c) Krzysztof Piasecki <krzysiekpiasecki@gmail.com>
 *
 * @license   https://opensource.org/licenses/MIT  The MIT License
 */

namespace  KrzysiekPiasecki\Dotpay\Validation\Request\Constraint;

use KrzysiekPiasecki\Dotpay\Validation\Request\ChkValidator;
use Symfony\Component\Validator\Constraint;

/**
 * Constraint against 'chk' parameter.
 *
 * @see RequestBag::$chk Parameter 'chk'
 * @Annotation
 * @Target({"PROPERTY"})
 */
class ChkConstraint extends Constraint
{
    /** @var string Constraint message */
    public $message = 'The value {{ chk }} is not a valid \'chk\' parameter';

    /**
     * {@inheritdoc}
     */
    public function validatedBy()
    {
        return ChkValidator::class;
    }
}
