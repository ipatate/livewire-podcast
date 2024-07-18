<?php

namespace App\Livewire;

use App\Models\Podcast;
use Livewire\Attributes\Computed;
use Livewire\Attributes\On;
use Livewire\Component;

class CommentCount extends Component
{

    public Podcast $podcast;

    public int $total = 0;

    public function mount()
    {
        $this->total = $this->podcast->comments_count;
    }

    #[On('echo:comment.add.{podcast.id},CommentAdded')]
    #[On('comment-add')]
    public function updateCount()
    {
        $this->total = $this->podcast->comments()->count();
    }
}
