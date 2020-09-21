@extends('layouts.master')
@section('content')



<!--Start sidebar-->

<div class="container margin-top-20">
  <div class="row">
    <div class="col-md-4">
      <div class="list-group">





         <a class="nav-link" href="{{ route('contact')}}">Contact Us <span class="sr-only"  <a class="nav-link" href="{{ route('seller')}}">Top Seller <span class="sr-only">(current)</span></a>

          <a class="nav-link" href="{{ route('seller')}}">Top Seller <span class="sr-only">(current)</span></a>
          <a class="nav-link" href="{{ route('seller')}}">Gift Finder <span class="sr-only">(current)</span></a>
          <a class="nav-link" href="{{ route('seller')}}">About Us <span class="sr-only">(current)</span></a>
          <a class="nav-link" href="{{ route('seller')}}">Live Chat <span class="sr-only">(current)</span></a>



            <div class="dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                User
              </a>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="#">Normal</a>

            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Developed User
            </a>


          </div>
        </div>
          <a class="nav-link" href="#">Complain Box <span class="sr-only">(current)</span></a>
 </div>
  </div>
    <div class="col-md-8">
      <div class="widget">
        <h3> Searched Books</h3>
         <div class="row">

           @foreach ($products as $product)


             <div class="col-md-3">
               <div class="card ">




                 @foreach($product->images as $image)



                <img class="card-img-top book " src="{{asset('image1/'. $image->image)}}" alt="Card image">




                 @endforeach

              <div class="card-body">
                <h4 class="card-title">
                   {{ $product-> title}}
                </h4>
                <p class="card-text">Tk.
                   {{ $product-> price}}</p>
                <a href="#" class="btn btn-primary">Add To Cart</a>
              </div>
              </div>
             </div>

                @endforeach

           </div>
      </div>

    </div>

  </div>
</div>
@endsection






<!--End sidebar-->
