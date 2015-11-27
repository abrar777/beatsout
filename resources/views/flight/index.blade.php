<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

       
    </head>
    <body>
       @foreach ($flights as $flight)
    <p>{{ $flight->id }} {{ $flight->name }} {{ $flight->flight_no }} {{ $flight->flight_status }} {{ $flight->airline }} {{ $flight->created_at }} {{ $flight->updated_at }}</p>
    <hr>
   
@endforeach
    </body>
</html>
