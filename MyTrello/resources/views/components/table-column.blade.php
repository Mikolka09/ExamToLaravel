<div class="col-2" style="border: 2px solid red; border-radius: 10px;">
    @if($title=="")
        <div class="d-grid gap-2 mt-2">
            <button type="submit" style="box-shadow: 0 0 10px rgba(0,0,0,0.5);" class="btn btn-primary fw-bold btn-sm">Create Title</button>
        </div>
    @else
        <div class="fw-bold fs-5 text-center" style="background-color: darksalmon; opacity: 0.7;
    border: 2px solid green; border-radius: 10px;">
            {{$title}}
        </div>
    @endif
    @foreach($cards as $card)
        <div>
            {{$card->task}}
        </div>
    @endforeach
    <div class="d-grid gap-2 mt-2">
        <button type="submit" style="box-shadow: 0 0 10px rgba(0,0,0,0.5);" class="btn btn-success fw-bold btn-sm">Create Card</button>
    </div>
</div>

