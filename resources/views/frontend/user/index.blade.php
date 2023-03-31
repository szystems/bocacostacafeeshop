@extends('layouts.frontend')
{{-- Acoount index --}}
@section('content')
    <section class="ftco-section">
        <div class="container">
            <div class="row">

                @php
                    $usuario = Auth::user()->name; $nombre = explode(' ',trim($usuario));
                    $names =str_word_count($usuario);
                @endphp

                <div class="col-md-4 sidebar ftco-animate">
                    <div class="sidebar-box ftco-animate">
                        <div class="categories">
                            <h3>{{ ucwords($nombre[0]) }}'s <a href="{{ url('my-account') }}">Dashboard</a></h3>
                            <li><a href="{{ url('my-orders') }}">- Orders <!--<span>(12)</span>--></a></li>
                            <li><a href="{{ url('user-details/'.Auth::id()) }}">- Account Details <!--<span>(12)</span>--></a></li>
                            <p>
                                <a href="javascript:; {{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="btn btn-primary py-3 px-4 "><span>Log Out</span></a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-8 ftco-animate">
                    <h2 class="mb-3">Welcome to your account dashboard {{ ucwords($nombre[0]) }}. </h2>
                    <p>Here you can view your <a href="{{ url('my-orders') }}" class="tab-trigger-link link-underline">recent orders</a> and manage your <a href="{{ url('user-details/'.Auth::id()) }}" class="tab-trigger-link">personal information</a>.</p>
                    <p>
                        not User?
                        <a href="javascript:; {{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Log out</a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                    </p>
                </div> <!-- .col-md-8 -->

            </div>
        </div>
    </section> <!-- .section -->
@endsection
