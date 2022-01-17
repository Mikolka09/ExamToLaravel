<button type="button" class="btn btn-success fw-bold btn-sm" style="box-shadow: 0 0 10px rgba(0,0,0,0.5);"
        data-bs-toggle="modal" data-bs-target="#exampleModal2">Create Card</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title fw-bold" id="exampleModalLabel">Create Card</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{route('cards.store')}}" method="POST">
                    @csrf
                    <div class="form-group mb-2">
                        <input class="form-control" type="text" hidden id="id" name="column_id" value="{{$id}}"/>
                        <label for="title" class="form-label fw-bold">Task Card</label>
                        <textarea class="form-control" type="text" id="task" name="task" placeholder="Task Card"></textarea>
                        <small type="text" class="form-text text-muted">Enter the  task card</small>
                    </div>
                    <div class="d-grid gap-2 mt-2">
                        <button type="submit" class="btn btn-success fw-bold btn-sm">Create</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>





