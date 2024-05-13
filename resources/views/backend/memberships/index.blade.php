@extends('layouts.app')

@section('content')
    <main class="content">
        <div class="container-fluid p-0">
            <div class="mb-3">
                <h1 class="h3 d-inline align-middle">View All Memberships</h1></div>
            <div class="row mb-3">
                <div class="col-md-12">
                    <a href="{{ route('memberships.create') }}" class="btn btn-primary float-end">Add New</a>
                </div>
            </div>
            <div class="row">
                <div class="col-12">

                    <div class="card">

                        <div class="card-body">
                            @include('backend.message')
                            <table class="table table-bordered" id="membershipsTable">
                                <thead>
                                <tr>
                                    <th>Registration Link</th>
                                    <th>Website Link</th>
                                    <th>Email</th>
                                    <th>Whatsapp</th>
                                     <th>Action</th>
                                </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

@endsection

@push('script')
    <script src="{{asset('assets/backend/js/datatables.js')}}"></script>
    <script>
        function confirmDelete() {
            return confirm("Are you sure you want to delete this record?");
        }

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $('#membershipsTable').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('memberships.index') }}",
            columns: [
                { data: 'register_online_link', name: 'register_online_link' },
                { data: 'website_link', name: 'website_link' },
                { data: 'query_email', name: 'query_email' },
                { data: 'whatsapp_no', name: 'whatsapp_no' },
                 { data: 'action', name: 'action', orderable: false, searchable: false }
            ]
        });
    </script>
@endpush
