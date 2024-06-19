<div class="fixed z-10 bottom-0 left-0 right-0 h-[100px]
            bg-gray-100 border-t border-blue-200 flex transition-all items-center
            justify-center
            @if(!$src) translate-y-full @endif"
>
    <audio id="audio-player" controls class="w-full bg-transparent
        rounded-none" src="{{$src}}" preload="auto"
           x-init="$el.addEventListener('canplay', () => {$el.play()});"
           wire:play="$dispatch('play')" wire:pause="$dispatch('pause')"
           wire:ended="$dispatch('pause')"
           x-on:played.window="$el.play()" x-on:paused.window="$el.pause()"
    ></audio>
</div>
