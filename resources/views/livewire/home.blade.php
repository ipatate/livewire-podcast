<div>
<div>
    <input type="search" wire:model.live.debounce="keyword" class="w-full p-2 rounded-md border-2 border-gray-300" placeholder="Rechercher un podcast" />
</div>
<div class="space-y-1 divide-y divide-gray-2000">
    @foreach($this->podcasts as $podcast)
        <livewire:podcast-item :podcast="$podcast" wire:key="{{ $podcast->id }}" />
    @endforeach
</div>
    {{ $this->podcasts->links('livewire::tailwind') }}
</div>