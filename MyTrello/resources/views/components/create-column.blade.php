<button type="button" class="btn btn-warning fw-bold btn-sm" style="box-shadow: 0 0 10px rgba(0,0,0,0.5);"
        data-bs-toggle="modal" data-bs-target="#modalColumn{{$id}}">Create Column</button>

<!-- Modal -->
<div class="modal fade" id="modalColumn{{$id}}" tabindex="-1" aria-labelledby="modalColumnLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title fw-bold" id="modalColumnLabel">Create Column</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{route('columns.store')}}" method="POST">
                    @csrf
                    <div class="form-group mb-2">
                        <input class="form-control" type="text" hidden id="id" name="table_id" value="{{$id}}"/>
                        <label for="title" class="form-label fw-bold">Title Column</label>
                        <input class="form-control" type="text" id="title" name="title" placeholder="Title Column"/>
                        <small type="text" class="form-text text-muted">Enter the column title</small>
                    </div>
                    <div class="d-grid gap-2 mt-2">
                        <button type="submit" class="btn btn-success fw-bold btn-sm">Create</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>





