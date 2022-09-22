<?php
  
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use App\Models\Event;
  
class FullCalenderController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function index(Request $request)
    {
  
        if($request->ajax()) {
       
             $data = Event::whereDate('Fecha_inicio', '>=', $request->start)
                       ->whereDate('Fecha_final',   '<=', $request->end)
                       ->get(['idAgenda', 'Mes','Semana','Dia','Hora_inicio','Hora_final']);
  
             return response()->json($data);
        }
  
        return view('fullcalender');
    }
 
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function ajax(Request $request)
    {
 
        switch ($request->type) {
           case 'add':
              $event = Event::create([
                  'mes' => $request->mes,
                  'Semana' => $request->Semana,
                  'Dia' => $request->Dia,
                  'Hora_inicio' => $request->Hora_inicio,
                  'Hora_final' => $request->Hora_final,
                  
              ]);
 
              return response()->json($event);
             break;
  
           case 'update':
              $event = Event::find($request->idAgenda)->update([
                'mes' => $request->mes,
                'Semana' => $request->Semana,
                'Dia' => $request->Dia,
                'Hora_inicio' => $request->Hora_inicio,
                'Hora_final' => $request->Hora_final,
              ]);
 
              return response()->json($event);
             break;
  
           case 'delete':
              $event = Event::find($request->idAgenda)->delete();
  
              return response()->json($event);
             break;
             
           default:
             # code...
             break;
        }
    }
}