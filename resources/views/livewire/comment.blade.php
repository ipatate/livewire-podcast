@props(['podcast'])
<div id="comment" class="border-t pt-6">
    <h2 class="text-2xl">Ajoutez votre commentaire</h2>
    <form class="flex flex-col gap-3 py-12" wire:submit="save">
        <label class="flex flex-col">
            <span>Titre</span>
            <input type="text" wire:model="title" class="p-2 border
            rounded-lg"/>
            @error('title') <span
                class="mt-2 text-red-500 text-xs">{{ $message }}</span>
            @enderror
        </label>
        <label class="flex flex-col">
            <span>Votre texte</span>
            <textarea rows="5" wire:model="content" class="p-2 border
            rounded-lg"></textarea>
            @error('content') <span
                class="mt-2 text-red-500 text-xs">{{ $message }}</span>
            @enderror
        </label>
        <button class="self-end w-36 bg-blue-500 text-white rounded-lg
        p-2">Envoyer
        </button>
        <div wire:loading>
            Saving comment...
        </div>
    </form>
    <h2 class="text-3xl">
        @livewire('comment-count', ['podcast' => $podcast])
    </h2>
    <div class="divide-amber-950 divide-solid mt-10">
        @foreach($podcast->comments as $comment)
            <div class="py-3 flex flex-col gap-1" wire:key="{{ $comment->id }}">
                <strong>{{ $comment->title }}</strong>
                <time
                    class="text-xs text-gray-400">{{ date_format
                    ($comment->created_at, 'd M Y H:i')
                    }}</time>
                <div>
                    {{ $comment->content }}
                </div>
            </div>
        @endforeach
    </div>

</div>
