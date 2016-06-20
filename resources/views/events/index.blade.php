@extends('layouts.app')
@section('title', 'Eventos')
@section('content')
    @include('partials.slider',['message' => 'Grandes eventos para compartir grandes ideas',
                                'image' => 'img/events/entrepreneur.jpg'])
    <section class="container">
        <div class="col-lg-12">
            {!! Breadcrumbs::render() !!}
        </div>
    </section>
    
    <section>
        <div class="container">
            <div class="col-md-8">
                @foreach($events as $event)
                    <h2>
                        <a href="{{ route('event.slug', $event->getSlug()) }}">{{$event->getName()}}</a>
                    </h2>
                    <p class="lead">
                        by <a href="index.php">Start Bootstrap</a>
                    </p>
                    <p><i class="fa fa-clock-o"></i>
                        Fecha inicio: {{$event->getTimePeriod()->start()->format('d-m-Y')}} /  
                        Fecha fin: {{$event->getTimePeriod()->end()->format('d-m-Y')}}
                    </p>
                    <hr>
                    <a href="{{ route('event.slug', $event->getSlug()) }}">
                        <img class="img-responsive img-hover" src="http://placehold.it/900x300" alt="">
                    </a>
                    <hr>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore, veritatis, tempora, necessitatibus inventore nisi quam quia repellat ut tempore laborum possimus eum dicta id animi corrupti debitis ipsum officiis rerum.</p>
                    <hr>
                @endforeach
                
                
                <ul class="pagination">
                    <li>
                      <a href="#" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                      </a>
                    </li>
                    <li><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li>
                      <a href="#" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                      </a>
                    </li>
                 </ul>
    
            </div>
    
            <!-- Event Sidebar Widgets Column -->
            <div class="col-md-4">
    
                <div class="well">
                    <h4>Búsqueda</h4>
                    <div class="input-group">
                        <input type="text" class="form-control">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button"><i class="fa fa-search"></i></button>
                        </span>
                    </div>
                    <!-- /.input-group -->
                </div>
    
                <!-- Blog Categories Well -->
                <div class="well">
                    <h4>Categorías</h4>
                    <div class="row">
                        <div class="col-lg-6">
                            <ul class="list-unstyled">
                                <li><a href="#">Cursos</a></li>
                                <li><a href="#">Talleres</a></li>
                                <li><a href="#">Seminarios</a></li>
                            </ul>
                        </div>
                        <!-- /.col-lg-6 -->
                        <div class="col-lg-6">
                            <ul class="list-unstyled">
                                <li><a href="#">Emprendimiento</a></li>
                                <li><a href="#">Negocios internacionales</a></li>
                                <li><a href="#">Mejora de procesos</a></li>
                                <li><a href="#">Marketing</a></li>
                            </ul>
                        </div>
                        <!-- /.col-lg-6 -->
                    </div>
                    <!-- /.row -->
                </div>
    
                <!-- Side Widget Well -->
                <div class="well">
                    <h4>Side Widget Well</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, perspiciatis adipisci accusamus laudantium odit aliquam repellat tempore quos aspernatur vero.</p>
                </div>
    
            </div>
        </div>
    </section>
@endsection