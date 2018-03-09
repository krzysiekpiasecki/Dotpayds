<?php

/*
 * This file is part of Dotpayds project.
 * (c) Krzysztof Piasecki <krzysiekpiasecki@gmail.com>
 *
 * @license   https://opensource.org/licenses/MIT  The MIT License
 */

namespace  KrzysiekPiasecki\Dotpay\Validation\Request\Constraint;

use KrzysiekPiasecki\Dotpay\Validation\Request\DescriptionValidator;
use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\Constraints\Regex;

/**
 * Constraint against 'description' parameter.
 *
 * @see RequestBag::$description Parameter 'description'
 * @Annotation
 * @Target({"PROPERTY"})
 */
class DescriptionConstraint extends Regex
{
    /** @var string Constraint message */
    public $message = 'The value {{ description }} is not a valid \'description\' parameter';

    /** @var string regex pattern */
    public $pattern = '^[\\w\\d _\\-]{1,255}$^';

    /**
     * {@inheritdoc}
     */
    public function validatedBy()
    {
        return DescriptionValidator::class;
    }

    /**
     * DescriptionConstraint constructor.
     */
    public function __construct()
    {
        parent::__construct($this->pattern);
    }
}
