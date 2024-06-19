<?php

namespace App\Livewire;

use App\Models\Podcast;
use Livewire\Component;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Url;
use Livewire\WithPagination;

class Home extends Component {

    use WithPagination;

    #[Url]
    public $keyword;

    #[Computed]
    public function podcasts() {
        return Podcast::query()
        ->when( $this->keyword && strlen( $this->keyword ) > 2, function ( $query, $keyword ) {
            $query->where( 'title', 'like', "%{$this->keyword}%" );
        })
        ->orderByDesc('id')
        ->with( [ 'comments', 'presentators' ] )
        ->withCount( 'comments' )->paginate( 5 );
    }

    public function updatingKeyword() {
        $this->resetPage();
    }

}
