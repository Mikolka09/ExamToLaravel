
<a href="#" data-bs-toggle="modal" data-bs-target="#editTable">
    <img src="{{asset('img/edit-icon-g11a9f1740_640.png')}}" alt="Edit" width="20px"/>
</a>

<!-- Modal -->
<div class="modal fade text-start" id="editTable" tabindex="-1" aria-labelledby="editTableLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content" style="background-color: powderblue;">
            <div class="modal-header">
                <h5 class="modal-title fw-bold" id="editTableLabel">Edit Table</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{route('tables.update', $id)}}" method="POST">
                    @csrf
                    @method("PUT")
                    <div class="form-group mb-2">
                        <label for="title" class="form-label fw-bold">Title Table</label>
                        <input class="form-control" type="text" id="title" name="title" placeholder="Title Table"
                        value="{{collect(App\Models\MyTable::all()->where('id', '==', $id))->first()->title}}"/>
                        <small type="text" class="form-text text-muted">Enter the table title</small>
                    </div>
                    <div class="d-grid gap-2 mt-2">
                        <button type="submit" class="btn btn-primary fw-bold btn-sm">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>





