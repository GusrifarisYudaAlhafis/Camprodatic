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
                    <a href="{{ route('posts.create') }}" class="btn btn-primary me-1 mb-1" type="button">
                        <span class="fas fa-plus me-1" data-fa-transform="shrink-3"></span>Tambah
                    </a>
                    <div id="tableExample" data-list='{"valueNames":["title","content","date"],"page":5,"pagination":true}'>
                        <div class="table-responsive scrollbar">
                            <table class="table table-bordered table-striped fs--1 mb-0">
                                <thead class="bg-200 text-900">
                                <tr>
                                    <th class="sort" data-sort="title">Title</th>
                                    <th class="sort" data-sort="content">Content</th>
                                    <th class="sort" data-sort="date">Date</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody class="list">
                                @foreach($data as $d)
                                    <tr>
                                        <td class="title">{{ $d->title }}</td>
                                        <td class="content">{{ $d->content }}</td>
                                        <td class="date">{{ $d->date }}</td>
                                        <td>
                                            <div class="btn-group">
                                                <a href="{{ route('posts.edit', $d) }}" class="btn btn-warning me-1 mb-1" type="button">
                                                    <span class="fas fa-pen me-1" data-fa-transform="shrink-3"></span>Ubah
                                                </a>
                                                <form action="{{ route('posts.destroy', $d) }}" method="post">
                                                    @method('DELETE')
                                                    @csrf
                                                    <button class="btn btn-danger me-1 mb-1" type="submit">
                                                        <span class="fas fa-trash me-1" data-fa-transform="shrink-3"></span>Hapus
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="row align-items-center mt-3">
                            <div class="pagination d-none"></div>
                            <div class="col">
                                <p class="mb-0 fs--1">
                                    <span class="d-none d-sm-inline-block" data-list-info="data-list-info"></span>
                                    <span class="d-none d-sm-inline-block"> &mdash; </span>
                                    <a class="fw-semi-bold" href="#!" data-list-view="*">View all<span class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span></a><a class="fw-semi-bold d-none" href="#!" data-list-view="less">View Less<span class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span></a>
                                </p>
                            </div>
                            <div class="col-auto d-flex">
                                <button class="btn btn-sm btn-primary" type="button" data-list-pagination="prev"><span>Previous</span></button>
                                <button class="btn btn-sm btn-primary px-4 ms-2" type="button" data-list-pagination="next"><span>Next</span></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
