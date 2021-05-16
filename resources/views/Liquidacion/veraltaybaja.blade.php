@extends('layouts.app')

@section('content')
<div class="container">
   <!-- <div class="row justify-content-center">-->
        <div class="col-md-20">
        
        @if(session('mensaje'))

<div class="alert alert-danger" role="alert">{{ session('mensaje') }}
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
</div>
@endif

<br><br>


        
        <br>
        <!--TABLA ALTAS Y BAJAS-->

        <div class="card">
        <div class="card-header"><b>Datos de la Institución </b>
                        </div>
                        <br>
                        <div class="form-row" >
                
                <label style="text-align:center" for="staticEmail" class="col-sm-1 col-form-label"><b><u>Número</b></u></label>
                <div class="col-sm-3">
                <input id="NumeroInst" name="NumeroInst" type="number" min="0"  class="form-control" id="formGroupExampleInput" value="" placeholder="Ingrese número de la institución">
                </div>
                <label style="text-align:center" for="staticEmail" class="col-sm-1 col-form-label"><b><u>Institución</b></u></label>
                <div class="col-sm-3">
                <input id="NombreInst" name="NombreInst" type="text"  class="form-control" id="staticEmail" value="" placeholder="Ingrese nombre de la institución">
                </div>
        </div>
        <br>
        <div class="form-row">
                
                <label style="text-align:center" for="staticEmail" class="col-sm-1 col-form-label"><b><u>Turno</b></u></label>
                <div class="col-sm-3">
                <input id="TurnoInst" name="TurnoInst" type="text"  class="form-control" id="staticEmail" value="" placeholder="Ingrese turno de la institución">
                </div>
                <label style="text-align:center" for="staticEmail" class="col-sm-1 col-form-label"><b><u>Domicilio</b></u></label>
                <div class="col-sm-3">
                <input id="DomicilioInst" name="DomicilioInst" type="text"  class="form-control" id="staticEmail" value="" placeholder="Ingrese domicilio de la institución">
                </div>
        </div>
        <br>
        <div class="form-row">
                
                <label style="text-align:center" for="staticEmail" class="col-sm-1 col-form-label"><b><u>Teléfono</b></u></label>
                <div class="col-sm-3">
                <input id="TelefonoInst" name="TelefonoInst" type="number" min="0"  class="form-control" id="staticEmail" value="" placeholder="Ingrese teléfono de la institución">
                </div>
                <label style="text-align:center" for="staticEmail" class="col-sm-1 col-form-label"><b><u>Localidad</b></u></label>
                <div class="col-sm-3">
                <input id="LocalidadInst" name="LocalidadInst" type="text"  class="form-control" id="staticEmail" value="" placeholder="Ingrese localidad de la institución">
                </div>
        </div>
        <br>
        <div class="form-row">
                
                <label style="text-align:center" for="staticEmail" class="col-sm-2 col-form-label"><b><u>Departamento</b></u></label>
                <div class="col-sm-3">
                <input id="DepartamentoInst" name="DepartamentoInst" type="text"  class="form-control" id="staticEmail" value="" placeholder="Ingrese depto de la institución">
                </div>
                
        </div>  
        <br>
</div>
        <br>   
        <div class="card">
                        <div class="card-header"> <b>Planilla de Altas y Bajas </b>
                        <div class="btn-group" role="group" aria-label="Basic example">
        <a href="{{route('liquidacion.verpdfAltaBaja')}}" target="blank" class="btn btn-secondary">Ver PDF</a>
        <a href="{{route('liquidacion.descargarpdfAltaBaja')}}" class="btn btn-secondary">Descargar PDF</a>
        
</div>     
</div>     
  
                        
                        </div>
                
                        
        </div>
        <br>
        
                @if(session('mensaje1'))

<div class="alert alert-success" role="alert">{{ session('mensaje1') }}
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>

</div>
<br>
@endif

@if(session()->has('mensaje'))
<div class="alert alert-danger" role="alert">{{ session('mensaje') }}
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>

