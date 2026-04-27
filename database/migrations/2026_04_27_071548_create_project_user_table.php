<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('project_user', function (Blueprint $table) {
            $table->id();
            // TODO Day 4: add pivot columns
            //   - project_id (foreignId, references projects.id, onDelete cascade)
            //   - user_id (foreignId, references users.id, onDelete cascade)
            //   - unique([project_id, user_id]) constraint
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('project_user');
    }
};