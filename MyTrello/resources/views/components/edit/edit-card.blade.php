
<a href="#" data-bs-toggle="modal" data-bs-target="#editCard{{$id}}">
    <img src="{{asset('img/edit-icon-g11a9f1740_640.png')}}" alt="Edit" width="20px"/>
</a>

<!-- Modal -->
<div class="modal fade text-start" id="editCard{{$id}}" tabindex="-1" aria-labelledby="editCardLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content" style="background-color: powderblue;">
            <div class="modal-header">
                <h5 class="modal-title fw-bold" id="editCardLabel">Edit Card</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{route('cards.update', $id)}}" method="POST">
                    @csrf
                    @method("PUT")
                    <div class="form-group mb-2">
                        <label for="task" class="form-label fw-bold">Importance</label>
                        <div class="row justify-content-center">
                            <div class="col-4">
                                <input class="form-check-input" type="checkbox" name="rgba" id="important"
                                       value="rgba(196, 51, 51, 0.7)"/>
                                <label class="form-check-label">
                                    <div style="background-color:rgba(196, 51, 51, 0.7); width: 90px; height: 30px; text-align: center;
                                border: 2px solid black; border-radius: 15px; margin-left: 5px; font-weight: bold;">
                                        Important
                                    </div>
                                </label>
                            </div>
                            <div class="col-4">
                                <input class="form-check-input" type="checkbox" name="rgba" id="medium"
                                       value="rgba(51, 153, 196, 0.7)"/>
                                <label class="form-check-label">
                                    <div style="background-color:rgba(51, 153, 196, 0.7); width: 80px; height: 30px; text-align: center;
                                border: 2px solid black; border-radius: 15px; margin-left: 5px; font-weight: bold;">
                                        Medium
                                    </div>
                                </label>
                            </div>
                            <div class="col-3">
                                <input class="form-check-input" type="checkbox" name="rgba" id="low"
                                       value="rgba(150, 196, 51, 0.7)"/>
                                <label class="form-check-label">
                                    <div style="background-color:rgba(150, 196, 51, 0.7); width: 70px; height: 30px; text-align: center;
                                border: 2px solid black; border-radius: 15px; margin-left: 5px; font-weight: bold;">
                                        Low
                                    </div>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group mb-2">
                        <input class="form-control" type="text" hidden id="id" name="table_id" value="{{$idTab}}"/>
                        <label for="title" class="form-label fw-bold">Task Card</label>
                        <textarea class="form-control" type="text" id="task" name="task" placeholder="Task Card">{{collect(App\Models\MyCard::all()->where('id', '==', $id))->first()->task}}</textarea>
                        <small type="text" class="form-text text-muted">Enter the  task card</small>
                    </div>
                    <div class="d-grid gap-2 mt-2">
                        <button type="submit" class="btn btn-primary fw-bold btn-sm">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>





