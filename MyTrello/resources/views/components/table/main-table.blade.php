<main>
    <div class="container-fluid">
        <div class="row">
            @if($columns->isEmpty())
                <div class="col-2">
                    <x-create.create-column id="{{$id}}"/>
                </div>
            @else
                @foreach($columns as $column)
                    <x-table-column title="{{$column->title}}" id="{{$column->id}}"/>
                @endforeach
                <div class="col-2">
                    <x-create.create-column id="{{$id}}"/>
                </div>
            @endif
        </div>
    </div>
</main>
