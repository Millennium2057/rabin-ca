@extends('backend.includes.main')
@section('content')
<div class="sb2-2">
    @if ($errors->any())
    <div id="alert" class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    @if (session('success'))
    <div id="alert" class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

    @if (session('error'))
    <div id="alert" class="alert alert-danger">
        {{ session('error') }}
    </div>
    @endif
    <div class="sb2-2-3">
        @if($showContact->isEmpty())
        <div style=" height:100vh; display:flex; justify-content:center;">
            <div style="margin-top: 100px;">
                <p>No Contacts are available at the moment:</p>
            </div>
        </div>

        @else
        <div class="row">
            <div class="col-md-12">
                <div class="box-inn-sp">
                    <div class="inn-title">
                        <h4>Contact Details</h4>
                        <p>All about students like name, student id, phone, email, country, city and more</p>
                    </div>
                    <div class="tab-inn">
                        <div class="table-responsive table-desi">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                    <th>Id</th>
                                        <th>Name</th>     
                                        <th>Email</th>  
                                        <th>Subject</th>
                                        <th>Message</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($showContact as $contact)
                                    <tr>
                                    <td>{{$contact->id}}</td>
                                        <td><a href="#"><span class="list-enq-name">{{$contact->name}}</span><span class="list-enq-city">{{$contact->created_at->format('Y-m-d')}}</span></a>
                                        </td>
                                        <td>{{$contact->email}}</td>
                                        <td>{{Str::limit($contact->subject,50)}}</td>
                                        <td>{{Str::limit($contact->message,50)}}</td>

                                        <td>
                                         <a href="{{route('view.contact', $contact->id)}}"><span class="label label-success">View More</span></a> 
                                        </td>
                                        <td><a href="{{route('delete.contact', $contact->id)}}" class="ad-st-view">Delete</a></td>
                                    </tr>
                                 @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    setTimeout(function() {
        document.getElementById('alert').style.display = 'none';
    }, 5000); // Set the delay to 5000 milliseconds (5 seconds)
</script>
@endif
@endsection