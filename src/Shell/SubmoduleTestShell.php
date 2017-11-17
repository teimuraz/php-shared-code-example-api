<?php
namespace App\Shell;

use App\Shared\Lib\Utils;
use Cake\Console\Shell;

class SubmoduleTestShell extends Shell
{
    public function main()
    {
        $this->out(Utils::sum(10, 90));
    }
}
