<?php

namespace App\Console\Commands;



use Carbon\Carbon;
use Illuminate\Console\Command;

use Illuminate\Support\Facades\DB;
use Spatie\Sitemap\Tags\Url;



class Sitemap extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'create:genarate';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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
     *
     * @return mixed
     */
    public function handle()
    {
        //
        //SitemapGenerator::create(config('app.url'))->writeToFile(public_path('sitemap.xml'));
    }
}
