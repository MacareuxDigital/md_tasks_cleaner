<?php
/**
 * @author: Biplob Hossain <biplob.ice@gmail.com>
 */

namespace Macareux\TasksCleaner\Console\Command;

use Concrete\Core\Console\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class ClearTasksCommand extends Command
{
    protected function configure(): void
    {
        $this
            ->setName('md:tasks:clear')
            ->setDescription('Clear symfony messenger messages of the automated tasks from the database.')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $db = app('database/connection');
        $output->writeln('Clearing symfony messenger messages of the automated tasks from the database...');
        $tables = ['MessengerProcesses', 'MessengerTaskProcesses', 'MessengerMessages'];
        foreach ($tables as $table) {
            $deleteQuery = $db->executeQuery("DELETE FROM {$table}");
            $numDeletedRows = $deleteQuery->rowCount();
            $output->writeln(sprintf('Deleted %d rows from %s', $numDeletedRows, $table));
        }

        return 0;
    }
}
