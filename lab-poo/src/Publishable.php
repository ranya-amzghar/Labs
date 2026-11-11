<?php

interface Publishable
{
    public function getTitle(): string;

    public function publish(): string;
}
