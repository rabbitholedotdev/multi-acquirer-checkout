<?php

namespace Kaninstein\MultiAcquirerCheckout\Domain\Validation;

use Kaninstein\MultiAcquirerCheckout\Domain\Validation\Contracts\ValidatorInterface;

abstract class AbstractValidator implements ValidatorInterface
{
    public function stopOnFailure(): bool
    {
        return false;
    }

    public function getName(): string
    {
        return static::class;
    }

    /**
     * Helper to create success result
     *
     * @param  array<string, mixed>  $metadata
     */
    protected function success(array $metadata = []): ValidationResult
    {
        return ValidationResult::success($metadata);
    }

    /**
     * Helper to create failure result
     *
     * @param  array<string, string|array<string>>  $errors
     * @param  array<string, mixed>  $metadata
     */
    protected function failure(array $errors, array $metadata = []): ValidationResult
    {
        return ValidationResult::failure($errors, $metadata);
    }
}
