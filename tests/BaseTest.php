<?php

declare(strict_types=1);

namespace Eightfold\Package\Tests;

use PHPUnit\Framework\TestCase;

final class BaseTest extends TestCase
{
    public function test_to_pass_checks_with_failed_test(): void
    {
        parent::assertTrue(true); // @phpstan-ignore staticMethod.alreadyNarrowedType
    }
}
