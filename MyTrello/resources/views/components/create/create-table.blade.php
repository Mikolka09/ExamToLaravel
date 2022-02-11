<button type="button" class="btn btn-primary fw-bold" style="box-shadow: 0 0 10px rgba(0,0,0,0.5);"
        data-bs-toggle="modal" data-bs-target="#createTable">Create Table</button>

<!-- Modal -->
<div class="modal fade" id="createTable" tabindex="-1" aria-labelledby="createTableLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content" style="background-color: papayawhip;">
            <div class="modal-header">
                <h5 class="modal-title fw-bold" id="createTableLabel">Create Table</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{route('tables.store')}}" method="POST">
                    @csrf
                    <input class="form-control" type="text" hidden id="id" name="user_id" value="{{auth()->id()}}"/>
                    <div class="form-group mb-2">
                        <label for="title" class="form-label fw-bold">Title Table</label>
                        <input class="form-control" type="text" id="title" name="title" placeholder="Title Table"/>
                        <small type="text" class="form-text text-muted">Enter the table title</small>
                    </div>
                    <div class="d-grid gap-2 mt-2">
                        <button type="submit" class="btn btn-success fw-bold btn-sm">Create</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>





