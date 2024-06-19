@props(['podcast'])
<div>
    @if($podcast->file)
        <button wire:click="toggle" class="w-24 h-24" wire:init="$dispatch
        ('set-state', {state: document.getElementById('audio-player')
        .paused});">
            @if($this->onTrack)
                <svg class="w-full h-full" xmlns="http://www.w3.org/2000/svg"
                     width="32" height="32"
                     viewBox="0 0 24 24">
                    <path fill="currentColor"
                          d="M10.308 15.5q.213 0 .357-.144t.143-.356V9q0-.213-.144-.356t-.357-.144t-.356.144T9.808 9v6q0 .213.144.356q.144.144.356.144m3.385 0q.213 0 .356-.144t.143-.356V9q0-.213-.144-.356q-.144-.144-.356-.144q-.213 0-.357.144T13.192 9v6q0 .213.144.356t.357.144m-1.69 5.5q-1.866 0-3.51-.708q-1.643-.709-2.859-1.924t-1.925-2.856T3 12.003t.709-3.51Q4.417 6.85 5.63 5.634t2.857-1.925T11.997 3t3.51.709q1.643.708 2.859 1.922t1.925 2.857t.709 3.509t-.708 3.51t-1.924 2.859t-2.856 1.925t-3.509.709"/>
                </svg>
            @else
                <svg class="w-full h-full" xmlns="http://www.w3.org/2000/svg"
                     width="32" height="32"
                     viewBox="0 0 24 24">
                    <path fill="currentColor"
                          d="M10 15.577L15.577 12L10 8.423zM12.003 21q-1.866 0-3.51-.708q-1.643-.709-2.859-1.924t-1.925-2.856T3 12.003t.709-3.51Q4.417 6.85 5.63 5.634t2.857-1.925T11.997 3t3.51.709q1.643.708 2.859 1.922t1.925 2.857t.709 3.509t-.708 3.51t-1.924 2.859t-2.856 1.925t-3.509.709"/>
                </svg>
            @endif
        </button>
    @endif
</div>
