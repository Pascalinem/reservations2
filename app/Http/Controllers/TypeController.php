<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Type;

class TypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $types = Type::all();
        return view('type.index',['types' => $types, 'resource' => 'types']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('type.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Validation des données du formulaire
        $validated = $request->validate(['type' => 'required|max:60']);

        Type::Create($validated);

        return redirect()->route('type_index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $type = Type::find($id);
        return view('type.show',['type' => $type]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $type = Type::find($id);

        return view('type.edit', ['type' => $type]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //Validation des données du formulaire
        $validated = $request->validate(['type' => 'required|max:60']);

        //le formulaire a été validé, nous récupérons l'artiste à modifier
        $type = Type::find($id);

        //Mise à jour des données modifiées et sauvegarde dans la base de données
        $type->update($validated);

        return view('type.show', ['type' => $type]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $type = Type::find($id);

        //erreur car il y a une constrainte d'intégrité sur artist_type
        //voir si on modifie la constainte ou si on laisse comme ça
        try {
            $type->delete();
            return redirect()->route('type_index');
          
        } catch (\Illuminate\Database\QueryException $e) {  
            //var_dump($e->errorInfo);
            $message = "Le type ne peut pas être supprimé car il est déjà utilisé";
            return back()->withInput(array('message' => $message));
        }

        
    }
}
