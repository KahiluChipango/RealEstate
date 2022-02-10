<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>
<body>
<table class="table table-bordered table-dark">
    <thead>
        <tr>

            <th>Job #</th>
            <th>Client Name</th>
            <th>Property Address</th>
            <th>Contact Person</th>
            <th>Contact Number</th>
            <th>Client Email </th>
            <th>Date of receipt of instruction</th>
            <th>Inspection Due</th>
            <th>Days taken to complete</th>
            <th>Report Due Date</th>
            <th>Assigned To</th>
            <th>Valuer Email Address</th>
            <th>Fee</th>
            <th>Fee Due Date</th>
            <th>Date of Delivery</th>
            <th>Type of Property</th>
            <th>Status For Accounts</th>
            <th>Market Value</th>
            <th>Property Description</th>

        </tr>
    </thead>

</table>
{{--<tbody>--}}
{{--<?php $i = 0?>--}}
{{--@foreach($children as $child)--}}
{{--    <tr>--}}

{{--        <td>{{$child->first_name." ".$child->last_name}}</td>--}}
{{--        <td>{{$child->child_id}}</td>--}}

{{--        <td>{{$child->sex}}</td>--}}
{{--        <td>{{$child->status}}</td>--}}
{{--        <td>--}}
{{--            <li class="list-inline-item dropdown">--}}
{{--                <a href="#" class="text-default " data-toggle="dropdown">Manage</a>--}}

{{--                <div class="dropdown-menu dropdown-menu-right">--}}

{{--                    <a href="{{route("child-profile",$child->id)}}" class="dropdown-item">View</a>--}}
{{--                    <a href="{{url("child-edit",$child->id)}}" class="dropdown-item ">Edit</a>--}}
{{--                    <a href="{{route("letter-upload-view",["id"=>$child->id])}}" class="dropdown-item">Letter</a>--}}
{{--                    <div class="dropdown-divider"></div>--}}


{{--                    <form method="POST" action="{{route("child-delete",$child->id)}}">--}}
{{--                        @method("POST")--}}
{{--                        @csrf--}}
{{--                        <button type="submit" onclick="return confirm('Are you sure you want to delete child?\n' +--}}
{{--                     'This cant be undone')" class="dropdown-item">Delete--}}
{{--                        </button>--}}
{{--                    </form>--}}


{{--                </div>--}}

{{--            </li>--}}

{{--        </td>--}}


{{--    </tr>--}}
{{--@endforeach--}}

{{--</tbody>--}}



<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
