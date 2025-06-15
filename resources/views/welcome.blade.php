@include('header')
<div class="container">
    <div class="row">
        <form action="{{ url('/upload') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3 mt-3">
                <label for="" class="form-label">Choose file</label>
                <input type="file" class="form-control" name="file" id="" placeholder=""
                    aria-describedby="fileHelpId" />
                <div id="fileHelpId" class="form-text">Help text</div>
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-primary">Upload</button>
            </div>
        </form>
    </div>
</div>
