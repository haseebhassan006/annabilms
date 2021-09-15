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
                                        <th>#</th>
                                        <th class="text-left">Title</th>
                                        <th class="text-center">Price</th>
                                        <th class="text-center">Subscribe Times</th>
                                        <th class="text-center">Days</th>
                                        <th class="text-center">Sales Count</th>
                                        <th class="text-center">Popular Badge</th>
                                        <th class="text-center">Created Date</th>
                                        <th>Actions</th>
                                    </tr>
                                    @foreach($subscribes as $subscribe)
                                    <tr>
                                        <td></td>
                                        <td>{{ $subscribe->title }}</td>
                                        <td>{{ $subscribe->price }}</td>
                                        <td></td>
                                        <td>{{ $subscribe->days }}</td>
                                        <td>{{ $subscribe->usable_count }}</td>
                                        <td>{{ $subscribe->is_popular }}</td>
                                        <td>{{ dateTimeFormat($subscribe->created_at, 'Y M j | H:i') }}</td>
                                        <td>
                                            <a href="/admin/financial/subscribes/{{ $subscribe->id }}/edit" class="btn-sm" data-toggle="tooltip" data-placement="top" title="Edit">
                                                <i class="fa fa-edit"></i>
                                            </a>

                        <button class=" btn-transparent text-primary  btn-sm"   data-confirm="Are you sure? | Do you want to continue?" data-confirm-href="/admin/financial/subscribes/{{ $subscribe->id }}/delete" data-confirm-text-yes="Yes" data-confirm-text-cancel="Cancel" data-toggle="tooltip" data-placement="top" title="Delete">
                                   <i class="fa fa-times" aria-hidden="true"></i>
                        </button>
                                        </td>


                                    </tr>
                                    @endforeach
                                </table>
                            </div>



                        </div>



                    </div>
                </div>
            </div>
        </div>
    </section>





@endsection

@push('scripts_bottom')

@endpush
