@extends('layouts.app')
@section('title', $event->getName())
@section('content')
    @include('partials.slider',['message' => 'Conéctate con nosotros',
                                'image' => 'img/contact/business-world.jpg'])
    <section class="container">
        <div class="col-lg-12">
            {!! Breadcrumbs::render('event.slug', $event) !!}
        </div>
    </section>
    <section>
        <div class="container">
            <div class="col-lg-8">
    
                <!-- Blog Post -->
    
                <hr>
    
                <!-- Date/Time -->
                <p><i class="fa fa-clock-o"></i>
                    Fecha inicio: {{$event->getTimePeriod()->start()->format('d-m-Y')}} /  
                    Fecha fin: {{$event->getTimePeriod()->end()->format('d-m-Y')}}</p>
                <hr>
                
                <div class="panel panel-default" style="border-left-color:#337ab7; border-left-width: 5px;">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-6">
                                <ul class="list-inline">
                                  <li><h3 style="margin-top:0px;">Popular</h3></li>
                                  <li><p style="display:inline-block;">Disponibles: <span class="badge">42</span></p></li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <select class="form-control">
                                  <option>1</option>
                                  <option>2</option>
                                  <option>3</option>
                                  <option>4</option>
                                  <option>5</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                s/90.00
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default" style="border-left-color:#337ab7; border-left-width: 5px;">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-6">
                                <ul class="list-inline">
                                  <li><h3 style="margin-top:0px;">VIP</h3></li>
                                  <li><p style="display:inline-block;">Disponibles: <span class="badge">5</span></p></li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <select class="form-control">
                                  <option>1</option>
                                  <option>2</option>
                                  <option>3</option>
                                  <option>4</option>
                                  <option>5</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                s/90.00
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <a href="{{route('participant.create')}}" class="btn btn-primary">Registrate</a>
                </div>
                
                <hr>
    
                <!-- Post Content -->
                <p>{{$event->getDescription()}}</p>
                <p>{{$event->getDescription()}}</p>
                <p>{{$event->getDescription()}}</p>
                <p>{{$event->getDescription()}}</p>
                
                <hr>
    
                <!-- Comments -->
    
                <!-- Comments Form -->
                <div class="well">
                    <h4>Leave a Comment:</h4>
                    <form role="form">
                        <div class="form-group">
                            <textarea class="form-control" rows="3"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
    
                <hr>
    
                <!-- Comments -->
    
                <!-- Comment -->
                <div class="media">
                    <a class="pull-left" href="#">
                        <img class="media-object" src="http://placehold.it/64x64" alt="">
                    </a>
                    <div class="media-body">
                        <h4 class="media-heading">Start Bootstrap
                            <small>August 25, 2014 at 9:30 PM</small>
                        </h4>
                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                    </div>
                </div>
    
                <!-- Comment -->
                <div class="media">
                    <a class="pull-left" href="#">
                        <img class="media-object" src="http://placehold.it/64x64" alt="">
                    </a>
                    <div class="media-body">
                        <h4 class="media-heading">Start Bootstrap
                            <small>August 25, 2014 at 9:30 PM</small>
                        </h4>
                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                        <!-- Nested Comment -->
                        <div class="media">
                            <a class="pull-left" href="#">
                                <img class="media-object" src="http://placehold.it/64x64" alt="">
                            </a>
                            <div class="media-body">
                                <h4 class="media-heading">Nested Start Bootstrap
                                    <small>August 25, 2014 at 9:30 PM</small>
                                </h4>
                                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                            </div>
                        </div>
                        <!-- End Nested Comment -->
                    </div>
                </div>
    
            </div>
        </div>
    </section>
@endsection