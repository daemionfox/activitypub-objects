<?php

namespace AP\Type\Core;

interface APObjectInterface
{
    public function set(string $key, mixed $value): static;
    public function load(array $data): static;
    public function toArray(): array;
    public function toJSON(): string|bool;
}