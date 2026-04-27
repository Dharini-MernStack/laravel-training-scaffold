<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            // TODO Day 4: add columns
            //   - body (text)
            //   - user_id (foreignId, references users.id, onDelete cascade)
            //   - task_id (foreignId, references tasks.id, onDelete cascade)
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('comments');
    }
};