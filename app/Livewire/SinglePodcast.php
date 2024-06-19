<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Podcast;

class SinglePodcast extends Component {

    public Podcast $podcast;

    public function mount(Podcast $podcast) {
        $this->podcast = $podcast->with('comments', 'presentators')->withCount('comments')->findOrFail($podcast->id);
    }


}
