<?php

namespace PHPMaker2025\rsuncen2025;

use Symfony\Component\EventDispatcher\GenericEvent;
use Slim\Interfaces\RouteCollectorProxyInterface;
use Slim\App;

/**
 * API Action Event
 */
class ApiActionEvent extends GenericEvent
{
    public const NAME = "api.action";

    public function getGroup(): RouteCollectorProxyInterface
    {
        return $this->subject;
    }
}