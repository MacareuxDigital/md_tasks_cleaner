<?php
/**
 * @author: Biplob Hossain <biplob.ice@gmail.com>
 */

namespace Concrete\Package\MdTasksCleaner;

use Concrete\Core\Application\Application;
use Concrete\Core\Package\Package;
use Macareux\TasksCleaner\Console\Command\ClearTasksCommand;

class Controller extends Package
{
    /**
     * @var string package handle
     */
    protected $pkgHandle = 'md_tasks_cleaner';

    /**
     * @var string required concrete5 version
     */
    protected $appVersionRequired = '9.0.0';

    /**
     * @var string package version
     */
    protected $pkgVersion = '0.0.1';

    /**
     * @var array Autoload custom classes
     */
    protected $pkgAutoloaderRegistries = [
        'src/Concrete' => '\Macareux\TasksCleaner',
    ];
    /**
     * @var bool|int
     */
    protected $isV9;

    /**
     * @return string Package name
     */
    public function getPackageName(): string
    {
        return t('Macareux Tasks Cleaner');
    }

    /**
     * @return string Package description
     */
    public function getPackageDescription(): string
    {
        return t('Clear symfony messenger messages of the automated tasks from the database.');
    }

    public function on_start(): void
    {
        $this->registerCommands();
    }

    protected function registerCommands(): void
    {
        if (Application::isRunThroughCommandLineInterface()) {
            $console = $this->app->make('console');
            $console->add(new ClearTasksCommand());
        }
    }
}
