<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            // TODO Day 4: add columns
            //   - title (string)
            //   - description (text, nullable)
            //   - status (string, default 'todo')
            //   - due_date (date, nullable)
            //   - project_id (foreignId, references projects.id, onDelete cascade)
            //   - assigned_to_id (foreignId nullable, references users.id, onDelete set null)
            // TODO Day 11: add 'attachment_path' column (string, nullable) for file uploads
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tasks');
    }
};