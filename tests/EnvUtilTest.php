<?php

use Larafly\Tools\EnvUtil;

it('test is local', function () {
    $is_local = EnvUtil::isLocal();
    expect($is_local)->not->toBeTrue();
});

it('test is test env', function () {
    $env = EnvUtil::isTest();
    expect($env)->toBeTrue();
});

it('test is production env', function () {
    $env = EnvUtil::isProduction();
    expect($env)->not->toBeTrue();
});
