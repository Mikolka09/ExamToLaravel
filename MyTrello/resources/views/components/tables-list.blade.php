<div class="dropdown">
    <button class="btn btn-info dropdown-toggle fw-bold" style="margin: 6px;" type="button"
            id="dropdownTables"
            data-bs-toggle="dropdown" aria-expanded="false">
        Tables List
    </button>
    <ul class="dropdown-menu" aria-labelledby="dropdownTables">
        @foreach($tables as $table)
            <li><a class="dropdown-item" href='{{route('dashboard',['id'=>$table->id])}}'>{{$table->title}}</a></li>
        @endforeach
    </ul>
</div>
