@extends('layouts.app')

@section('content')
@guest
<script>
         document.location.replace('/');
     </script>  
@else
     <script>
         document.location.replace('/home');
     </script>                 
@endguest
@endsection
