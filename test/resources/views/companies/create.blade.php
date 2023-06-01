<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">


<form class="row gy-2 gx-3 align-items-center" action="{{ route('store') }}" method="post" enctype="multipart/form">
    @csrf
    <div class="col-auto">
        <label class="visually-hidden" for="autoSizingInput">Name</label>
        <input type="text" class="form-control" name="name" id="name" placeholder="Jane Doe">
    </div>
    <div class="col-auto">
        <label class="visually-hidden" for="autoSizingInputGroup">Age</label>
        <div class="input-group">

            <input type="text" class="form-control" name="age" id="age" placeholder="25">
        </div>
    </div>


    <div class="col-auto">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>
