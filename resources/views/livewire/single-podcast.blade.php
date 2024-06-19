<div class="space-y-5 relative">
    <span
        class="font-extrabold text-[300px] text-blue-100 opacity-60 absolute
        right-0
        -top-[200px]">#{{
        $podcast->id
        }}</span>
    <h1 class="relative z-[1] text-7xl text-balance font-semibold">{{
    $podcast->title
    }}</h1>
    <div class="relative z-[1] text-gray-500 py-1 pt-14">
        Présenté par :
        @foreach($podcast->presentators as $presentator)
            <strong class="[&:not(:last-child)]:after:content-['/']
                    font-normal after:text-blue-500">
                {{ $presentator->name }}
            </strong>
        @endforeach
    </div>
    <div>
        <a href="#comment" class="inline-flex gap-1">
            @livewire('comment-count', ['podcast' => $podcast])
        </a>
    </div>
    <div class="pb-5">
        @livewire('play-btn', ['podcast' => $podcast])
    </div>
    <div class="relative z-[1] text-lg">
        {{ $podcast->description }}
    </div>
    @livewire('comment', ['podcast' => $podcast])
</div>
