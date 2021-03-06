<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\registros1;
use Illuminate\Http\Request;

class registros1Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $registros1 = registros1::where('Foto', 'LIKE', "%$keyword%")
                ->orWhere('Nombre', 'LIKE', "%$keyword%")
                ->orWhere('ApellidoPaterno', 'LIKE', "%$keyword%")
                ->orWhere('ApellidoMaterno', 'LIKE', "%$keyword%")
                ->orWhere('Sexo', 'LIKE', "%$keyword%")
                ->orWhere('Telefono', 'LIKE', "%$keyword%")
                ->orWhere('Correo', 'LIKE', "%$keyword%")
                ->orWhere('FechaNacimiento', 'LIKE', "%$keyword%")
                ->orWhere('Edad', 'LIKE', "%$keyword%")
                ->orWhere('Identificacion', 'LIKE', "%$keyword%")
                ->orWhere('ServicioMedico', 'LIKE', "%$keyword%")
                ->orWhere('Institucion', 'LIKE', "%$keyword%")
                ->orWhere('Especifique', 'LIKE', "%$keyword%")
                ->orWhere('Imss', 'LIKE', "%$keyword%")
                ->orWhere('Issste', 'LIKE', "%$keyword%")
                ->orWhere('Alcaldia', 'LIKE', "%$keyword%")
                ->orWhere('Calle', 'LIKE', "%$keyword%")
                ->orWhere('Numero', 'LIKE', "%$keyword%")
                ->orWhere('NumeroInterior', 'LIKE', "%$keyword%")
                ->orWhere('Colonia', 'LIKE', "%$keyword%")
                ->orWhere('Cp', 'LIKE', "%$keyword%")
                ->orWhere('ComprobanteDomicilio', 'LIKE', "%$keyword%")
                ->orWhere('Deporte', 'LIKE', "%$keyword%")
                ->orWhere('Rama', 'LIKE', "%$keyword%")
                ->orWhere('Modalidad', 'LIKE', "%$keyword%")
                ->orWhere('Categoria', 'LIKE', "%$keyword%")
                ->orWhere('Capitan', 'LIKE', "%$keyword%")
                ->orWhere('NombreEquipo', 'LIKE', "%$keyword%")
                ->orWhere('CintasTae', 'LIKE', "%$keyword%")
                ->orWhere('CartaResponsiva', 'LIKE', "%$keyword%")
                ->orWhere('Peso', 'LIKE', "%$keyword%")
                ->orWhere('Estatura', 'LIKE', "%$keyword%")
                ->orWhere('EstadoDeSalud', 'LIKE', "%$keyword%")
                ->orWhere('PadeceEnfermedad', 'LIKE', "%$keyword%")
                ->orWhere('QueEnfermedadPadece', 'LIKE', "%$keyword%")
                ->orWhere('EspecifiqueEnfermedad', 'LIKE', "%$keyword%")
                ->orWhere('Fuma', 'LIKE', "%$keyword%")
                ->orWhere('CuantoFuma', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $registros1 = registros1::latest()->paginate($perPage);
        }

        return view('registros1.index', compact('registros1'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('registros1.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        
        $requestData = $request->all();
                if ($request->hasFile('Foto')) {
            $requestData['Foto'] = $request->file('Foto')
                ->store('uploads', 'public');
        }
        if ($request->hasFile('Identificacion')) {
            $requestData['Identificacion'] = $request->file('Identificacion')
                ->store('uploads', 'public');
        }
        if ($request->hasFile('ComprobanteDomicilio')) {
            $requestData['ComprobanteDomicilio'] = $request->file('ComprobanteDomicilio')
                ->store('uploads', 'public');
        }

        registros1::create($requestData);

        return redirect('registros1')->with('flash_message', 'registros1 added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $registros1 = registros1::findOrFail($id);

        return view('registros1.show', compact('registros1'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $registros1 = registros1::findOrFail($id);

        return view('registros1.edit', compact('registros1'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        
        $requestData = $request->all();
                if ($request->hasFile('Foto')) {
            $requestData['Foto'] = $request->file('Foto')
                ->store('uploads', 'public');
        }
        if ($request->hasFile('Identificacion')) {
            $requestData['Identificacion'] = $request->file('Identificacion')
                ->store('uploads', 'public');
        }
        if ($request->hasFile('ComprobanteDomicilio')) {
            $requestData['ComprobanteDomicilio'] = $request->file('ComprobanteDomicilio')
                ->store('uploads', 'public');
        }

        $registros1 = registros1::findOrFail($id);
        $registros1->update($requestData);

        return redirect('registros1')->with('flash_message', 'registros1 updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        registros1::destroy($id);

        return redirect('registros1')->with('flash_message', 'registros1 deleted!');
    }
}
