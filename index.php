<?php

require(__DIR__ . '/vendor/autoload.php');

use function Functions\calculateHomeWorkSum;
use function Functions\Nfq\Akademija\NotTyped\calculateHomeWorkSum as notTypedCalc;
use function Functions\Nfq\Akademija\Soft\calculateHomeWorkSum as softCalc;
use function Functions\Nfq\Akademija\Strict\calculateHomeWorkSum as strictCalc;

try {
    echo ('calculateHomeWorkSum: '), calculateHomeWorkSum(3, 2.2, '1') . PHP_EOL;
    echo ('Nfq\Akademija\NotTyped\calculateHomeWorkSum: '), notTypedCalc(3, 2.2, '1') . PHP_EOL;
    echo ('Nfq\Akademija\Soft\calculateHomeWorkSum: '), softCalc(3, 2.2, '1') . PHP_EOL;
    echo ('Nfq\Akademija\Strict\calculateHomeWorkSum: '), strictCalc(3, 2.2, '1') . PHP_EOL;
} catch (TypeError $e) {
    echo 'Passed a wrong argument type in function' . PHP_EOL;
} catch (Error $e) {
    echo 'Error in namespace definition or function was not found' . PHP_EOL;
};