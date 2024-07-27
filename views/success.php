<?php 
    if(endsInZeroOrFive($lastId)) { ?>
    <div class="card w-50">
        <div class="card-body w-100 d-flex flex-column justify-content-center align-items-center">
            <h1 onclick="winner()" class="text-primary fw-bold text-center"> CONGRATULATIONS YOU WON </h1>
            <button class="btn btn-primary text-white" onclick="winner()">Click To Celebrate</button>
            <button class="btn btn-secondary text-white mt-2" onclick="location.reload()">Take me home :)</button>
        </div>
    </div>
<?php } else { ?>
    <div class="card w-50">
        <div class="card-body w-100 d-flex flex-column justify-content-center align-items-center">
            <h1 class="text-primary fw-bold text-center"> Better Luck Next Time...</h1>
            <button class="btn btn-primary text-white" onclick="location.reload()">Take me home :(</button>
        </div>
    </div>
<?php }  ?>
