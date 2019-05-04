<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.VQ7oBVF' shared service.

return $this->privates['.service_locator.VQ7oBVF'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'authenticator' => ['privates', 'App\\Security\\Authenticator', 'getAuthenticatorService.php', true],
    'guardHandler' => ['privates', 'security.authentication.guard_handler', 'getSecurity_Authentication_GuardHandlerService.php', true],
    'passwordEncoder' => ['services', 'security.password_encoder', 'getSecurity_PasswordEncoderService.php', true],
]);