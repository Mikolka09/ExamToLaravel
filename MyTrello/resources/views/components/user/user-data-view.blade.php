@if(!$userdata->isEmpty())
    <div>
        <strong>FirstName: </strong>
        {{$userdata[0]->firstname}}
    </div>
    <div>
        <strong>LastName: </strong>
        {{$userdata[0]->lastname}}
    </div>
    <div>
        <strong>Country: </strong>
        {{$userdata[0]->country}}
    </div>
    <div>
        <strong>City: </strong>
        {{$userdata[0]->city}}
    </div>
    <div>
        <strong>Avatar: </strong>
        <div style="margin-bottom: 10px;"><img src="{{$userdata[0]->avatar}}" width="80px" alt="Avatar"></div>
    </div>
    <div>
        <strong>Background Image: </strong>
        <div style="margin-bottom: 10px;"><img src="{{$userdata[0]->imgUrl}}" width="80px" alt="imgUrl"></div>
    </div>
@endif
