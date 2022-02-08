@if(!$userdata->isEmpty())
    <div class="row" style="margin-bottom: 10px;">
        <div class="col-6">
            <strong>FirstName: </strong>
            <span style="font-style: italic">{{$userdata[0]->firstname}}</span>
        </div>
        <div class="col-6">
            <strong>LastName: </strong>
            <span style="font-style: italic">{{$userdata[0]->lastname}}</span>
        </div>
    </div>
    <div class="row" style="margin-bottom: 10px;">
        <div class="col-6">
            <strong>Country: </strong>
            <span style="font-style: italic">{{$userdata[0]->country}}</span>
        </div>
        <div class="col-6">
            <strong>City: </strong>
            <span style="font-style: italic">{{$userdata[0]->city}}</span>
        </div>
    </div>
    <div class="row">
        <div class="col-6">
            <strong>Avatar: </strong>
            <div style="margin-bottom: 10px;"><img src="{{$userdata[0]->avatar}}" width="80px" alt="Avatar"></div>
        </div>
        <div class="col-6">
            <strong>Background Image: </strong>
            <div style="margin-bottom: 10px;"><img src="{{$userdata[0]->imgUrl}}" width="120px" alt="imgUrl"></div>
        </div>
    </div>
@endif
