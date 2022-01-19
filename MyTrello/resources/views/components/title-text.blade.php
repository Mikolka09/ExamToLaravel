<div class="container" style="background-color: rgba(217, 155, 33, 0.7);
    border: 3px solid #d63384; border-radius: 10px; margin-top: 5px;">
    <div class="row text-center align-items-center" >
        <div class=" col-10 fw-bold fs-5 " style="text-transform: uppercase;">
            {{$title}}
        </div>
        <div class="col-1">
            <div>
                <x-edit-column id="{{$id}}" idtab="{{$idTab}}"/>
            </div>
            <div>
                <x-delete-column id="{{$id}}" idtab="{{$idTab}}"/>
            </div>
        </div>
    </div>
</div>


