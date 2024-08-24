<?php
declare(strict_types=1);

namespace IfCastle\AOP;

trait AspectsByGroupsTrait
{
    /**
     * Aspect groups
     * @var string[]
     */
    protected array $aspectGroups   = [];

    /**
     * @return string[]
     */
    public function getAspectGroups(): array
    {
        return $this->aspectGroups;
    }

    public function hasAspectGroup(string ...$aspectGroups): bool
    {
        foreach ($aspectGroups as $group) {
            if(in_array($group, $this->aspectGroups)) {
                return true;
            }
        }

        return false;
    }

    public function addAspectGroup(string ...$aspectGroups): static
    {
        foreach ($aspectGroups as $group) {
            if(!in_array($group, $this->aspectGroups)) {
                $this->aspectGroups[] = $group;
            }
        }

        return $this;
    }
}