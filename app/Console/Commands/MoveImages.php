<?php

namespace App\Console\Commands;

use App\Models\Post;
use Illuminate\Support\Facades\File;
use Illuminate\Console\Command;

class MoveImages extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'move:images';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Move images from public/views/images to public/images';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $posts = Post::whereNotNull('urlHinh')->get();

        foreach ($posts as $post) {
            $oldPath = public_path('views/images/' . $post->urlHinh);
            $newPath = public_path('images/' . $post->urlHinh);

            if (File::exists($oldPath)) {
                File::move($oldPath, $newPath);
                $this->info("Đã di chuyển ảnh cho bài viết: {$post->id}");
            } else {
                $this->warn("Không tìm thấy ảnh cho bài viết: {$post->id}");
            }
        }

        $this->info('Hoàn tất di chuyển ảnh.');
    }
}
