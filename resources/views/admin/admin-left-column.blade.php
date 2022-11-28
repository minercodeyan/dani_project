@extends('admin.admin')

@section('left-column')
    <div class="bg-color_blue">
        <div class="row">
            <div style="margin: 10px 0px"><a href="{{ route('admin.categories') }}">Categories</a></div>
            <div style="margin: 10px 0px"><a href="{{ route('admin.products') }}">Cars</a></div>
            <div style="margin: 10px 0px"><a href="{{ route('admin.users') }}">Users</a></div>
            <div style="margin: 10px 0px"><a href="{{ route('admin.orders') }}">Orders</a></div>
            <div style="margin: 10px 0px"><a href="{{ route('admin.payment-methods') }}">Payment methods</a></div>
            <div style="margin: 10px 0px"><a href="{{ route('admin.shipping-methods') }}">Shipping</a></div>
            <div>Settings</div>
        </div>
    </div>

@stop
