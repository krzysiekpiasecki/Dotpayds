<?php

declare(strict_types=1);

/*
 * This file is part of Dotpayds project.
 * (c) Krzysztof Piasecki <krzysiekpiasecki@gmail.com>
 *
 * @license   https://opensource.org/licenses/MIT  The MIT License
 */

namespace  KrzysiekPiasecki\Dotpay\Request\Validation\Constraint;

use KrzysiekPiasecki\Dotpay\Request\Validation\IgnoreLastPaymentChannelValidator;
use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\Constraints\Choice;

/**
 * Constraint against 'ignoreLastPaymentChannel' parameter.
 *
 * @see RequestBag::$ignoreLastPaymentChannel Parameter 'ignoreLastPaymentChannel'
 * @Annotation
 * @Target({"PROPERTY"})
 */
class IgnoreLastPaymentChannelConstraint extends Choice
{
    /** @var string Constraint message */
    public $message = 'The value {{ ignoreLastPaymentChannel }} 
        is not a valid \'ignoreLastPaymentChannel\' parameter';

    /**
     * Available values.
     *
     * @var array
     */
    private static $values = [
        '1',
        'true',
    ];

    /**
     * IgnoreLastPaymentChannelConstraint constructor.
     */
    public function __construct()
    {
        parent::__construct(self::$values);
    }

    /**
     * {@inheritdoc}
     */
    public function validatedBy()
    {
        return IgnoreLastPaymentChannelValidator::class;
    }
}
