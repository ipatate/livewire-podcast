@props(['podcast'])
<span>
<span class="px-1.5 p-0.5 bg-gray-200 rounded-lg">{{ $this->total }}</span>
<span>
@if($this->total < 2)
        commentaire
    @else
        commentaires
    @endif
</span>
</span>
