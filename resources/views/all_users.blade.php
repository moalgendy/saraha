@extends('layouts.app')

@section('content')
{{-- <div class="fh5co-loader"></div> --}}
	<style>
        .py-4{
            padding-top: 0rem!important;
        }
        .fh5co-heading h2{
            margin-top: 2rem;
        }
    </style>

    <style>
    @import url('https://fonts.googleapis.com/css2?family=Tajawal:wght@200;300;400;500;700;800;900&display=swap');
    </style>
    
<div id="page">	


{{-- <div class="row">
    <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
        <h2>{{ __('Message To You') }}</h2>
    </div> --}}
</div>
<div class="container" style="margin-top: 3rem;">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                
                    <div class="card-header">{{ __('All Users ') }} 
                        {{-- <button  class="btn btn-primary" style="cursor: text;">{{ $message }}</button>  --}}
                        
                    </div>

                        <div class="card-body" style=" font-family: Tajawal,sans-serif">
                            
                            @forelse ($user as $user)
                                <td><img style="width: 50px;height:50px;border-radius: 50%; margin-right:5px;border:2px solid black;" src="{{ asset('storage/images/' . $user->profile_photo_path) }}" alt="{{ $user->name }}"></td> 
                                {{-- <td>{{ $user->name }}</td>  --}}
                                <td><a style="margin-left: 10px" href="{{ route('message.send',encrypt($user->id)) }}">{{ $user->name }} </a></td>       
                                    
                                <hr>
                            @empty
                                <p>No user like this</p>

                            @endforelse

                        </div>
                {{-- {{ $messages->links() }} --}}
            </div>
        </div>
    </div>
</div>

@endsection




