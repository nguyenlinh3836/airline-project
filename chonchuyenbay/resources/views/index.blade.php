<?php
?>
<h2 class="text-4 mb-3">Book Domestic and International Flights</h2>
<form id="bookingFlight" action="{{url("/flightSearch")}}">
    {{ csrf_field() }}
    <div class="form-row">
        <div class="col-md-8 col-lg-3 form-group">
            <input type="text" class="form-control" id="flightFrom" required placeholder="From">
            <span class="icon-inside"><i class="fas fa-map-marker-alt"></i></span> </div>
        <div class="col-md-8 col-lg-3 form-group">
            <input type="text" class="form-control" id="flightTo" required placeholder="To">
            <span class="icon-inside"><i class="fas fa-map-marker-alt"></i></span> </div>
        <div class="col-md-8 col-lg-3 form-group">
            <input id="flightDepart" type="text" class="form-control" required placeholder="Depart Date">
            <span class="icon-inside"><i class="far fa-calendar-alt"></i></span> </div>
        <div class="col-md-8 col-lg-3 form-group">
            <input id="flightReturn" type="text" class="form-control" required placeholder="Return Date">
            <span class="icon-inside"><i class="far fa-calendar-alt"></i></span> </div>

        <div class="col-md-12 form-group">
            <button class="btn btn-primary btn-block" type="submit">Search</button>
        </div>
    </div>
</form>
</div>
