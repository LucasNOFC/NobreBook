@extends('layouts.app')
@section ('profileuser')

                  <x-userprofile :user="Auth::user()" :profile="$profile" />
        
@endsection