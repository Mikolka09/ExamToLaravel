
<a href="#" data-bs-toggle="modal" data-bs-target="#deleteCard{{$id}}">
    <img src="{{asset('img/delete.png')}}" alt="Delete" width="24px"/>
</a>

<!-- Modal -->
<div class="modal fade text-start" id="deleteCard{{$id}}" tabindex="-1" aria-labelledby="deleteCardLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content" style="background-color: lightsteelblue;">
            <div class="modal-header">
                <h5 class="modal-title fw-bold" id="deleteCardLabel">Delete Card</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{route('cards.destroy', $id)}}" method="POST">
                    @csrf
                    @method("DELETE")
                    <div class="form-group mb-2">
                        <input class="form-control" type="text" hidden id="id" name="table_id" value="{{$idTab}}"/>
                        <label for="title" class="form-label fw-bold">
                            Do you really want to delete with Card?</label>
                    </div>
                    <div class="d-grid gap-2 mt-2">
                        <button type="submit" class="btn btn-danger fw-bold btn-sm">Delete</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>





