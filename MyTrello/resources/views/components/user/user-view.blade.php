@if(!$userdata->isEmpty())
    <input class="form-control" type="text" hidden id="id" name="user_id" value="{{auth()->id()}}"/>
    <div class="form-group">
        <label for="firstname" class="form-label fw-bold">FirstName</label>
        <input class="form-control" type="text" id="firstname" name="firstname" placeholder="FirstName"
               value="{{$userdata->firstname}}"/>
        <small type="text" class="form-text text-muted">Enter the FirstName</small>
    </div>
    <div class="form-group">
        <label for="lastname" class="form-label fw-bold">LastName</label>
        <input class="form-control" type="text" id="lastname" name="lastname" placeholder="LastName"
               value="{{$userdata->lastname}}"/>
        <small type="text" class="form-text text-muted">Enter the LastName</small>
    </div>
    <div class="form-group">
        <label for="country" class="form-label fw-bold">Country</label>
        <input class="form-control" type="text" id="country" name="country" placeholder="Country"
               value="{{$userdata->country}}"/>
        <small type="text" class="form-text text-muted">Enter the Country</small>
    </div>
    <div class="form-group">
        <label for="city" class="form-label fw-bold">City</label>
        <input class="form-control" type="text" id="city" name="city" placeholder="City"
               value="{{$userdata->city}}"/>
        <small type="text" class="form-text text-muted">Enter the City</small>
    </div>
    <div class="form-group">
        <label for="avatar" class="form-label fw-bold">Avatar</label>
        <div style="margin-bottom: 10px;"><img src="{{$userdata->avatar}}" width="80px" alt="Avatar"></div>
        <input class="form-control" type="file" name="avatar"/>
        <small type="text" class="form-text text-muted">Enter the Avatar</small>
    </div>
    <div class="form-group">
        <label for="imgUrl" class="form-label fw-bold">Background Image</label>
        <div style="margin-bottom: 10px;"><img src="{{$userdata->imgUrl}}" width="80px" alt="Avatar"></div>
        <input class="form-control" type="file" name="imgUrl"/>
        <small type="text" class="form-text text-muted">Enter the Background Image</small>
    </div>
@else
    <input class="form-control" type="text" hidden id="id" name="user_id" value="{{auth()->id()}}"/>
    <div class="form-group">
        <label for="firstname" class="form-label fw-bold">FirstName</label>
        <input class="form-control" type="text" id="firstname" name="firstname" placeholder="FirstName"
               value=""/>
        <small type="text" class="form-text text-muted">Enter the FirstName</small>
    </div>
    <div class="form-group">
        <label for="lastname" class="form-label fw-bold">LastName</label>
        <input class="form-control" type="text" id="lastname" name="lastname" placeholder="LastName"
               value=""/>
        <small type="text" class="form-text text-muted">Enter the LastName</small>
    </div>
    <div class="form-group">
        <label for="country" class="form-label fw-bold">Country</label>
        <input class="form-control" type="text" id="country" name="country" placeholder="Country"
               value=""/>
        <small type="text" class="form-text text-muted">Enter the Country</small>
    </div>
    <div class="form-group">
        <label for="city" class="form-label fw-bold">City</label>
        <input class="form-control" type="text" id="city" name="city" placeholder="City"
               value=""/>
        <small type="text" class="form-text text-muted">Enter the City</small>
    </div>
    <div class="form-group">
        <label for="avatar" class="form-label fw-bold">Avatar</label>
        <div style="margin-bottom: 10px;"><img src="" width="80px" alt="Avatar"></div>
        <input class="form-control" type="file" name="avatar"/>
        <small type="text" class="form-text text-muted">Enter the Avatar</small>
    </div>
    <div class="form-group">
        <label for="imgUrl" class="form-label fw-bold">Background Image</label>
        <div style="margin-bottom: 10px;"><img src="" width="80px" alt="Avatar"></div>
        <input class="form-control" type="file" name="imgUrl"/>
        <small type="text" class="form-text text-muted">Enter the Background Image</small>
    </div>
@endif
