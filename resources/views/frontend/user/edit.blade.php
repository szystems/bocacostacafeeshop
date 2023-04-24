@extends('layouts.frontend')
{{-- Edit Account details --}}
@section('content')
    <section class="ftco-section">
        <div class="container">
            <div class="row">

                @php
                    $usuario = Auth::user()->name;
                    $nombre = explode(' ', trim($usuario));
                    $names = str_word_count($usuario);
                @endphp

                <div class="col-md-4 sidebar ftco-animate">
                    <div class="sidebar-box ftco-animate">
                        <div class="categories">
                            <h3>{{ ucwords($nombre[0]) }}'s <a href="{{ url('my-account') }}">{{ __('Dashboard') }}</a></h3>
                            <li><a href="{{ url('my-orders') }}">- {{ __('Orders') }} <!--<span>(12)</span>--></a></li>
                            <li><a href="{{ url('user-details/'.Auth::id()) }}"><font color="c70017">-> {{ __('Account Details') }} <!--<span>(12)</span>--></font></a></li>
                            <p>
                                <a href="javascript:; {{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="btn btn-primary py-3 px-4 "><span>{{ __('Logout') }}</span></a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-8 ftco-animate">
                    @if (count($errors)>0)
                        <div class="alert alert-danger text-white" role="alert">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{$error}}</li>
                                @endforeach
                            </ul>
                        </div>

                    @endif
                    <form action="{{ url('user-update/'.Auth::id()) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="row">
                            <div class="col-sm-12">
                                <h3>{{ __('Edit Account Details') }}</h3>
                            </div><!-- End .col-sm-6 -->
                            <div class="col-sm-4">
                                <label>{{ __('Name') }}</label>
                                <input  name="name" type="text" class="form-control" value="{{ $user->name }}">
                                @if ($errors->has('name'))
                                    <span class="help-block opacity-7">
                                            <strong>
                                                <font color="red">{{ $errors->first('name') }}</font>
                                            </strong>
                                    </span>
                                @endif
                            </div><!-- End .col-sm-6 -->
                            <div class="col-sm-4">
                                <label>{{ __('Phone') }}</label>
                                <input name="phone" type="text" class="form-control" value="{{ $user->phone }}">
                                @if ($errors->has('phone'))
                                    <span class="help-block opacity-7">
                                            <strong>
                                                <font color="red">{{ $errors->first('phone') }}</font>
                                            </strong>
                                    </span>
                                @endif
                            </div><!-- End .col-sm-6 -->
                            <div class="col-sm-4">
                                <label>Email</label>
                                <input readonly name="email" type="text" class="form-control" value="{{ $user->email }}">
                                <small class="form-text">{{ __("You can't change email") }}</small>
                                @if ($errors->has('email'))
                                    <span class="help-block opacity-7">
                                            <strong>
                                                <font color="red">{{ $errors->first('email') }}</font>
                                            </strong>
                                    </span>
                                @endif
                            </div><!-- End .col-sm-6 -->
                            <div class="col-sm-12">
                                <label>{{ __('Address') }} 1</label>
                                <input name="address1" type="text" class="form-control" value="{{ $user->address1 }}">
                                @if ($errors->has('address1'))
                                    <span class="help-block opacity-7">
                                            <strong>
                                                <font color="red">{{ $errors->first('address1') }}</font>
                                            </strong>
                                    </span>
                                @endif
                            </div><!-- End .col-sm-6 -->
                            <div class="col-sm-12">
                                <label>{{ __('Address') }} 2</label>
                                <input name="address2" type="text" class="form-control" value="{{ $user->address2 }}">
                                @if ($errors->has('address2'))
                                    <span class="help-block opacity-7">
                                            <strong>
                                                <font color="red">{{ $errors->first('address2') }}</font>
                                            </strong>
                                    </span>
                                @endif
                            </div><!-- End .col-sm-6 -->
                            <div class="col-sm-3">
                                <label>{{ __('City') }}</label>
                                <input name="city" type="text" class="form-control" value="{{ $user->city }}">
                                @if ($errors->has('city'))
                                    <span class="help-block opacity-7">
                                            <strong>
                                                <font color="red">{{ $errors->first('city') }}</font>
                                            </strong>
                                    </span>
                                @endif
                            </div><!-- End .col-sm-6 -->
                            <div class="col-sm-3">
                                <label>{{ __('State/Province') }}</label>
                                <input name="state" type="text" class="form-control" value="{{ $user->state }}">
                                @if ($errors->has('state'))
                                    <span class="help-block opacity-7">
                                            <strong>
                                                <font color="red">{{ $errors->first('state') }}</font>
                                            </strong>
                                    </span>
                                @endif
                            </div><!-- End .col-sm-6 -->
                            <div class="col-sm-3">
                                <label>{{ __('Country') }}</label>
                                <input name="country" type="text" class="form-control" value="{{ $user->country }}">
                                @if ($errors->has('country'))
                                    <span class="help-block opacity-7">
                                            <strong>
                                                <font color="red">{{ $errors->first('country') }}</font>
                                            </strong>
                                    </span>
                                @endif
                            </div><!-- End .col-sm-6 -->
                            <div class="col-sm-3">
                                <label>{{ __('Zipcode') }}</label>
                                <input name="zipcode" type="text" class="form-control" value="{{ $user->zipcode }}">
                                @if ($errors->has('zipcode'))
                                    <span class="help-block opacity-7">
                                            <strong>
                                                <font color="red">{{ $errors->first('zipcode') }}</font>
                                            </strong>
                                    </span>
                                @endif
                            </div><!-- End .col-sm-6 -->
                            <div class="col-sm-6">
                                <label>{{ __('Timezone') }}</label>
                                <select class="form-control" name="timezone" id="timezone">
                                    @foreach(Helpers::getTimeZoneList() as $timezone => $timezone_gmt_diff)
                                        <option value="{{ $timezone }}" {{ ( $timezone === old('timezone', $user->timezone)) ? 'selected' : '' }}>
                                            {{ $timezone_gmt_diff }}
                                        </option>
                                    @endforeach
                                </select>
                            </div><!-- End .col-sm-6 -->
                        </div>
                        <p>
                            <button type="submit" class="btn btn-primary py-3 px-4 "><span>{{ __('Save') }}</span></button>
                        </p>
                    </form>
                </div> <!-- .col-md-8 -->

            </div>
        </div>
    </section> <!-- .section -->
@endsection
