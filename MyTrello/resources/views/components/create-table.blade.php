<button type="button" class="btn btn-primary fw-bold" style="box-shadow: 0 0 10px rgba(0,0,0,0.5);"
        data-bs-toggle="modal" data-bs-target="#exampleModal">Create Table</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title fw-bold" id="exampleModalLabel">Create Table</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{route('tables.store')}}" method="POST">
                    @csrf
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




