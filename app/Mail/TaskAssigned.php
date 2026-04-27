<?php

namespace App\Mail;

use App\Models\Task;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class TaskAssigned extends Mailable    // TODO Day 11: implements ShouldQueue
{
    use Queueable, SerializesModels;

    public function __construct(public Task $task)
    {
        // TODO Day 11: receive the Task instance
    }

    public function envelope(): Envelope
    {
        // TODO Day 11: set subject — "You've been assigned: {task title}"
        return new Envelope(subject: 'TODO Day 11');
    }

    public function content(): Content
    {
        // TODO Day 11: pass $this->task to the email view
        return new Content(markdown: 'emails.task-assigned');
    }

    public function attachments(): array
    {
        return [];
    }
}