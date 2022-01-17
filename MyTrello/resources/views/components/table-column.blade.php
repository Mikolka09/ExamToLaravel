<div class="col-2" style="border: 4px solid coral; border-radius: 10px; margin-left: 10px;">
    @if($title=="")
        <x-title-text title="No title Column"/>
    @else
        <x-title-text title="{{$title}}"/>
    @endif
    @foreach($cards as $card)
        <div class="fw-bold fs-6 text-center" style="background-color:#b6effb ; opacity: 0.7;
    border: 3px solid #6610f2; border-radius: 10px; margin-top: 5px;">
            {{$card->task}}
        </div>
    @endforeach
    <div class="d-grid gap-2 mt-2">
        <x-create-card id="{{$id}}"/>
    </div>
</div>

