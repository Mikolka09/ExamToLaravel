<div class="col-2" style="border: 4px solid coral; border-radius: 10px; margin-left: 10px; margin-bottom: 10px;
background-color: rgba(217, 219, 191, 0.6);">
    @if($title=="")
        {{dd($id_tab)}}
        <x-title-text title="No title Column" id="{{$id}}" id_tab="{{$id_tab}}"/>
    @else
        <x-title-text title="{{$title}}" id="{{$id}}" id_tab="{{$id_tab}}"/>
    @endif
    @foreach($cards as $card)
        <x-card-block task="{{$card->task}}" id_tab="{{$id_tab}}" id="{{$card->id}}"/>
    @endforeach
        <div class="d-grid gap-2 mt-2">
            <x-card-create id="{{$id}}"/>
        </div>
</div>
