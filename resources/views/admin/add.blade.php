@extends('layouts.master')

@section('tilte','Add Product ')
@section("add")
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-body">
            <div class="row">
              <div class="col-12 col-md-6 col-lg-12">
                <div class="card">
                  <form method="POST" action="{{ route('insert') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="card-header">
                      <h4>Add Product</h4>
                    </div>
                    <div class="card-body">
                      <div class="form-group">
                        <label>Product Name</label>
                        <input name="productname" type="text" class="form-control" required="">
                      </div>
                      <div class="form-group">
                        <label>Product Discription</label>
                        <input type="text" name="productdiscription" class="form-control" required="">
                      </div>
                      <div class="form-group">
                        <label>Product Price</label>
                        <input type="number" class="form-control" name="productprice">
                      </div>
                      <div class="form-group">
                        <label>Product Quantity</label>
                        <input type="number" class="form-control" name="productquantity">
                      </div>
                      <div class="form-group">
                        <label>Product Image</label>
                        <input type="file" class="form-control" name="productimage">
                      </div>
                    </div>
                    <div class="card-footer text-right">
                      <button class="btn btn-primary">Add Product</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
  @endsection