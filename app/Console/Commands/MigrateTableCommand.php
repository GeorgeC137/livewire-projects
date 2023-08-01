<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;

class MigrateTableCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'migrate:table {table?}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Run migrations for a specific table';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $table = $this->argument('table');

        if ($table === null) {
            $this->info("Please provide a table name. No migrations executed.");
        } elseif ($table === 'create_products_table') {
            // Run the migration for the specified table
            Artisan::call('migrate', [
                '--path' => "database/migrations",
            ]);
        } else {
            $this->info("Table '$table' does not match 'create_products_table'. No migrations executed.");
        }
    }
}
