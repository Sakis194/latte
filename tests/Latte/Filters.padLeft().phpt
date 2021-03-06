<?php

/**
 * Test: Latte\Runtime\Filters::padLeft()
 */

use Latte\Engine;
use Latte\Runtime\Filters;
use Latte\Runtime\FilterInfo;
use Tester\Assert;


require __DIR__ . '/../bootstrap.php';


Assert::same('ŤOUŤOUŤŽLU', Filters::padLeft("\xc5\xbdLU", 10, "\xc5\xa4OU"));
Assert::same('ŤOUŤOUŽLU', Filters::padLeft("\xc5\xbdLU", 9, "\xc5\xa4OU"));
Assert::same('ŽLU', Filters::padLeft("\xc5\xbdLU", 3, "\xc5\xa4OU"));
Assert::same('ŽLU', Filters::padLeft("\xc5\xbdLU", 0, "\xc5\xa4OU"));
Assert::same('ŽLU', Filters::padLeft("\xc5\xbdLU", -1, "\xc5\xa4OU"));
Assert::same('ŤŤŤŤŤŤŤŽLU', Filters::padLeft("\xc5\xbdLU", 10, "\xc5\xa4"));
Assert::same('ŽLU', Filters::padLeft("\xc5\xbdLU", 3, "\xc5\xa4"));
Assert::same('       ŽLU', Filters::padLeft("\xc5\xbdLU", 10));
