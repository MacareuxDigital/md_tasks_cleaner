# Macareux Tasks Cleaner (md_tasks_cleaner) Package

The Macareux Tasks Cleaner (md_tasks_cleaner) is a Concrete CMS package that provides a console command to clear Symfony Messenger messages of automated tasks from the database.

## Installation

1. Download the package from the Concrete CMS marketplace or GitHub.
2. Extract the package files to your Concrete CMS installation's `packages` directory. 
3. Log in to your Concrete CMS site as an administrator.
4. Navigate to the **Extend Concrete CMS** page in the dashboard.
5. Locate the **Macareux Tasks Cleaner** package in the list and click the **Install** button.
6. Follow the on-screen instructions to complete the installation.

## Usage

To clear the Symfony Messenger messages of automated tasks from the database, use the following command:

```
concrete/bin/concrete md:tasks:clear
```

This command will delete the task-related records from the following tables:

- MessengerProcesses
- MessengerTaskProcesses
- MessengerMessages

A summary will be displayed for each table, showing the number of deleted rows.

## Contribution

Contributions to the Macareux Tasks Cleaner package are welcome. If you find any issues or have suggestions for improvements, please create an issue or submit a pull request on the [GitHub repository](https://github.com/macareuxdigital/md_tasks_cleaner).

## License

The Macareux Tasks Cleaner package is licensed under the [MIT License](https://opensource.org/licenses/MIT).
