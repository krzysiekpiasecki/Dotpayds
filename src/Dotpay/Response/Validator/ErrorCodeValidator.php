<?php

/*
 * This file is part of Dotpayds project.
 * (c) Krzysztof Piasecki <krzysiekpiasecki@gmail.com>
 *
 * @license   https://opensource.org/licenses/MIT  The MIT License
 */

declare(strict_types=1);

namespace Dotpay\Response\Validator;

use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\Constraints\ChoiceValidator;

/**
 * Validator against ErrorCode.
 *
 * @see ErrorConstraint Constraint against 'error_code' parameter
 */
class ErrorCodeValidator extends ChoiceValidator
{
    /**
     * Validate against {@see ErrorCodeConstraint}.
     *
     * @param mixed $value Validated value
     * @param Constraint $constraint Used constraint
     */
    public function validate($value, Constraint $constraint)
    {
        parent::validate($value, $constraint);
    }
}