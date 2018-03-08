<?php

/*
 * This file is part of Dotpayds project.
 * (c) Krzysztof Piasecki <krzysiekpiasecki@gmail.com>
 *
 * @license   https://opensource.org/licenses/MIT  The MIT License
 */

namespace KrzysiekPiasecki\Dotpay\Validation\Request\Constraint;

use KrzysiekPiasecki\Dotpay\Validation\Request\IdValidator;
use Symfony\Component\Validator\Constraints\Range;
use Symfony\Component\Validator\Constraints\Regex;

/**
 * Constraint against 'id' parameter.
 *
 * @see RequestBag::$id Parameter 'id'
 * @Annotation
 * @Target({"PROPERTY"})
 */
class IdConstraint extends Regex
{
    /** @var string Constraint message */
    public $message = 'The value {{ id }} is not a valid \'id\' parameter';

    /** @var string regex pattern */
    public $pattern = '/^[1-9][0-9]{0,5}$/';

    /**
     * {@inheritdoc}
     */
    public function validatedBy()
    {
        return IdValidator::class;
    }

    /**
     * IdConstraint constructor.
     */
    public function __construct()
    {
        parent::__construct($this->pattern);
    }
}
