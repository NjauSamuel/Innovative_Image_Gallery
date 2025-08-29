<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;

class MigrateS3Objects extends Command
{
    protected $signature = 'media:migrate-to-s3';
    protected $description = 'Move all local files to S3';

    public function handle()
    {
        $local = Storage::disk('public'); // use the correct disk
        $s3 = Storage::disk('s3');        

        $files = $local->allFiles();

        if (empty($files)) {
            $this->warn("⚠️ No files found on local disk.");
            return;
        }

        foreach ($files as $file) {
            $this->info("Uploading: {$file}");
            $s3->put($file, $local->get($file));
        }

        $this->info("✅ Migration complete!");
    }
}
