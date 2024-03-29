<?php

use App\Models\Media;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('reviews', function (Blueprint $table) {
            $table->id();

            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            // $table->foreignId('media_id')->constrained()->cascadeOnDelete();
            // $table->foreignIdFor(Media::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(Media::class)->constrained('media')->cascadeOnDelete();

            $table->text('body');
            $table->tinyInteger('rating');
            $table->string('img_path')->nullable();
            $table->timestampTz('published_at')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reviews');
    }
};
