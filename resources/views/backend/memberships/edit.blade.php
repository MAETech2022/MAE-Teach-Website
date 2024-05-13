@extends('layouts.app')
@push('style')

@endpush()
@section('content')
    <main class="d-flex w-100 h-100">
        <div class="container d-flex flex-column p-5">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">{{ __('Edit Memberships') }}</div>

                        <div class="card-body">
                            <form method="POST" action="{{ route('memberships.update', $membership->id) }}">
                                @csrf
                                @method('PUT')

                                <div class="mb-3">
                                    <label for="membership_fee" class="form-label">{{ __('Membership Fee ') }}</label>
                                    <input id="membership_fee" type="text"
                                           class="form-control @error('membership_fee') is-invalid @enderror"
                                           name="membership_fee"
                                           value="{{ old('membership_fee',$membership->membership_fee) }}"
                                           autofocus>
                                    @error('membership_fee')
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="description" class="form-label">{{ __('Description') }}</label>
                                    <textarea class="form-control editor @error('description') is-invalid @enderror"
                                              name="description">{{$membership->description}}</textarea>
                                    @error('description')
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="document_required"
                                           class="form-label">{{ __('Document Required') }}</label>
                                    <textarea
                                        class="form-control editor @error('document_required') is-invalid @enderror"
                                        name="document_required">{{$membership->document_required}}</textarea>

                                    @error('document_required')
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="payment_procedure"
                                           class="form-label">{{ __('Payment Procedure') }}</label>
                                    <textarea
                                        class="form-control editor @error('payment_procedure') is-invalid @enderror"
                                        name="payment_procedure">{{$membership->payment_procedure}}</textarea>

                                    @error('payment_procedure')
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="register_online_link"
                                           class="form-label">{{ __('Registration Online Link') }}</label>
                                    <input id="register_online_link" type="text"
                                           class="form-control @error('register_online_link') is-invalid @enderror"
                                           name="register_online_link"
                                           value="{{ old('register_online_link', $membership->register_online_link) }}"
                                           required autofocus>
                                    @error('register_online_link')
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="website_link" class="form-label">{{ __('Website Link') }}</label>
                                    <input id="website_link" type="text"
                                           class="form-control @error('website_link') is-invalid @enderror"
                                           name="website_link" value="{{ old('website_link', $membership->website_link) }}"  autofocus>
                                    @error('website_link')
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="query_email" class="form-label">{{ __('Query Email') }}</label>
                                    <input id="query_email" type="email"
                                           class="form-control @error('query_email') is-invalid @enderror"
                                           name="query_email" value="{{ old('query_email', $membership->query_email) }}"  autofocus>
                                    @error('query_email')
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="whatsapp_no" class="form-label">{{ __('Whatsapp No') }}</label>
                                    <input id="whatsapp_no" type="text"
                                           class="form-control @error('whatsapp_no') is-invalid @enderror"
                                           name="whatsapp_no" value="{{ old('whatsapp_no', $membership->whatsapp_no) }}"  autofocus>
                                    @error('whatsapp_no')
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Update') }}
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection

@push('script')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/35.1.0/classic/ckeditor.js"></script>
    <script>
        $(document).ready(function () {
            $('.editor').each(function () {
                ClassicEditor
                    .create(this)
                    .then(editor => {
                        console.log(editor);
                    })
                    .catch(error => {
                        console.error(error);
                    });
            });
        });
    </script>
@endpush
