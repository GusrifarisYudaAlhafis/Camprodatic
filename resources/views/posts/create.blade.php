@extends('layouts.main')
@section('content')
    <div class="card mb-3">
        <div class="card-header">
            <div class="row flex-between-end">
                <div class="col-auto align-self-center">
                    <h5 class="mb-0" data-anchor="data-anchor">Table Example</h5>
                </div>
            </div>
        </div>
        <div class="card-body pt-0">
            <div class="tab-content">
                <div class="tab-pane preview-tab-pane active" role="tabpanel" aria-labelledby="tab-dom-316cb649-6a3e-4ec3-9de8-7d83e880873f" id="dom-316cb649-6a3e-4ec3-9de8-7d83e880873f">
                    <form action="{{ route('posts.store') }}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label" for="exampleFormControlInput1">Title</label>
                            <input class="form-control" id="exampleFormControlInput1" type="text" name="title" required />
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="exampleFormControlTextarea1">Content</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="content" required></textarea>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="exampleFormControlInput2">Date</label>
                            <input class="form-control" id="exampleFormControlInput2" type="date" name="date" required />
                        </div>
                        <div class="d-grid gap-2">
                            <button class="btn btn-primary" type="submit">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
