<p>
    Hola, {{ $to->getName() }}:
    Ha recibido un nuevo mensaje de {{ $from->getName() }}
</p>
<p>
  Aqui los detalles:
</p>
<ul>
  <li>Nombre: <strong>{{ $from->getName() }}</strong></li>
  <li>Correo: <strong>{{ $from->getEmail() }}</strong></li>
</ul>
<hr>
<p>
  {{ $content }}
</p>