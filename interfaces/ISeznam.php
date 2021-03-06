<?php

namespace Galileo;

/** @author Lubomir Andrisek */
interface ISeznam {

    public function center(): array;

    public function close(string $component): array;

    public function height(): int;

    public function icon(): string;

    public function id(string $id): ISeznam;

    public function markers(): array;

    public function map(): string;

    public function open(string $component): array;

    public function style(): array;
}
