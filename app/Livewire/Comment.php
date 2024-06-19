<?php

namespace App\Livewire;

use App\Events\CommentAdded;
use Illuminate\Http\Request;
use Livewire\Attributes\On;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Comment extends Component {
    public $podcast;

    #[Validate( 'required|min:10' )]
    public $title;

    #[Validate( 'required|min:30' )]
    public $content;

    public function save( Request $request ) {

        $this->validate();

        $comment          = new \App\Models\Comment();
        $comment->title   = $this->title;
        $comment->content = $this->content;

        $this->podcast->comments()->save(
            $comment
        );

        $this->reset( [ 'title', 'content' ] );

        CommentAdded::dispatch( $this->podcast, 'comment.add.' . $this->podcast->id );
    }

    #[On( 'echo:comment.add.{podcast.id},CommentAdded' )]
    public function resetComment() {
        $this->js( '$wire.$refresh()' );
    }
}
