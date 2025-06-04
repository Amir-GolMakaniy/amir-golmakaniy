<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\SitemapGenerator;
use Spatie\Sitemap\Tags\Url;

class GenerateSitemap extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sitemap:generate';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate the sitemap.xml file';

    /**
     * Execute the console command.
     */
    public function handle()
    {
//		Sitemap::create()
//			->add(Url::create('/'))
//			->add(Url::create('/about'))
//			->add(Url::create('/contact'))
//			->writeToFile(public_path('sitemap.xml'));

		SitemapGenerator::create('https://amir-golmakaniy.ir')->writeToFile(public_path('sitemap.xml'));

		$this->info('Sitemap generated successfully!');
    }
}
