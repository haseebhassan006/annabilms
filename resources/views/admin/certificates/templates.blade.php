@extends('admin.layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>{{ $pageTitle }}</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="/admin/">{{trans('admin/main.dashboard')}}</a>
                </div>
                <div class="breadcrumb-item">{{ $pageTitle}}</div>
            </div>
        </div>

        <div class="section-body">

            <div class="row">
                <div class="col-12 col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped font-14">
                                    <tr>
                                        <th class="text-left">Title</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>

                                                                            <tr>
                                            <td>
                                                <span>Certificate</span>
                                            </td>

                                            <td>
                                                <span class="text-success">Publish</span>
                                            </td>

                                            <td>
                                                                                                    <a href="/admin/certificates/templates/1/edit" class="btn-transparent text-primary" data-toggle="tooltip" data-placement="top" title="Edit">
                                                        <i class="fa fa-edit"></i>
                                                    </a>

                                                                                                    <button class=" btn-transparent text-primary  "
        data-confirm="Are you sure? | Do you want to continue?"
        data-confirm-href="/admin/certificates/templates/1/delete"
        data-confirm-text-yes="Yes"
        data-confirm-text-cancel="Cancel"
                data-toggle="tooltip" data-placement="top" title="Delete"
    >
            <i class="fa fa-times" aria-hidden="true"></i>
    </button>
                                                                                            </td>
                                        </tr>

                                </table>
                            </div>
                        </div>

                        <div class="card-footer text-center">

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

        </div>
    </div>

    <div class="modal fade" id="fileViewModal" tabindex="-1" aria-labelledby="fileViewModal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <img src="" class="w-100" height="350px" alt="">
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

</div>
    </section>





@endsection

@push('scripts_bottom')

@endpush
