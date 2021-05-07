<?php

namespace Kiboko\Contract\Packaging;

interface FileInterface extends AssetInterface
{
    public function getPath(): string;
}
