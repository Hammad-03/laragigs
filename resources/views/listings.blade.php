@extends('layouts/app')
@section('content')


<x-hero/>
<x-search/>

@unless(count($listings) == 0)
@foreach($listings as $listing)

<x-listing-card :listing="$listing"/>

@endforeach
@else
<p>No Listing Found </p>
@endunless

@endsection