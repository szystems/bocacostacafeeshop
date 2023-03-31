@extends('layouts.frontend')
{{-- Account Orders --}}
@section('content')

    <section class="ftco-section">
        <div class="container">
            <div class="row">

                @php
                    $usuario = Auth::user()->name; $nombre = explode(' ',trim($usuario));
                    $names =str_word_count($usuario);
                @endphp

                <div class="col-md-3 sidebar ftco-animate">
                    <div class="sidebar-box ftco-animate">
                        <div class="categories">
                            <h3>{{ ucwords($nombre[0]) }}'s <a href="{{ url('my-account') }}">Dashboard</a></h3>
                            <li><a href="{{ url('my-orders') }}"><font color="c70017">-> Orders<strong></strong></font><!--<span>(12)</span>--></a></li>
                            <li><a href="{{ url('user-details/'.Auth::id()) }}">- Account Details <!--<span>(12)</span>--></a></li>
                            <li><a href="javascript:; {{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="dropdown-item"><font color="red">- LOGOUT</font>  </a>
                                <form id="logout-form" action="{{ url('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </li>
                        </div>
                    </div>
                </div>

                <div class="col-md-9 ftco-animate">
                    <div class="cart-list">
                        <table class="table">
                            @php
                                $total = 0;
                            @endphp
                            @if ($orders->count() > 0)
                                <thead class="thead-primary">
                                    <tr class="text-center">
                                        <th>Order Date <small>({{ Auth::user()->timezone }})</small></th>
                                        <th>Tracking Number</th>
                                        <th>Total</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($orders as $item)
                                        <tr class="text-center product_data">
                                            @php
                                                $date = new DateTime($item->created_at, new DateTimeZone(date_default_timezone_get()));
                                                $date->setTimezone(new DateTimeZone(Auth::user()->timezone));
                                            @endphp
                                            <td class="price">{{ $date->format('d-m-Y') }}</td>

                                            <td class="price">
                                                <a href="#">{{ $item->tracking_no }}</a>
                                            </td>
                                            <td class="price">{{ $config->currency_simbol }}{{ number_format($item->total_price,2, '.', ',') }}</td>

                                            <td class="price">
                                                {{ $item->status == '0' ?'Pending' : 'Completed' }}
                                            </td>

                                            <td class="total">
                                                <p>
                                                    <a href="{{ url('view-order/'.$item->id) }}" class="btn btn-primary py-3 px-4 btn-block"><span>View order</span></a>
                                                </p>

                                            </td>
                                        </tr><!-- END TR-->
                                    @endforeach

                                </tbody>
                            @else
                            <span class="help-block opacity-7">
                                <strong>
                                    <font color="red">Orders list is empty.</font>
                                </strong>
                            </span>
                            <a href="{{ url('category') }}" class="btn btn-outline-dark-2 btn-block mb-3"><span>CONTINUE SHOPPING</span> <i class="icon-refresh"></i></a>
                            @endif
                        </table>
                    </div>

            </div>
        </div>
    </section> <!-- .section -->

@endsection

