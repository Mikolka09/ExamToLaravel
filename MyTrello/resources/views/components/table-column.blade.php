<div class="col-2" style="border: 4px solid coral; border-radius: 10px; margin-left: 10px; margin-bottom: 10px;
background-color: rgba(217, 219, 191, 0.6);">
    @if($title=="")
        <x-title-text title="No title Column"/>
    @else
        <x-title-text title="{{$title}}"/>
    @endif
    @foreach($cards as $card)
        <div class="fw-bold fs-6 text-center" style="background-color:rgba(33, 217, 217, 0.7) ;
    border: 3px solid #6610f2; border-radius: 10px; margin-top: 5px;">
            {{$card->task}}
        </div>
    @endforeach
        <div class="d-grid gap-2 mt-2">
            <x-card-create id="{{$id}}"/>
        </div>
</div>
