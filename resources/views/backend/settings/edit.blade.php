@extends('layouts.app')
@push('style')

@endpush
@section('content')

    <main class="content">
        <div class="container-fluid p-0">

            <div class="col-md-3 mb-3">
                <h1 class="h3 d-inline align-middle">Update Settings</h1>

            </div>

            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">{{ __('Edit Setting') }}</div>
                        @include('backend.message')
                        <div class="card-body">
                            <form method="POST" action="{{ route('settings.update', $setting->id) }}"
                                  enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="row">
                                    <div class="col-md-3 mb-3">
                                        <label for="name" class="form-label">{{ __('Name') }}</label>
                                        <input id="name" type="text"
                                               class="form-control @error('name') is-invalid @enderror" name="name"
                                               value="{{ $setting->name }}" required autofocus>
                                        @error('name')
                                        <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                        @enderror
                                    </div>

                                    <div class="col-md-3 mb-3">
                                        <label for="slogan" class="form-label">{{ __('Slogan') }}</label>
                                        <input id="slogan" type="text"
                                               class="form-control @error('slogan') is-invalid @enderror" name="slogan"
                                               value="{{ $setting->slogan }}">
                                        @error('slogan')
                                        <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                        @enderror
                                    </div>

                                    <div class="col-md-3 mb-3">
                                        <label for="email" class="form-label">{{ __('Email') }}</label>
                                        <input id="email" type="email"
                                               class="form-control @error('email') is-invalid @enderror" name="email"
                                               value="{{ $setting->email }}">
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                        @enderror
                                    </div>

                                    <div class="col-md-3 mb-3">
                                        <label for="phone" class="form-label">{{ __('Phone') }}</label>
                                        <input id="phone" type="text"
                                               class="form-control @error('phone') is-invalid @enderror" name="phone"
                                               value="{{ $setting->phone }}">
                                        @error('phone')
                                        <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                        @enderror
                                    </div>

                                    <div class="col-md-3 mb-3">
                                        <label for="hot_line" class="form-label">{{ __('Hot Line') }}</label>
                                        <input id="hot_line" type="text"
                                               class="form-control @error('hot_line') is-invalid @enderror"
                                               name="hot_line" value="{{ $setting->hot_line }}">
                                        @error('hot_line')
                                        <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                        @enderror
                                    </div>

                                    <div class="col-md-3 mb-3">
                                        <label for="address" class="form-label">{{ __('Address') }}</label>
                                        <textarea id="address"
                                                  class="form-control @error('address') is-invalid @enderror"
                                                  name="address" rows="3">{{ $setting->address }}</textarea>
                                        @error('address')
                                        <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                        @enderror
                                    </div>

                                    <div class="col-md-3 mb-3">
                                        <label for="website" class="form-label">{{ __('Website') }}</label>
                                        <input id="website" type="text"
                                               class="form-control @error('website') is-invalid @enderror"
                                               name="website" value="{{ $setting->website }}">
                                        @error('website')
                                        <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                        @enderror
                                    </div>

                                    <div class="col-md-3 mb-3">
                                        <label for="info_email" class="form-label">{{ __('Info Email') }}</label>
                                        <input id="info_email" type="email"
                                               class="form-control @error('info_email') is-invalid @enderror"
                                               name="info_email" value="{{ $setting->info_email }}">
                                        @error('info_email')
                                        <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                        @enderror
                                    </div>

                                    <div class="col-md-3 mb-3">
                                        <label for="query_email" class="form-label">{{ __('Query Email') }}</label>
                                        <input id="query_email" type="email"
                                               class="form-control @error('query_email') is-invalid @enderror"
                                               name="query_email" value="{{ $setting->query_email }}">
                                        @error('query_email')
                                        <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                        @enderror
                                    </div>

                                    <div class="col-md-3 mb-3">
                                        <label for="facebook" class="form-label">{{ __('Facebook') }}</label>
                                        <input id="facebook" type="text"
                                               class="form-control @error('facebook') is-invalid @enderror"
                                               name="facebook" value="{{ $setting->facebook }}">
                                        @error('facebook')
                                        <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                        @enderror
                                    </div>

                                    <div class="col-md-3 mb-3">
                                        <label for="linkedin" class="form-label">{{ __('LinkedIn') }}</label>
                                        <input id="linkedin" type="text"
                                               class="form-control @error('linkedin') is-invalid @enderror"
                                               name="linkedin" value="{{ $setting->linkedin }}">
                                        @error('linkedin')
                                        <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                        @enderror
                                    </div>

                                    <div class="col-md-3 mb-3">
                                        <label for="youtube" class="form-label">{{ __('Instagram') }}</label>
                                        <input id="youtube" type="text"
                                               class="form-control @error('youtube') is-invalid @enderror"
                                               name="youtube" value="{{ $setting->youtube }}">
                                        @error('youtube')
                                        <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                        @enderror
                                    </div>

                                    <div class="col-md-3 mb-3">
                                        <label for="twitter" class="form-label">{{ __('Twitter') }}</label>
                                        <input id="twitter" type="text"
                                               class="form-control @error('twitter') is-invalid @enderror"
                                               name="twitter" value="{{ $setting->twitter }}">
                                        @error('twitter')
                                        <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                        @enderror
                                    </div>

                                    <div class="col-md-3 mb-3">
                                        <label for="logo" class="form-label">{{ __('Logo') }}</label>
                                        <input id="logo" type="file"
                                               class="form-control @error('logo') is-invalid @enderror" name="logo">
                                        @error('logo')
                                        <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>

                                </span>
                                        @enderror
                                        <img alt="logo"
                                             src="{{isset($setting->logo) ?  asset('storage/logos/' . $setting->logo)  :  asset('assets/backend/img/avatars/avatar.jpg')}}"
                                             class="rounded-circle img-responsive mt-2"
                                             width="128" height="128"/>
                                    </div>

                                    <div class="col-md-3 mb-3">
                                        <label for="google_map" class="form-label">{{ __('Google Map') }}</label>
                                        <input id="google_map" type="text"
                                               class="form-control @error('google_map') is-invalid @enderror"
                                               name="google_map" value="{{ $setting->google_map }}">
                                        @error('google_map')
                                        <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-3 mb-3">
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

@endpush
