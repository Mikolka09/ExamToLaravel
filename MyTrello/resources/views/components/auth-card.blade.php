<div class="container d-flex justify-content-center">
    <div class="row" style="width: 350px;">
        <div class="d-flex justify-content-center p-2">
            {{ $logo }}
        </div>

        <div class="d-flex justify-content-center align-items-center bg-white p-3"
             style="border-radius: 20px; box-shadow: 0 0 10px rgba(0,0,0,0.5);">
            {{ $slot }}
        </div>
    </div>

</div>
