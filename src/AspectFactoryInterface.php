<?php
declare(strict_types=1);

namespace IfCastle\AOP;

interface AspectFactoryInterface
{
    /**
     * @var string
     */
    final public const BASE_NAMESPACE       = __NAMESPACE__;

    public function getAspect(string $aspectName): AspectInterface;
    
    public function findAspectClass(string $aspectName): ?string;
}