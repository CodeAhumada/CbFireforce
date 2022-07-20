 <!-- Fonts -->
 <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
 @extends('adminlte::page')

 @section('title', 'Home')

 @section('content_header')
     <h1>Material Mayor del Cuerpo de Bomberos de Antofagasta</h1>
 @stop

 @section('content')


     <div class="wrapper  ">
         <div class="row row-cols-2">
             <div class="col border col-2 d-flex justify-content-center">
                 <table class=" table1 table-sm border-dark  mt-5 mb-5 text-center Auto-column ">
                     <thead>
                         <tr>
                             <th scope="col ">1er Compañia</th>
                         </tr>
                     </thead>
                     <tbody>
                         @foreach ($carros as $carro)
                             @if ($carro->sucursal == '1era Compañía')
                                 <tr>
                                     <td>
                                        @if($carro->estado==1)
                                         <a class="btn btn-block btn-success"
                                             href="{{ route('carros.show', $carro->id) }}">{{ $carro->name }}</a>
                                        @endif
                                        @if($carro->estado==2)
                                        <a class="btn btn-block btn-warning"
                                            href="{{ route('carros.show', $carro->id) }}">{{ $carro->name }}</a>
                                       @endif
                                       @if($carro->estado==3)
                                       <a class="btn btn-block btn-danger"
                                           href="{{ route('carros.show', $carro->id) }}">{{ $carro->name }}</a>
                                      @endif

                                      @if($carro->estado==0)
                                      <a class="btn btn-block btn-dark"
                                          href="{{ route('carros.show', $carro->id) }}">{{ $carro->name }}</a>
                                     @endif
                                     </td>
                                 </tr>
                             @endif
                         @endforeach
                     </tbody>

                 </table>
             </div>
             <div class="col border col-2 d-flex justify-content-center">
                 <table class=" table2  table-sm border-dark  mt-5 mb-5 text-center Auto-column ">
                     <thead>
                         <tr>
                             <th scope="col ">2da Compañía</th>
                         </tr>
                     </thead>
                     <tbody>
                         @foreach ($carros as $carro)
                             @if ($carro->sucursal == '2da Compañía')
                                 <tr>
                                     <td>
                                        @if($carro->estado==1)
                                        <a class="btn btn-block btn-success"
                                            href="{{ route('carros.show', $carro->id) }}">{{ $carro->name }}</a>
                                       @endif
                                       @if($carro->estado==2)
                                       <a class="btn btn-block btn-warning"
                                           href="{{ route('carros.show', $carro->id) }}">{{ $carro->name }}</a>
                                      @endif
                                      @if($carro->estado==3)
                                      <a class="btn btn-block btn-danger"
                                          href="{{ route('carros.show', $carro->id) }}">{{ $carro->name }}</a>
                                     @endif

                                     @if($carro->estado==0)
                                     <a class="btn btn-block btn-dark"
                                         href="{{ route('carros.show', $carro->id) }}">{{ $carro->name }}</a>
                                    @endif
                                     </td>
                                 </tr>
                             @endif
                         @endforeach
                     </tbody>
                 </table>

             </div>
             <div class="col border col-2 d-flex justify-content-center">
                 <table class=" table3  table-sm border-dark  mt-5 mb-5 text-center Auto-column ">
                     <thead>
                         <tr>
                             <th scope="col ">3ra Compañía</th>
                         </tr>
                     </thead>
                     <tbody>
                         @foreach ($carros as $carro)
                             @if ($carro->sucursal == '3ra Compañía')
                                 <tr>
                                     <td>
                                        @if($carro->estado==1)
                                        <a class="btn btn-block btn-success"
                                            href="{{ route('carros.show', $carro->id) }}">{{ $carro->name }}</a>
                                       @endif
                                       @if($carro->estado==2)
                                       <a class="btn btn-block btn-warning"
                                           href="{{ route('carros.show', $carro->id) }}">{{ $carro->name }}</a>
                                      @endif
                                      @if($carro->estado==3)
                                      <a class="btn btn-block btn-danger"
                                          href="{{ route('carros.show', $carro->id) }}">{{ $carro->name }}</a>
                                     @endif

                                     @if($carro->estado==0)
                                     <a class="btn btn-block btn-dark"
                                         href="{{ route('carros.show', $carro->id) }}">{{ $carro->name }}</a>
                                    @endif
                                     </td>
                                 </tr>
                             @endif
                         @endforeach
                     </tbody>
                 </table>
             </div>
             <div class="col border col-2 d-flex justify-content-center">
                 <table class=" table3  table-sm border-dark  mt-5 mb-5 text-center Auto-column ">
                     <thead>
                         <tr>
                             <th scope="col ">4ta Compañía</th>
                         </tr>
                     </thead>
                     <tbody>
                         @foreach ($carros as $carro)
                             @if ($carro->sucursal == '4ta Compañía')
                                 <tr>
                                     <td>
                                        @if($carro->estado==1)
                                        <a class="btn btn-block btn-success"
                                            href="{{ route('carros.show', $carro->id) }}">{{ $carro->name }}</a>
                                       @endif
                                       @if($carro->estado==2)
                                       <a class="btn btn-block btn-warning"
                                           href="{{ route('carros.show', $carro->id) }}">{{ $carro->name }}</a>
                                      @endif
                                      @if($carro->estado==3)
                                      <a class="btn btn-block btn-danger"
                                          href="{{ route('carros.show', $carro->id) }}">{{ $carro->name }}</a>
                                     @endif

                                     @if($carro->estado==0)
                                     <a class="btn btn-block btn-dark"
                                         href="{{ route('carros.show', $carro->id) }}">{{ $carro->name }}</a>
                                    @endif
                                     </td>
                                 </tr>
                             @endif
                         @endforeach
                     </tbody>
                 </table>
             </div>
             <div class="col border col-2 d-flex justify-content-center">
                 <table class=" table3  table-sm border-dark  mt-5 mb-5 text-center Auto-column ">
                     <thead>
                         <tr>
                             <th scope="col ">5ta Compañía</th>
                         </tr>
                     </thead>
                     <tbody>
                         @foreach ($carros as $carro)
                             @if ($carro->sucursal == '5ta Compañía')
                                 <tr>
                                     <td>
                                        @if($carro->estado==1)
                                        <a class="btn btn-block btn-success"
                                            href="{{ route('carros.show', $carro->id) }}">{{ $carro->name }}</a>
                                       @endif
                                       @if($carro->estado==2)
                                       <a class="btn btn-block btn-warning"
                                           href="{{ route('carros.show', $carro->id) }}">{{ $carro->name }}</a>
                                      @endif
                                      @if($carro->estado==3)
                                      <a class="btn btn-block btn-danger"
                                          href="{{ route('carros.show', $carro->id) }}">{{ $carro->name }}</a>
                                     @endif

                                     @if($carro->estado==0)
                                     <a class="btn btn-block btn-dark"
                                         href="{{ route('carros.show', $carro->id) }}">{{ $carro->name }}</a>
                                    @endif
                                     </td>
                                 </tr>
                             @endif
                         @endforeach
                     </tbody>
                 </table>
             </div>
             <div class="col col-2">
             </div>


             <div class="col border col-2 d-flex justify-content-center">
                 <table class=" table3  table-sm border-dark  mt-5 mb-5 text-center Auto-column ">
                     <thead>
                         <tr>
                             <th scope="col ">6ta Compañía</th>
                         </tr>
                     </thead>
                     <tbody>
                         @foreach ($carros as $carro)
                             @if ($carro->sucursal == '6ta Compañía')
                                 <tr>
                                     <td>
                                        @if($carro->estado==1)
                                        <a class="btn btn-block btn-success"
                                            href="{{ route('carros.show', $carro->id) }}">{{ $carro->name }}</a>
                                       @endif
                                       @if($carro->estado==2)
                                       <a class="btn btn-block btn-warning"
                                           href="{{ route('carros.show', $carro->id) }}">{{ $carro->name }}</a>
                                      @endif
                                      @if($carro->estado==3)
                                      <a class="btn btn-block btn-danger"
                                          href="{{ route('carros.show', $carro->id) }}">{{ $carro->name }}</a>
                                     @endif

                                     @if($carro->estado==0)
                                     <a class="btn btn-block btn-dark"
                                         href="{{ route('carros.show', $carro->id) }}">{{ $carro->name }}</a>
                                    @endif
                                     </td>
                                 </tr>
                             @endif
                         @endforeach
                     </tbody>
                 </table>
             </div>
             <div class="col border col-2 d-flex justify-content-center">
                 <table class=" table3  table-sm border-dark  mt-5 mb-5 text-center Auto-column ">
                     <thead>
                         <tr>
                             <th scope="col ">7ma Compañía</th>
                         </tr>
                     </thead>
                     <tbody>
                         @foreach ($carros as $carro)
                             @if ($carro->sucursal == '7ma Compañía')
                                 <tr>
                                     <td>
                                        @if($carro->estado==1)
                                        <a class="btn btn-block btn-success"
                                            href="{{ route('carros.show', $carro->id) }}">{{ $carro->name }}</a>
                                       @endif
                                       @if($carro->estado==2)
                                       <a class="btn btn-block btn-warning"
                                           href="{{ route('carros.show', $carro->id) }}">{{ $carro->name }}</a>
                                      @endif
                                      @if($carro->estado==3)
                                      <a class="btn btn-block btn-danger"
                                          href="{{ route('carros.show', $carro->id) }}">{{ $carro->name }}</a>
                                     @endif

                                     @if($carro->estado==0)
                                     <a class="btn btn-block btn-dark"
                                         href="{{ route('carros.show', $carro->id) }}">{{ $carro->name }}</a>
                                    @endif
                                     </td>
                                 </tr>
                             @endif
                         @endforeach
                     </tbody>
                 </table>
             </div>
             <div class="col border col-2 d-flex justify-content-center">
                 <table class=" table3  table-sm border-dark  mt-5 mb-5 text-center Auto-column ">
                     <thead>
                         <tr>
                             <th scope="col ">8va Compañía</th>
                         </tr>
                     </thead>
                     <tbody>
                         @foreach ($carros as $carro)
                             @if ($carro->sucursal == '8va Compañía')
                                 <tr>
                                     <td>
                                        @if($carro->estado==1)
                                         <a class="btn btn-block btn-success"
                                             href="{{ route('carros.show', $carro->id) }}">{{ $carro->name }}</a>
                                        @endif
                                        @if($carro->estado==2)
                                        <a class="btn btn-block btn-warning"
                                            href="{{ route('carros.show', $carro->id) }}">{{ $carro->name }}</a>
                                       @endif
                                       @if($carro->estado==3)
                                       <a class="btn btn-block btn-danger"
                                           href="{{ route('carros.show', $carro->id) }}">{{ $carro->name }}</a>
                                      @endif

                                      @if($carro->estado==0)
                                      <a class="btn btn-block btn-dark"
                                          href="{{ route('carros.show', $carro->id) }}">{{ $carro->name }}</a>
                                     @endif
                                     </td>
                                 </tr>
                             @endif
                         @endforeach
                     </tbody>
                 </table>
             </div>
             <div class="col border col-2 d-flex justify-content-center">
                 <table class=" table3  table-sm border-dark  mt-5 mb-5 text-center Auto-column ">
                     <thead>
                         <tr>
                             <th scope="col ">10ma Compañía</th>
                         </tr>
                     </thead>
                     <tbody>
                         @foreach ($carros as $carro)
                             @if ($carro->sucursal == '10ma Compañía')
                                 <tr>
                                     <td>
                                        @if($carro->estado==1)
                                        <a class="btn btn-block btn-success"
                                            href="{{ route('carros.show', $carro->id) }}">{{ $carro->name }}</a>
                                       @endif
                                       @if($carro->estado==2)
                                       <a class="btn btn-block btn-warning"
                                           href="{{ route('carros.show', $carro->id) }}">{{ $carro->name }}</a>
                                      @endif
                                      @if($carro->estado==3)
                                      <a class="btn btn-block btn-danger"
                                          href="{{ route('carros.show', $carro->id) }}">{{ $carro->name }}</a>
                                     @endif

                                     @if($carro->estado==0)
                                     <a class="btn btn-block btn-dark"
                                         href="{{ route('carros.show', $carro->id) }}">{{ $carro->name }}</a>
                                    @endif
                                     </td>
                                 </tr>
                             @endif
                         @endforeach
                     </tbody>
                 </table>
             </div>
             <div class="col border col-2 d-flex justify-content-center">
                 <table class=" table3  table-sm border-dark  mt-5 mb-5 text-center Auto-column ">
                     <thead>
                         <tr>
                             <th scope="col ">Comandancia</th>
                         </tr>
                     </thead>
                     <tbody>
                         @foreach ($carros as $carro)
                             @if ($carro->sucursal == 'Comandancia')
                                 <tr>
                                     <td>
                                        @if($carro->estado==1)
                                        <a class="btn btn-block btn-success"
                                            href="{{ route('carros.show', $carro->id) }}">{{ $carro->name }}</a>
                                       @endif
                                       @if($carro->estado==2)
                                       <a class="btn btn-block btn-warning"
                                           href="{{ route('carros.show', $carro->id) }}">{{ $carro->name }}</a>
                                      @endif
                                      @if($carro->estado==3)
                                      <a class="btn btn-block btn-danger"
                                          href="{{ route('carros.show', $carro->id) }}">{{ $carro->name }}</a>
                                     @endif

                                     @if($carro->estado==0)
                                     <a class="btn btn-block btn-dark"
                                         href="{{ route('carros.show', $carro->id) }}">{{ $carro->name }}</a>
                                    @endif
                                     </td>
                                 </tr>
                             @endif
                         @endforeach
                     </tbody>
                 </table>
             </div>

         </div>

     </div>



 @stop

 @section('css')
     <link rel="stylesheet" href="/css/admin_custom.css">
 @stop

 @section('js')
     <script>
         console.log('Hi!');
     </script>
 @stop
