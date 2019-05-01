<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'fos_js_routing.dump_command' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/console/Command/Command.php';
include_once $this->targetDirs[3].'/vendor/friendsofsymfony/jsrouting-bundle/Command/DumpCommand.php';

$this->privates['fos_js_routing.dump_command'] = $instance = new \FOS\JsRoutingBundle\Command\DumpCommand(($this->services['fos_js_routing.extractor'] ?? $this->load('getFosJsRouting_ExtractorService.php')), ($this->services['fos_js_routing.serializer'] ?? $this->load('getFosJsRouting_SerializerService.php')), ($this->targetDirs[3].'/src'), NULL);

$instance->setName('fos:js-routing:dump');

return $instance;
