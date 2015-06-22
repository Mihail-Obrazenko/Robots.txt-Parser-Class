<?php

namespace t1gor\RobotsTxt\Directive;

/**
 * Class Allow
 * @package t1gor\RobotsTxt\Directive
 */
final class Allow extends AbstractDirective implements DirectiveInterface
{
    /**
     * Set directive name
     */
    public function __construct() {
        $this->name = 'allow';
    }
}