<?php
declare(strict_types=1);

namespace IfCastle\AOP;

interface AspectBuilderClassAwareInterface
{
    public function getAspectBuilderClass(): string;
}