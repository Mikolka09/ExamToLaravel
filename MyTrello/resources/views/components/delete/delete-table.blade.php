
<a href="#" data-bs-toggle="modal" data-bs-target="#deleteTable">
    <img src="{{asset('img/delete.png')}}" alt="Delete" width="24px"/>
</a>

<!-- Modal -->
<div class="modal fade text-start" id="deleteTable" tabindex="-1" aria-labelledby="deleteTableLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content" style="background-color: lightsteelblue;">
            <div class="modal-header">
                <h5 class="modal-title fw-bold" id="deleteTableLabel">Delete Table</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{route('tables.destroy', $id)}}" method="POST">
                    @csrf
                    @method("DELETE")
                    <div class="form-group mb-2">
                        <label for="title" class="form-label fw-bold">
                            Do you really want to delete with Table:
                            <span style="text-decoration: underline; color: red;">{{collect(App\Models\MyTable::all()->where('id', '==', $id))->first()->title}}</span>?</label>
                    </div>
                    <div class="d-grid gap-2 mt-2">
                        <button type="submit" class="btn btn-danger fw-bold btn-sm">Delete</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>





