<?php

// scoper-autoload.php @generated by PhpScoper

$loader = require_once __DIR__.'/autoload.php';

// Aliases for the whitelisted classes. For more information see:
// https://github.com/humbug/php-scoper/blob/master/README.md#class-whitelisting
if (!class_exists('AutoloadIncluder', false) && !interface_exists('AutoloadIncluder', false) && !trait_exists('AutoloadIncluder', false)) {
    spl_autoload_call('RectorPrefix20210519\AutoloadIncluder');
}
if (!class_exists('SomeClass', false) && !interface_exists('SomeClass', false) && !trait_exists('SomeClass', false)) {
    spl_autoload_call('RectorPrefix20210519\SomeClass');
}
if (!class_exists('AnotherClass', false) && !interface_exists('AnotherClass', false) && !trait_exists('AnotherClass', false)) {
    spl_autoload_call('RectorPrefix20210519\AnotherClass');
}
if (!class_exists('SomeTestCase', false) && !interface_exists('SomeTestCase', false) && !trait_exists('SomeTestCase', false)) {
    spl_autoload_call('RectorPrefix20210519\SomeTestCase');
}
if (!class_exists('CheckoutEntityFactory', false) && !interface_exists('CheckoutEntityFactory', false) && !trait_exists('CheckoutEntityFactory', false)) {
    spl_autoload_call('RectorPrefix20210519\CheckoutEntityFactory');
}
if (!class_exists('ComposerAutoloaderInit8aa86fd065b335aa330c6f07b5ddc51f', false) && !interface_exists('ComposerAutoloaderInit8aa86fd065b335aa330c6f07b5ddc51f', false) && !trait_exists('ComposerAutoloaderInit8aa86fd065b335aa330c6f07b5ddc51f', false)) {
    spl_autoload_call('RectorPrefix20210519\ComposerAutoloaderInit8aa86fd065b335aa330c6f07b5ddc51f');
}
if (!class_exists('Doctrine\Inflector\Inflector', false) && !interface_exists('Doctrine\Inflector\Inflector', false) && !trait_exists('Doctrine\Inflector\Inflector', false)) {
    spl_autoload_call('RectorPrefix20210519\Doctrine\Inflector\Inflector');
}
if (!class_exists('SomeFormType', false) && !interface_exists('SomeFormType', false) && !trait_exists('SomeFormType', false)) {
    spl_autoload_call('RectorPrefix20210519\SomeFormType');
}
if (!class_exists('Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator', false) && !interface_exists('Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator', false) && !trait_exists('Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator', false)) {
    spl_autoload_call('RectorPrefix20210519\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator');
}
if (!class_exists('Normalizer', false) && !interface_exists('Normalizer', false) && !trait_exists('Normalizer', false)) {
    spl_autoload_call('RectorPrefix20210519\Normalizer');
}
if (!class_exists('JsonException', false) && !interface_exists('JsonException', false) && !trait_exists('JsonException', false)) {
    spl_autoload_call('RectorPrefix20210519\JsonException');
}
if (!class_exists('Attribute', false) && !interface_exists('Attribute', false) && !trait_exists('Attribute', false)) {
    spl_autoload_call('RectorPrefix20210519\Attribute');
}
if (!class_exists('Stringable', false) && !interface_exists('Stringable', false) && !trait_exists('Stringable', false)) {
    spl_autoload_call('RectorPrefix20210519\Stringable');
}
if (!class_exists('UnhandledMatchError', false) && !interface_exists('UnhandledMatchError', false) && !trait_exists('UnhandledMatchError', false)) {
    spl_autoload_call('RectorPrefix20210519\UnhandledMatchError');
}
if (!class_exists('ValueError', false) && !interface_exists('ValueError', false) && !trait_exists('ValueError', false)) {
    spl_autoload_call('RectorPrefix20210519\ValueError');
}
if (!class_exists('Symplify\ComposerJsonManipulator\ValueObject\ComposerJson', false) && !interface_exists('Symplify\ComposerJsonManipulator\ValueObject\ComposerJson', false) && !trait_exists('Symplify\ComposerJsonManipulator\ValueObject\ComposerJson', false)) {
    spl_autoload_call('RectorPrefix20210519\Symplify\ComposerJsonManipulator\ValueObject\ComposerJson');
}
if (!class_exists('Symplify\SmartFileSystem\SmartFileInfo', false) && !interface_exists('Symplify\SmartFileSystem\SmartFileInfo', false) && !trait_exists('Symplify\SmartFileSystem\SmartFileInfo', false)) {
    spl_autoload_call('RectorPrefix20210519\Symplify\SmartFileSystem\SmartFileInfo');
}
if (!class_exists('Test', false) && !interface_exists('Test', false) && !trait_exists('Test', false)) {
    spl_autoload_call('RectorPrefix20210519\Test');
}
if (!class_exists('ParentClass', false) && !interface_exists('ParentClass', false) && !trait_exists('ParentClass', false)) {
    spl_autoload_call('RectorPrefix20210519\ParentClass');
}
if (!class_exists('ChildClass', false) && !interface_exists('ChildClass', false) && !trait_exists('ChildClass', false)) {
    spl_autoload_call('RectorPrefix20210519\ChildClass');
}
if (!class_exists('DemoClass', false) && !interface_exists('DemoClass', false) && !trait_exists('DemoClass', false)) {
    spl_autoload_call('RectorPrefix20210519\DemoClass');
}

