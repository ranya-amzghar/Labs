<?php

namespace App\Traits;

trait HasTimestamps
{
    private string $createdAt;
    private string $updatedAt;

    protected function initializeTimestamps(): void
    {
        $now = date('Y-m-d H:i:s');
        $this->createdAt = $now;
        $this->updatedAt = $now;
    }

    protected function updateTimestamp(): void
    {
        $this->updatedAt = date('Y-m-d H:i:s');
    }

    public function getCreatedAt(): string
    {
        return $this->createdAt;
    }

    public function getUpdatedAt(): string
    {
        return $this->updatedAt;
    }
}
