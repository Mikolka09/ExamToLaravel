<header>
    <div class="row">
        <div class=" col-11 fw-bold fs-2 text-center"
             style="color: black; text-shadow: 1px 1px 2px black, 0 0 1em red; background-color: rgba(214, 217, 33, 0.6);
 text-transform: uppercase;">
            {{$title}}
        </div>

        <div class="col-1 text-center" style="background-color: rgba(214, 217, 33, 0.6);">
            @if($id != 0)
                <div>
                    <x-edit.edit-table id="{{$id}}"/>
                </div>
                <div>
                    <x-delete.delete-table id="{{$id}}"/>
                </div>
            @endif
        </div>

    </div>
</header>
