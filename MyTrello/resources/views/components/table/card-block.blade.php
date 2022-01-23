<div class="container" style="background-color:rgba(33, 217, 217, 0.7) ;
    border: 3px solid #6610f2; border-radius: 10px; margin-top: 5px;">
    <div class="row text-start align-items-center">
        <div class="col-10 fw-bold fs-6">
            {{$task}}
        </div>
        <div class="col-1">
            <div>
                <x-edit.edit-card id="{{$id}}" id_tab="{{$idTab}}"/>
            </div>
            <div>
                <x-delete.delete-card id="{{$id}}" id_tab="{{$idTab}}"/>
            </div>
        </div>
    </div>
</div>

