
<a href="#" data-bs-toggle="modal" data-bs-target="#editColumn{{$id}}">
    <img src="{{asset('img/edit-icon-g11a9f1740_640.png')}}" alt="Edit" width="20px"/>
</a>

<!-- Modal -->
<div class="modal fade text-start" id="editColumn{{$id}}" tabindex="-1" aria-labelledby="editColumnLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content" style="background-color: powderblue;">
            <div class="modal-header">
                <h5 class="modal-title fw-bold" id="editColumnLabel">Edit Column</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{route('columns.update', $id)}}" method="POST">
                    @csrf
                    @method("PUT")
                    <div class="form-group mb-2">
                        <input class="form-control" type="text" hidden id="id" name="table_id" value="{{$idtab}}"/>
                        <label for="title" class="form-label fw-bold">Title Column</label>
                        <input class="form-control" type="text" id="title" name="title" placeholder="Title Column"
                        value="{{collect(App\Models\MyColumn::all()->where('id', '==', $id))->first()->title}}"/>
                        <small type="text" class="form-text text-muted">Enter the column title</small>
                    </div>
                    <div class="d-grid gap-2 mt-2">
                        <button type="submit" class="btn btn-primary fw-bold btn-sm">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>





