<?php

namespace App\Console\Commands;



use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

use Carbon\Carbon;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\SitemapGenerator;
use Spatie\Tags\Url;
class CreateSitemap extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sitemap:genarate';

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
        SitemapGenerator::create("https://nguyenngoctuan.top")->writeToFile(public_path('sitemap.xml'));
    }
}
