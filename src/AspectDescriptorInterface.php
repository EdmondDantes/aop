<?php
declare(strict_types=1);

namespace IfCastle\AOP;

/**
 *
 */
interface AspectDescriptorInterface
{
    public function getAspectName(): string;
    
    public function getAspectOptions(): array;
}