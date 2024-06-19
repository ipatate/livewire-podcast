<?php

namespace App\Livewire;

use App\Enum\PlayerState;
use App\Models\Podcast;
use Livewire\Attributes\Computed;
use Livewire\Attributes\On;
use Livewire\Attributes\Session;
use Livewire\Component;

class PlayBtn extends Component {

    public Podcast $podcast;

    #[Session( 'src' )]
    public $src;

    public PlayerState $state = PlayerState::paused;

    public function mount() {
        $this->src = session( 'src', '' );
    }

    #[On( 'set-state' )]
    public function setState( bool $state ) {
        // test in front if player is paused
        $this->state = $state === true ? PlayerState::paused :
            PlayerState::playing;
    }

    #[On( 'play' )]
    public function playState(): void {
        if ( $this->src === $this->podcast->file ) {
            $this->state = PlayerState::playing;
        }
    }

    #[On( 'pause' )]
    public function pauseState(): void {
        if ( $this->src === $this->podcast->file ) {
            $this->state = PlayerState::paused;
        }
    }

    public function toggle() {
        $this->state = $this->state === PlayerState::playing ? PlayerState::paused : PlayerState::playing;
        $this->src   = $this->podcast->file;
        $this->dispatch( 'update-source', src: $this->podcast->file );
        $this->dispatch( $this->state === PlayerState::playing ? 'played' : 'paused' );
    }

    #[Computed]
    public function onTrack() {
        return $this->src === $this->podcast->file && $this->state === PlayerState::playing;
    }

}
