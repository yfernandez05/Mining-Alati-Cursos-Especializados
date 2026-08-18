<?php

namespace App\Http\Controllers;

use Exception;
use Carbon\Carbon;
use App\Models\Cliente;
use Carbon\Traits\Date;
use App\Models\Atencion;
use Illuminate\Http\Request;
use App\Mail\MessageReceived;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Database\QueryException;
use App\Http\Requests\ClienteFormRequest;

class ClienteController extends Controller
{
    //producto / programa
    const CODIGO_PRODUCTO_NODEFINIDO = 139;
    const CODIGO_PROGRAMA_GENERAL = 6;
    const CODIGO_PROGRAMA_CE = 3;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        return view('welcome');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ClienteFormRequest $request){

        /* return dd($request); */
         DB::beginTransaction();
         $result = null;
        try {

            $cliente = new Cliente();
            $cliente->nombreapellido = $request->input('nombres');
            $cliente->email = $request->input('email');
            $cliente->pais = $request->input('country');
            $cliente->prefijopais = $request->input('prefijo');
            $cliente->telefono = $request->input('celular');
            $cliente->profesion = $request->input('profesion');
            $cliente->empresa = $request->input('empresa');
            /* $cliente->dni = $request->input('dni'); */
            $cliente->idprograma =  $request->input('codproducto');
            $cliente->idtipoprograma = $request->input('codproducto') == self::CODIGO_PRODUCTO_NODEFINIDO ? self::CODIGO_PROGRAMA_GENERAL : self::CODIGO_PROGRAMA_CE;
            $cliente->programa = $request->input('carrera');
            $cliente->origen = $request->input('origen');
            $cliente->procedencia = $request->input('procedencia');
            $cliente->campaign_source = $request->input('utm_source');
            $cliente->campaign_medium = $request->input('utm_medium');
            $cliente->campaign_name = $request->input('utm_campaign');
            $cliente->campaign_term = $request->input('utm_term');
            $cliente->campaign_content = $request->input('utm_content');
            $cliente->idcampania = config('app.campaign_code');

            //return dd('datos: ',$cliente);
            $cliente->save();

            $respuestaSp = DB::select('CALL SP_OBTENER_USUARIO_MENOR_ATENCION ()');
            if (count($respuestaSp) > 0) {
                $usuarioAtencion = array_shift($respuestaSp);

                $atencion = $this->setModelAtencion(new Atencion(), $request);
                $atencion->iduser = $usuarioAtencion->iduser;
                $atencion->idcliente = $cliente->idcliente;
                $atencion->idtipoatencion = 1;
                $atencion->idetiquetatele = 1;
                //$atencion->fechaagenda = Carbon::now();
                if (!is_null($request->fechaagenda)) {
                    $atencion->fechaagenda = Carbon::createFromFormat('d-m-Y H:i:s', $request->fechaagenda);
                }
                $atencion->fechaatencion = Carbon::now();
                $atencion->fechanotificacion = Carbon::now();
                $atencion->save();
            }

            Mail::to($cliente->email)->send(new MessageReceived($cliente));
            //Mail::to('feriavirtual@info.uwiener.edu.pe')->send(new MessageReceptor($cliente));

            DB::commit();
            return redirect()->route('thanks');

        } catch (QueryException $e) {
            DB::rollback();
           //dd($e);
            $duplicateEntry = 1062; // registro duplicado
            $messageUser = "";

            if (count($e->errorInfo)) {
                if ($e->errorInfo[1] == $duplicateEntry) {
                    $messageUser = ['warning' => 'La dirección de correo electrónico que ha ingresado ya está registrada.'];
                } else {
                    $messageUser = ['failed' => 'Ocurrió un error inesperado. Intente nuevamente más tarde.'];
                }

            } else {
                $messageUser = ['failed' => 'Ocurrió un error inesperado. Intente nuevamente más tarde.'];
            }

            return back()->withInput()->with($messageUser);
        } catch (Exception $e) {
            DB::rollback();
           //dd($e);
            return back()->withInput()->with('failed', 'Ocurrió un error inesperado. Intente nuevamente más tarde.');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function show(Cliente $cliente)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cliente $cliente)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cliente $cliente)
    {
        //
    }

    private function setModelAtencion(Atencion $atenciones, Request $request): Atencion
    {
        $atenciones->idtipoatencion = $request->idtipoatencion;
        $atenciones->idetiquetatele = $request->idetiquetatele;
        $atenciones->idcliente = $request->idcliente;
        $atenciones->fechaatencion = $request->fechaatencion;
        $atenciones->fechaagenda = $request->fechaagenda;
        $atenciones->comentario = $request->comentario;
        $atenciones->proximoinicio = $request->proximoinicio;

        return $atenciones;
    }
}
