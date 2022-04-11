<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
  @include('admin.head')
</head>

<body class="hold-transition layout-top-nav">
  <div class="wrapper">

    <!-- Navbar -->
    @include('index.navbar')
    <!-- /.navbar -->

    <!-- /.content-wrapper -->
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card card-primary">
            <div class="card-header">
              <h4 class="card-title">FilterizR Gallery with Ekko Lightbox</h4>
            </div>
            <div class="card-body">
              <div>
                <div class="btn-group w-100 mb-2">
                  @foreach($categories as $cateitem)
                  <a class="btn btn-info" data-filter="1">
                    <p>
                      {{ $cateitem -> name }}
                    </p>
                  </a>
                  @endforeach
                </div>
                <div class="mb-2">
                  <a class="btn btn-secondary" href="javascript:void(0)" data-shuffle> Shuffle items </a>
                  <div class="float-right">
                    <select class="custom-select" style="width: auto;" data-sortOrder>
                      <option value="index"> Sort by Position </option>
                      <option value="sortData"> Sort by Custom Data </option>
                    </select>
                    <div class="btn-group">
                      <a class="btn btn-default" href="javascript:void(0)" data-sortAsc> Ascending </a>
                      <a class="btn btn-default" href="javascript:void(0)" data-sortDesc> Descending </a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="agileinfo-ads-display col-md-9 w3l-rightpro">
                <div class="wrapper">
                  @foreach ($categories as $type)
                  <h3>{{$type -> name}}</h3>
                  <br />
                  <div class="product-sec1">
                    @foreach ($products as $item)
                    @if ($item -> category_id == $type -> id)
                    <div class="col-md-4 col-sm-6">
                      <div class="product-grid3" style="margin-bottom:20px;">
                        <div class="product-image3">
                          <a href="details/{{ $item -> id }}">
                            <img class="pic-1" src="{{ $item -> linkimg }}" style="height:160px; width:160px;">
                            <img class="pic-2" src="{{ $item -> linkimg }}" style="height:160px; width:160px;">
                          </a>
                          <ul class="social">
                            <li><a href="addtocart/{{ $item -> id }}"><i class="fa fa-shopping-bag"></i></a></li>
                            <li><a style="cursor:pointer"><i class="fa fa-shopping-cart cart-btn"></i></a></li>
                          </ul>
                          <span class="product-new-label">New</span>
                        </div>
                        <div class="product-content">
                          <h3 class="title" style="text-align:center"><a href="#" asp-route-id="@item.ProductId">{{$item->name}}</a></h3>
                          <div style="text-align:center">
                            <span class="item_price" style="text-align:center">{{ $item -> price }}</span>
                          </div>
                        </div>
                        <div>
                          <span style="text-align:center"> Is Available: {{$item -> active}}</span>
                        </div>
                      </div>
                    </div>
                    @endif
                    @endforeach
                    <div class="clearfix"></div>
                  </div>
                  @endforeach
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div><!-- /.container-fluid -->
    <!-- Control Sidebar -->
    @yeild('index')
    <!-- /.control-sidebar -->

    <!-- Main Footer -->
    <footer class="main-footer">
      <!-- To the right -->
      <div class="float-right d-none d-sm-inline">
        Anything you want
      </div>
      <!-- Default to the left -->
      <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
    </footer>
  </div>
  @include('admin.footer')
</body>
</html>