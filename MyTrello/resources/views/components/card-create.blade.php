<button type="button" class="btn btn-success fw-bold btn-sm" style="box-shadow: 0 0 10px rgba(0,0,0,0.5); margin-bottom: 5px;"
        data-bs-toggle="modal" data-bs-target="#modalCard{{$id}}">Create Card</button>

<!-- Modal -->
<div class="modal fade" id="modalCard{{$id}}" tabindex="-1" aria-labelledby="modalCardLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title fw-bold" id="modalCardLabel">Create Card</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{route('cards.store')}}" method="POST">
                    @csrf
                    <div class="form-group mb-2">
                        <input class="form-control" type="text" hidden id="id" name="column_id" value="{{$id}}"/>
                        <label for="task" class="form-label fw-bold">Task Card</label>
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