</div>
<br>
@endif   
  
        <table class="table table-bordered " id="tablaAltaBaja" >
                        <thead class="thead-dark">
                                <tr >
                                <th colspan="5"></th>
                                <th colspan="1" class="text-right-align">Grado</th>
                                <th colspan="3" class="text-center-align">Servicios en el mes</th>
                                
                                <th colspan="2"></th>
                                </tr>
                                <tr>
                                <th scope="col">N°</th>
                                <th scope="col">D.N.I</th>
                                <th scope="col" style='width: 20%;'>Apellido y Nombres</th>
                                <th scope="col">Cargo</th>
                                <th scope="col">Carácter</th>
                                <th scope="col">Sección</th>
                                <th scope="col">Desde</th>
                                <th scope="col">Hasta</th>
                                <th scope="col">Total</th>
                                <th scope="col" style='width: 20%;'>Motivo</th>
                                <th scope="col"  >Observaciones</th>
                                
                                </tr>
                        </thead>
                        
                        <tbody>
                               
                                @foreach ($altabaja as $item)

                                <tr>
                                <td>{{$item->num}}</td>
                                <td>{{$item->dni}}</td>
                                <td>{{$item->ApellidoNombre}}</td>
                                <td>{{$item->cargo}}</td>
                                <td>{{$item->caracter}}</td>
                                <td>{{$item->GradoSeccion}}</td>
                                <td>{{$item->Desde}}</td>
                                <td>{{$item->Hasta}}</td>
                                <td>{{$item->Total}}</td>
                                <td>{{$item->Motivo}}</td>
                                <td>{{$item->Observaciones}}</td>
                                
                                </tr>
                                @endforeach

                               
                        </tbody>
                        
                        </table>
                        </div>
                        <br>
                        <div class="form-group row">
                        <div class="col-sm-12" style="text-align:center">
                        <button name="count_click" type="button" class="btn btn-primary mr-2" onclick="agregarFila()">Agregar Fila</button>
                        
                        <button type="submit" class="btn btn-success">Guardar</button>
                           
                </div>
                </div>
                
        <script type="text/javascript">
        /* Variables de Configuracion */
        var idCanvas='canvas';
        var idForm='formCanvas';
        var inputImagen='imagen';
        var estiloDelCursor='crosshair';
        var colorDelTrazo='##000000';
        var colorDeFondo='#fff';
        var grosorDelTrazo=2;
        /* Variables necesarias */
        var contexto=null;
        var valX=0;
        var valY=0;
        var flag=false;
        var imagen=document.getElementById(inputImagen); 
        var anchoCanvas=document.getElementById(idCanvas).offsetWidth;
        var altoCanvas=document.getElementById(idCanvas).offsetHeight;
        var pizarraCanvas=document.getElementById(idCanvas);
        /* Esperamos el evento load */
        window.addEventListener('load',IniciarDibujo,false);
        function IniciarDibujo(){
                /* Creamos la pizarra */
                pizarraCanvas.style.cursor=estiloDelCursor;
                contexto=pizarraCanvas.getContext('2d');
                contexto.fillStyle=colorDeFondo;
                contexto.fillRect(0,0,anchoCanvas,altoCanvas);
                contexto.strokeStyle=colorDelTrazo;
                contexto.lineWidth=grosorDelTrazo;
                contexto.lineJoin='round';
                contexto.lineCap='round';
                /* Capturamos los diferentes eventos */
                pizarraCanvas.addEventListener('mousedown',MouseDown,false);// Click pc
                pizarraCanvas.addEventListener('mouseup',MouseUp,false);// fin click pc
                pizarraCanvas.addEventListener('mousemove',MouseMove,false);// arrastrar pc
                pizarraCanvas.addEventListener('touchstart',TouchStart,false);// tocar pantalla tactil
                pizarraCanvas.addEventListener('touchmove',TouchMove,false);// arrastras pantalla tactil
                pizarraCanvas.addEventListener('touchend',TouchEnd,false);// fin tocar pantalla dentro de la pizarra
                pizarraCanvas.addEventListener('touchleave',TouchEnd,false);// fin tocar pantalla fuera de la pizarra
        }
        function MouseDown(e){
                flag=true;
                contexto.beginPath();
                valX=e.pageX-posicionX(pizarraCanvas); valY=e.pageY-posicionY(pizarraCanvas);
                contexto.moveTo(valX,valY);
        }
        function MouseUp(e){
                contexto.closePath();
                flag=false;
        }
        function MouseMove(e){
                if(flag){
                contexto.beginPath();
                contexto.moveTo(valX,valY);
                valX=e.pageX-posicionX(pizarraCanvas); valY=e.pageY-posicionY(pizarraCanvas);
                contexto.lineTo(valX,valY);
                contexto.closePath();
                contexto.stroke();
                }
        }
        function TouchMove(e){
                e.preventDefault();
                if (e.targetTouches.length == 1) { 
                var touch = e.targetTouches[0]; 
                MouseMove(touch);
                }
        }
        function TouchStart(e){
                if (e.targetTouches.length == 1) { 
                var touch = e.targetTouches[0]; 
                MouseDown(touch);
                }
        }
        function TouchEnd(e){
                if (e.targetTouches.length == 1) { 
                var touch = e.targetTouches[0]; 
                MouseUp(touch);
                }
        }
        function posicionY(obj) {
                var valor = obj.offsetTop;
                if (obj.offsetParent) valor += posicionY(obj.offsetParent);
                return valor;
        }
        function posicionX(obj) {
                var valor = obj.offsetLeft;
                if (obj.offsetParent) valor += posicionX(obj.offsetParent);
                return valor;
        }
        /* Limpiar pizarra */
        function LimpiarTrazado(){
                contexto=document.getElementById(idCanvas).getContext('2d');
                contexto.fillStyle=colorDeFondo;
                contexto.fillRect(0,0,anchoCanvas,altoCanvas);
        }
        /* Enviar el trazado */
        function GuardarTrazado(){
               // imagen.value=document.getElementById(idCanvas).toDataURL('image/png');
                document.forms[idForm].submit();
        }
        </script>
        <script> 
        var i = 1
        function agregarFila(){
        var m = i++;
        document.getElementById("tablaAltaBaja").insertRow(-1).innerHTML = '<td><input type="number" min="0" style="width : 30px; heigth : 100px" name=num'+m+' value='+m+'></td>'
                                                                                +'<td><input type="number" min="0" style="width : 70px; height: 30px; font-size: 60%;" name=dni'+m+'value="99.999.999"></td>'
                                                                                +'<td><input type="text" style="width : 100px; heigth : 100px; font-size: 60%;" name=ApellidoNombre'+m+' value="Juan Perez"></td>'
                                                                                +'<td><input type="text" style="width : 50px; heigth : 100px; font-size: 60%;" name=cargo'+m+'value="D02"></td>'
                                                                                +'<td><input type="text" style="width : 50px; heigth : 100px; font-size: 60%;" name=caracter'+m+'value="T / I / S / V"></td>'
                                                                                +'<td><input type="text" style="width : 50px; heigth : 100px; font-size: 60%;" name=GradoSeccion'+m+'value="4 G"></td>'
                                                                                +'<td><input type="date" style="width : 100px; heigth : 100px; font-size: 60%;" name=Desde'+m+'></td>'
                                                                                +'<td><input type="date" style="width : 100px; height: 20px; font-size: 60%;" name=Hasta'+m+'></td>'
                                                                                +'<td><input type="number" min="0" style="width : 30px; heigth : 100px; " name=Total'+m+'></td>'
                                                                                +'<td><input type="text" style="width : 100px; heigth : 100px; font-size: 60%;" name=Motivo'+m+'value="BAJA por culminación de licencia de la Prof. María Reynoso"></td>'
                                                                                +'<td><input type="text" style="width : 80px; heigth : 100px; font-size: 60%;" name=Observaciones'+m+'value="---"></td>'
                                                                        
                                                                        
                                                                                
        }

        function eliminarFila(){
                var table = document.getElementById("tablaAltaBaja");
                var rowCount = table.rows.length;
                //console.log(rowCount);        
                if(rowCount <= 1)
                alert('No se puede eliminar el encabezado');
                else
                table.deleteRow(rowCount -1);
        }

        </script>
        </div>

@endsection