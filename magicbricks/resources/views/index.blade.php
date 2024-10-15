@extends('layout')

@section('content')


<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hostel Details</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
  <div class="container mr-5">
    <div class="row">
      @if($data->isEmpty())
      <div class="col-12">
        <div class="alert alert-warning" role="alert">
          No hostels available at the moment.
        </div>
      </div>
      @else
      @foreach($data as $item)
      <div class="col-md-4 mb-3">

        <div class="card" style="width: 18rem;">
          <img src="data:image/jpeg;base64,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" class="card-img-top" alt="Hostel Image">
          <div class="card-body">
            <h5 class="card-title">{{ $item->Project_name }}</h5>
            <p class="card-text">Price: ${{ $item->price }}</p>
            <p class="card-text">{{ $item->bedrooms }}--{{ $item->bathrooms }}--{{ $item->address }}</p>
            <!-- <p class="card-text">Address: ${{ $item->address }}</p> -->
            <button type="button" class="btn btn-primary" data-toggle="modal"
              data-target="#exampleModalLong"
              data-carparking="{{ $item->carparking }}"
              data-name="{{ $item->Project_name }}"
              data-bedrooms="{{ $item->bedrooms }}"
              data-bathrooms="{{ $item->bathrooms }}"
              data-furnished="{{ $item->furnished }}"
              data-listedby="{{ $item->listed_by }}"
              data-builtup="{{ $item->builtup_area }}"
              data-carpet="{{ $item->carpet_area }}"
              data-bachelors="{{ $item->bachelors }}"
              data-floors="{{ $item->floors }}"
              data-floorno="{{ $item->floor_no }}"
              data-phone="{{ $item->phone }}"
              data-address="{{ $item->address }}"
              data-price="{{ $item->price }}">
              Details
            </button>
          </div>
        </div>
      </div>
      @endforeach
      @endif
    </div>
  </div>

  <!-- Modal -->
  <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Details</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p class="card-text">Car Parking: <span id="modal-carparking"></span></p>
          <p class="card-text">Hostel Name: <span id="modal-name"></span></p>
          <p class="card-title">Bedrooms: <span id="modal-bedrooms"></span></p>
          <p class="card-title">Bathrooms: <span id="modal-bathrooms"></span></p>
          <p class="card-text">Furnished: <span id="modal-furnished"></span></p>
          <p class="card-text">Listed By: <span id="modal-listedby"></span></p>
          <p class="card-text">Built-up Area: <span id="modal-builtup"></span></p>
          <p class="card-title">Carpet Area: <span id="modal-carpet"></span></p>
          <p class="card-title">Bachelors: <span id="modal-bachelors"></span></p>
          <p class="card-text">Floors: <span id="modal-floors"></span></p>
          <p class="card-text">Floor No: <span id="modal-floorno"></span></p>
          <p class="card-title">Phone: <span id="modal-phone"></span></p>
          <p class="card-title">Address: <span id="modal-address"></span></p>
          <p class="card-text">Price: <span id="modal-price"></span></p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <a href="tel:" class="btn btn-primary" id="modal-contact">Contact</a>
        </div>
      </div>
    </div>
  </div>

  <script>
    $(document).ready(function() {
      $('#exampleModalLong').on('show.bs.modal', function(event) {
        var button = $(event.relatedTarget); // Button that triggered the modal

        // Extract data from the data-* attributes
        var carparking = button.data('carparking');
        var name = button.data('name');
        var bedrooms = button.data('bedrooms');
        var bathrooms = button.data('bathrooms');
        var furnished = button.data('furnished');
        var listedby = button.data('listedby');
        var builtup = button.data('builtup');
        var carpet = button.data('carpet');
        var bachelors = button.data('bachelors');
        var floors = button.data('floors');
        var floorno = button.data('floorno');
        var phone = button.data('phone');
        var address = button.data('address');
        var price = button.data('price');

        // Update the modal's content
        var modal = $(this);
        modal.find('#modal-carparking').text(carparking);
        modal.find('#modal-name').text(name);
        modal.find('#modal-bedrooms').text(bedrooms);
        modal.find('#modal-bathrooms').text(bathrooms);
        modal.find('#modal-furnished').text(furnished);
        modal.find('#modal-listedby').text(listedby);
        modal.find('#modal-builtup').text(builtup);
        modal.find('#modal-carpet').text(carpet);
        modal.find('#modal-bachelors').text(bachelors);
        modal.find('#modal-floors').text(floors);
        modal.find('#modal-floorno').text(floorno);
        modal.find('#modal-phone').text(phone);
        modal.find('#modal-address').text(address);
        modal.find('#modal-price').text(price);
        modal.find('#modal-contact').attr('href', 'tel:' + phone); // Update the contact link
      });
    });
  </script>
@endsection