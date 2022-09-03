<?php

require_once __DIR__ . "/../vendor/autoload.php";

use Aminnairi\StringExtra\StringExtra;

test("it should work to string containing special characters", function () {
    expect(StringExtra::toSentenceCase("__toString"))->toEqual("To String");
});

test("it should work to string containing alpha & numeric characters", function () {
    expect(StringExtra::toSentenceCase("error404"))->toEqual("Error 404");
});
