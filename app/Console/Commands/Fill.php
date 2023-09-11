<?php

namespace App\Console\Commands;

use App\Models\Post;
use Illuminate\Console\Command;

class Fill extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:fill';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        Post::factory(100)->create();
    }
}
