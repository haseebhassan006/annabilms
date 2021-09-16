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



                            <form class="mb-0">
                                <input type="hidden" name="page_type" value="requests">

                                <div class="row">
                                    <div class=" col-md-3 ">
                                        <div class="form-group">
                                            <label class="input-label">Search</label>
                                            <input type="text" class="form-control text-center" name="search" value="">
                                        </div>
                                    </div>

                                    <div class=" col-md-3 ">
                                        <div class="form-group">
                                            <label class="input-label">Start Date</label>
                                            <div class="input-group">
                                                <input type="date" id="fsdate" class="text-center form-control" name="from" value="" placeholder="Start Date">
                                            </div>
                                        </div>
                                    </div>

                                    <div class=" col-md-3 ">
                                        <div class="form-group">
                                            <label class="input-label">End Date</label>
                                            <div class="input-group">
                                                <input type="date" id="lsdate" class="text-center form-control" name="to" value="" placeholder="End Date">
                                            </div>
                                        </div>
                                    </div>


                                    <div class=" col-md-3 ">
                                        <div class="form-group">
                                            <label class="input-label">Role</label>
                                            <select name="role_id" data-plugin-selectTwo class="form-control populate">
                                                <option value="">All Roles</option>
                                                                                            <option value="1" >User role</option>
                                                                                            <option value="2" >Admin role</option>
                                                                                            <option value="3" >Organization role</option>
                                                                                            <option value="4" >Teacher role</option>
                                                                                            <option value="6" >Staff role</option>
                                                                                            <option value="9" >Author</option>
                                                                                    </select>
                                        </div>
                                    </div>


                                    <div class=" col-md-3 ">
                                        <div class="form-group">
                                            <label class="input-label">User</label>
                                            <select name="user_ids[]" multiple="multiple" class="form-control search-user-select2"
                                                    data-placeholder="Search teachers">

                                                                                    </select>
                                        </div>
                                    </div>


                                    <div class=" col-md-3 ">
                                        <div class="form-group">
                                            <label class="input-label">Bank</label>
                                            <select name="account_type" data-plugin-selectTwo class="form-control populate">
                                                <option value="">All Banks</option>
                                                 {
                                                                                            <option value="Qatar National Bank" >Qatar National Bank</option>
                                                                                            <option value="State Bank of India" >State Bank of India</option>
                                                                                            <option value="JPMorgan" >JPMorgan</option>
                                                                                                                            </select>
                                        </div>
                                    </div>


                                    <div class=" col-md-3 ">
                                        <div class="form-group">
                                            <label class="input-label">Filters</label>
                                            <select name="sort" data-plugin-selectTwo class="form-control populate">
                                                <option value="">Filter Type</option>
                                                <option value="amount_asc" >Amount - Ascending</option>
                                                <option value="amount_desc" >Amount - Descending</option>
                                                <option value="pay_date_asc" >Transaction Time - Ascending</option>
                                                <option value="pay_date_desc" >Transaction Time - Descending</option>
                                            </select>
                                        </div>
                                    </div>


                                    <div class=" col-md-3 ">
                                        <div class="form-group mt-1">
                                            <label class="input-label mb-4"> </label>
                                            <input type="submit" class="text-center btn btn-primary w-100" value="Show Results">
                                        </div>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </section>

                    <div class="row">
                        <div class="col-12 col-md-12">
                            <div class="card">
                                <div class="card-header">
                                                                    <a href="/admin/financial/offline_payments/excel?page_type=requests" class="btn btn-primary">Export Excel</a>
                                                            </div>

                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped font-14">
                                            <tr>
                                                <th>User</th>
                                                <th>Role</th>
                                                <th>Amount</th>
                                                <th>Bank</th>
                                                <th>Reference</th>
                                                <th>Pay Date</th>
                                                <th width=180px>Transaction Time</th>
                                                <th width="150px">Actions</th>
                                            </tr>
                                            @foreach($offlinePayments as $offlinePayment)
                                            <tr>
                                                <td>User</td>
                                                <td>Role</td>
                                                <td>{{ $offlinePayment->amount }}</td>
                                                <td>{{ $offlinePayment->bank }}</td>
                                                <td>{{ $offlinePayment->reference_number }}</td>
                                                <td>{{ dateTimeFormat($offlinePayment->pay_date,'Y M j | H:i') }}</td>
                                                <td>{{ dateTimeFormat($offlinePayment->pay_date,'H:i') }}</td>

                                                <td>
                                                    <button class=" btn-transparent text-primary  "
                                                    data-confirm="Are you sure? | Do you want to continue?"
                                                    data-confirm-href="/admin/financial/offline_payments/{{ $offlinePayment->id }}/approved"
                                                    data-confirm-text-yes="Yes"
                                                    data-confirm-text-cancel="Cancel"
                                                            data-toggle="tooltip" data-placement="top" title="Approve"
                                                >
                                                        <i class="fa fa-check" aria-hidden="true"></i>
                                                </button>

                                                                                                                                                                        <button class=" btn-transparent text-primary  ml-2"
                                                    data-confirm="Are you sure? | Do you want to continue?"
                                                    data-confirm-href="/admin/financial/offline_payments/{{ $offlinePayment->id }}/reject"
                                                    data-confirm-text-yes="Yes"
                                                    data-confirm-text-cancel="Cancel"
                                                            data-toggle="tooltip" data-placement="top" title="Reject"
                                                >
                                                        <i class="fa fa-times-circle" aria-hidden="true"></i>
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
    </section>





@endsection

@push('scripts_bottom')

@endpush
