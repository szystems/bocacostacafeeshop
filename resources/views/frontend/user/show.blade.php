@extends('layouts.frontend')
{{-- Account Details --}}
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
                            <h3>{{ ucwords($nombre[0]) }}'s <a href="{{ url('my-account') }}">Dashboard</a></h3>
                            <li><a href="{{ url('my-orders') }}">- Orders<!--<span>(12)</span>--></a></li>
                            <li><a href="{{ url('user-details/' . Auth::id()) }}"><font color="c70017">-> Account Details</font><!--<span>(12)</span>--></a></li>
                            <li><a href="javascript:; {{ route('logout') }}"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                                    class="dropdown-item">
                                    <font color="red">- LOGOUT</font>
                                </a>
                                <form id="logout-form" action="{{ url('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </li>
                        </div>
                    </div>
                </div>

                <div class="col-md-8 ftco-animate">
                    <p>
                        <a href="{{ url('user-edit/'.Auth::id()) }}" class="btn btn-primary py-3 px-4 "><span>Edit account details</span></a>
                    </p>

                    <div class="row">
                        <div class="col-sm-12">
                            <h3>Account Details</h3>
                        </div><!-- End .col-sm-6 -->
                        <div class="col-sm-4">
                            <label>Name</label>
                            <input readonly name="name" type="text" class="form-control" value="{{ $user->name }}">
                        </div><!-- End .col-sm-6 -->
                        <div class="col-sm-4">
                            <label>Phone</label>
                            <input readonly name="phone" type="text" class="form-control" value="{{ $user->phone }}">
                        </div><!-- End .col-sm-6 -->
                        <div class="col-sm-4">
                            <label>Email</label>
                            <input readonly name="email" type="text" class="form-control" value="{{ $user->email }}">
                            <small class="form-text">You can't change email</small>
                        </div><!-- End .col-sm-6 -->
                        <div class="col-sm-12">
                            <label>Address 1</label>
                            <input readonly name="address1" type="text" class="form-control" value="{{ $user->address1 }}">
                        </div><!-- End .col-sm-6 -->
                        <div class="col-sm-12">
                            <label>Address 2</label>
                            <input readonly name="address2" type="text" class="form-control" value="{{ $user->address2 }}">
                        </div><!-- End .col-sm-6 -->
                        <div class="col-sm-3">
                            <label>City</label>
                            <input readonly name="city" type="text" class="form-control" value="{{ $user->city }}">
                        </div><!-- End .col-sm-6 -->
                        <div class="col-sm-3">
                            <label>State</label>
                            <input readonly name="state" type="text" class="form-control" value="{{ $user->state }}">
                        </div><!-- End .col-sm-6 -->
                        <div class="col-sm-3">
                            <label>Country</label>
                            <input readonly name="country" type="text" class="form-control" value="{{ $user->country }}">
                        </div><!-- End .col-sm-6 -->
                        <div class="col-sm-3">
                            <label>Zipcode</label>
                            <input readonly name="zipcode" type="text" class="form-control" value="{{ $user->zipcode }}">
                        </div><!-- End .col-sm-6 -->
                        <div class="col-sm-6">
                            <label>Timezone</label>
                            <input readonly name="zipcode" type="text" class="form-control" value="{{ $user->timezone }}">
                        </div><!-- End .col-sm-6 -->
                    </div>
                </div> <!-- .col-md-8 -->

            </div>
        </div>
    </section> <!-- .section -->
@endsection
