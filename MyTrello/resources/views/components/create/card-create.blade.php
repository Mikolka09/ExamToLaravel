<button type="button" class="btn btn-success fw-bold btn-sm"
        style="box-shadow: 0 0 10px rgba(0,0,0,0.5); margin-bottom: 5px;"
        data-bs-toggle="modal" data-bs-target="#modalCard{{$id}}">Create Card
</button>

<!-- Modal -->
<div class="modal fade" id="modalCard{{$id}}" tabindex="-1" aria-labelledby="modalCardLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content" style="background-color: papayawhip;">
            <div class="modal-header">
                <h5 class="modal-title fw-bold" id="modalCardLabel">Create Card</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{route('cards.store')}}" method="POST">
                    @csrf
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
                        <input class="form-control" type="text" hidden id="id" name="column_id" value="{{$id}}"/>
                        <label for="task" class="form-label fw-bold">Task Card</label>
                        <textarea class="form-control" type="text" id="task" name="task"
                                  placeholder="Task Card"></textarea>
                        <small type="text" class="form-text text-muted">Enter the task card</small>
                    </div>
                    <div class="d-grid gap-2 mt-2">
                        <button type="submit" class="btn btn-success fw-bold btn-sm">Create</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
