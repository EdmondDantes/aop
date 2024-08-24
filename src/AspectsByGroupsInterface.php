<?php
declare(strict_types=1);

namespace IfCastle\AOP;

interface AspectsByGroupsInterface
{
    /**
     * @return string[]
     */
    public function getAspectGroups(): array;

    public function hasAspectGroup(string ...$aspectGroups): bool;
    
    public function addAspectGroup(string ...$aspectGroups): static;
}