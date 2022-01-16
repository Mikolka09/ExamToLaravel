<div class="row">
    <div class="dropdown col-1">
        <button class="btn btn-info dropdown-toggle fw-bold" style="margin: 6px;" type="button"
                id="dropdownTables"
                data-bs-toggle="dropdown" aria-expanded="false">
            Tables List
        </button>
        <ul class="dropdown-menu" aria-labelledby="dropdownTables">
            @foreach($tables as $table)
                <li><a class="dropdown-item" href='{{route('table', ['id'=>$table->id])}}'>{{$table->title}}</a></li>
            @endforeach
        </ul>
    </div>
    <div class="col fw-bold fs-2 text-center" style="color: coral; text-shadow: 1px 1px 2px black, 0 0 1em red;">
        Please choose which table to work!
    </div>
</div>

