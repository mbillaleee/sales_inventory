@extends('layouts.app')

@section('content')
<div class="container">
</div>
@endsection


@csrf
<h4>Product Information</h4>
<div class="row">
    <div class="col-lg-2"></div>
    <div class="col-lg-10">
        <div class="form-group row">

            <label>Name *</label>
            <div class="form-check-inline col-lg-10">
                <input type="text" class="form-control" placeholder="Enter Name" name="name"
                    value="{{ $purchase ? $purchase->name: '' }}"><br>
            </div>
            @error('name')
            <br><span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group row">
            <label>Unit *</label>
            <div class="form-check-inline col-lg-10">
                <select class="form-control" id="" name="unit">
                    <option value="">Select Unit</option>
                    @forelse ($units as $item)
                    <option value="{{ $item->name }}" @if($purchase)
                        {{ $item->name === $purchase->unit ? "selected": '' }} @endif>{{ $item->name }}</option>
                    @empty
                    <span>No units</span>
                    @endforelse
                </select><br>
            </div>
            @error('unit')
            <br><span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group row">
            <label>Code</label>
            <div class="form-check-inline col-lg-10">
                <input type="text" class="form-control" placeholder="Enter Code" name="code"
                    value="{{ $purchase ? $purchase->code: '' }}"><br>
            </div>
            @error('code')
            <br><span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group row">
            <label>Description</label>

            <div class="form-check-inline col-lg-10">
                <input type="text" class="form-control" placeholder="Enter Description" name="describtion"
                    value="{{ $purchase ? $purchase->describtion: '' }}"><br>
            </div>

            @error('describtion')
            <br><span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group row">
            <label>Status *</label>
            <div class="form-check-inline col-lg-10">
                <input class="form-check-input" type="radio" name="status" value="1" id="inlineRadio1"
                    {{ $purchase ? $purchase->status == 1 ? "checked" : "" : "" }}>
                <label class="form-check-label" for="inlineRadio1">&nbsp;&nbsp;Active</label>

                <input class="form-check-input" type="radio" name="status" value="0" id="inlineRadio2"
                    {{ $purchase ? $purchase->status == 0 ? "checked" : "": ""   }}>
                <label class="form-check-label" for="inlineRadio2">&nbsp;&nbsp;Inactive</label>
            </div>
            @error('status')
            <br><span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <button class="btn btn-primary btn-block">SAVE</button>
    </div>



    @csrf
    <h4>Supplier Information</h4>
    <div class="row">
        <div class="col-lg-2"></div>
        <div class="col-lg-10">
            <div class="form-group">
                <label>Name *</label>
                <div class="form-check-inline col-lg-10">
                    <input type="text" class="form-control" placeholder="Enter Name" name="name"
                        value="{{ $supplier ? $supplier->name: "" }}"><br>
                </div>

                @error('name')
                <br><span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label> Company Name *</label>

                <div class="form-check-inline col-lg-10">
                    <input type="text" class="form-control" placeholder="Enter Company Name" name="company_name"
                        value="{{ $supplier ? $supplier->company_name: "" }}"><br>
                </div>
                @error('company_name')
                <br><span class="text-danger">{{ $message }}</span>
                @enderror

            </div>

            <div class="form-group">
                <label> Mobile No *</label>

                <div class="form-check-inline col-lg-10">
                    <input type="text" class="form-control" name="mobile" placeholder="Enter Mobile No"
                        value="{{ $supplier ? $supplier->mobile: "" }}"><br>
                </div>
                @error('mobile')
                <br><span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label>Address *</label>

                <div class="form-check-inline col-sm-10">
                    <input type="text" class="form-control" placeholder="Enter Addess" name="address"
                        value="{{ $supplier ? $supplier->address: "" }}"><br>
                </div>
                @error('address')
                <br><span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            @if ($supplier)
            <div class="form-group">
                <label>Opening due *</label>
                <div class="form-check-inline col-sm-10">
                    <input type="text" class="form-control" name="opening_due"
                        value="{{ $supplier ? $supplier->opening_due: "" }}">
                </div>
                @error('opening_due')
                <br><span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            @endif

            <div class="form-group">
                <label>Status *</label>

                <div class="form-check-inline col-sm-10">

                    <input class="form-check-input" type="radio" name="status" value="1" id="inlineRadio1"
                        {{ $supplier ? $supplier->status == 1 ? "checked" : "" : "" }}>
                    <label class="form-check-label" for="inlineRadio1">&nbsp;&nbsp;Active</label>

                    <input class="form-check-input" type="radio" name="status" value="0" id="inlineRadio2"
                        {{ $supplier ? $supplier->status == 0 ? "checked" : "": ""   }}>

                    <label class="form-check-label" for="inlineRadio2">&nbsp;&nbsp;Inactive</label>
                </div>
                @error('status')
                <br><span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>
    </div>
</div>
