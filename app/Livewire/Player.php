<?php

namespace App\Livewire;

use Livewire\Attributes\On;
use Livewire\Attributes\Session;
use Livewire\Component;

class Player extends Component {

    #[Session( 'src' )]
    public $src;

    public function mount() {
        $this->src = session( 'src', '' );
    }

    #[On( 'update-source' )]
    public function updateSource( $src = null ) {
        $this->src = $src;
    }

}