// Functions whitelisting. For more information see:
// https://github.com/humbug/php-scoper/blob/master/README.md#functions-whitelisting
if (!function_exists('should_include_preload')) {
    function should_include_preload() {
        return \RectorPrefix20210519\should_include_preload(...func_get_args());
    }
}
if (!function_exists('dn')) {
    function dn() {
        return \RectorPrefix20210519\dn(...func_get_args());
    }
}
if (!function_exists('dump_node')) {
    function dump_node() {
        return \RectorPrefix20210519\dump_node(...func_get_args());
    }
}
if (!function_exists('print_node')) {
    function print_node() {
        return \RectorPrefix20210519\print_node(...func_get_args());
    }
}
if (!function_exists('composerRequire8aa86fd065b335aa330c6f07b5ddc51f')) {
    function composerRequire8aa86fd065b335aa330c6f07b5ddc51f() {
        return \RectorPrefix20210519\composerRequire8aa86fd065b335aa330c6f07b5ddc51f(...func_get_args());
    }
}
if (!function_exists('parseArgs')) {
    function parseArgs() {
        return \RectorPrefix20210519\parseArgs(...func_get_args());
    }
}
if (!function_exists('showHelp')) {
    function showHelp() {
        return \RectorPrefix20210519\showHelp(...func_get_args());
    }
}
if (!function_exists('formatErrorMessage')) {
    function formatErrorMessage() {
        return \RectorPrefix20210519\formatErrorMessage(...func_get_args());
    }
}
if (!function_exists('preprocessGrammar')) {
    function preprocessGrammar() {
        return \RectorPrefix20210519\preprocessGrammar(...func_get_args());
    }
}
if (!function_exists('resolveNodes')) {
    function resolveNodes() {
        return \RectorPrefix20210519\resolveNodes(...func_get_args());
    }
}
if (!function_exists('resolveMacros')) {
    function resolveMacros() {
        return \RectorPrefix20210519\resolveMacros(...func_get_args());
    }
}
if (!function_exists('resolveStackAccess')) {
    function resolveStackAccess() {
        return \RectorPrefix20210519\resolveStackAccess(...func_get_args());
    }
}
if (!function_exists('magicSplit')) {
    function magicSplit() {
        return \RectorPrefix20210519\magicSplit(...func_get_args());
    }
}
if (!function_exists('assertArgs')) {
    function assertArgs() {
        return \RectorPrefix20210519\assertArgs(...func_get_args());
    }
}
if (!function_exists('removeTrailingWhitespace')) {
    function removeTrailingWhitespace() {
        return \RectorPrefix20210519\removeTrailingWhitespace(...func_get_args());
    }
}
if (!function_exists('regex')) {
    function regex() {
        return \RectorPrefix20210519\regex(...func_get_args());
    }
}
if (!function_exists('execCmd')) {
    function execCmd() {
        return \RectorPrefix20210519\execCmd(...func_get_args());
    }
}
if (!function_exists('ensureDirExists')) {
    function ensureDirExists() {
        return \RectorPrefix20210519\ensureDirExists(...func_get_args());
    }
}
if (!function_exists('setproctitle')) {
    function setproctitle() {
        return \RectorPrefix20210519\setproctitle(...func_get_args());
    }
}
if (!function_exists('trigger_deprecation')) {
    function trigger_deprecation() {
        return \RectorPrefix20210519\trigger_deprecation(...func_get_args());
    }
}
if (!function_exists('includeIfExists')) {
    function includeIfExists() {
        return \RectorPrefix20210519\includeIfExists(...func_get_args());
    }
}
if (!function_exists('dump')) {
    function dump() {
        return \RectorPrefix20210519\dump(...func_get_args());
    }
}
if (!function_exists('dd')) {
    function dd() {
        return \RectorPrefix20210519\dd(...func_get_args());
    }
}
if (!function_exists('bdump')) {
    function bdump() {
        return \RectorPrefix20210519\bdump(...func_get_args());
    }
}
if (!function_exists('this_is_fatal_error')) {
    function this_is_fatal_error() {
        return \RectorPrefix20210519\this_is_fatal_error(...func_get_args());
    }
}
if (!function_exists('demo')) {
    function demo() {
        return \RectorPrefix20210519\demo(...func_get_args());
    }
}
if (!function_exists('first')) {
    function first() {
        return \RectorPrefix20210519\first(...func_get_args());
    }
}
if (!function_exists('second')) {
    function second() {
        return \RectorPrefix20210519\second(...func_get_args());
    }
}
if (!function_exists('third')) {
    function third() {
        return \RectorPrefix20210519\third(...func_get_args());
    }
}
if (!function_exists('foo')) {
    function foo() {
        return \RectorPrefix20210519\foo(...func_get_args());
    }
}
if (!function_exists('head')) {
    function head() {
        return \RectorPrefix20210519\head(...func_get_args());
    }
}
if (!function_exists('dumpe')) {
    function dumpe() {
        return \RectorPrefix20210519\dumpe(...func_get_args());
    }
}
if (!function_exists('compressJs')) {
    function compressJs() {
        return \RectorPrefix20210519\compressJs(...func_get_args());
    }
}
if (!function_exists('compressCss')) {
    function compressCss() {
        return \RectorPrefix20210519\compressCss(...func_get_args());
    }
}

return $loader;
