@props(['podcast' => null])
<div class="py-8 flex items-center relative">
    <div class="flex-1">
            <span
                class="font-extrabold text-[100px] text-blue-100
                opacity-60 absolute right-0
                -top-[30px]">#{{$podcast->id}}</span>
        <h2 class="font-semibold text-xl">{{$podcast->title}}</h2>
        <div class="text-gray-500 pt-2 text-xs">
            Présenté par :
            @foreach($podcast->presentators as $presentator)
                <strong class="[&:not(:last-child)]:after:content-['/']
            font-normal after:text-blue-500">
                    {{ $presentator->name }}
                </strong>
            @endforeach
        </div>
        <div class="text-xs pt-3">
            @livewire('comment-count', ['podcast' => $podcast])
        </div>
    </div>
    <a href="{{ route('podcast', $podcast) }}"
        class="text-xs text-blue-500 text-transparent after:absolute
        after:inset-0" wire:navigate>
        Voir l'épisode
    </a>
</div>