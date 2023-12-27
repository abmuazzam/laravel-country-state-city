<?php

namespace AbMuazzam\CountryStateCity\Console;

use Illuminate\Console\Command;
use Database\Seeders\CountryStateCitySeeder;

/**
 * Class CountryStateCityCommand
 *
 * @package AbMuazzam\\CountryStateCity\Console
 */
class CountryStateCityCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'world-data:publish';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->info('Publishing Configuration...');

        $this->call('migrate', [
            '--path' => 'database/migrations/2023_11_08_000000_create_country_state_city_table.php'
        ]);

        $this->call('db:seed', [
            '--class' => CountryStateCitySeeder::class
        ]);

        $this->info('Publishing Configuration Successfully Completed.');
    }
}
