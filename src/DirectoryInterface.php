<?php

declare(strict_types=1);

namespace Kiboko\Contract\Packaging;

interface DirectoryInterface extends \RecursiveIterator
{
    public function getPath(): string;
}
