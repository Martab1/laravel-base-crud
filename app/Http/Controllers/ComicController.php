<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comic;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       // get comics from db
       $comics = Comic::all();
       // $comics = Comic::OrderBy('id' ,'asc');

       // view
       return view('comics.index', compact('comics'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // PRENDO DATI CREATI 
        $data = $request->all();

        // INSERT DB
        $new_comic = new Comic();

        // popolo con i dati del create
        // ***** A 
        // $new_comic->title = $data['title'];
        // $new_comic->description = $data['description'];
        // $new_comic->price = $data['price'];
        // $new_comic->type = $data['type'];
        // $new_comic->series = $data['series'];
        // $new_comic->sale_date = $data['sale_date'];
        // $new_comic->thumb = $data['thumb'];

        //****  B asseganzione di massa 
        $new_comic->fill($data);   // !!!!!!! NEL MODEL COMIC DICHIARARE I FILLABLE!!!!!!
        //save 
        $new_comic->save();

        //REDIRECT to pasta detail (show)
        return redirect()->route('comics.show', $new_comic->id);

    } 

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
        /**
         * GET SINGLE COMIC BY ID
         **/ 

        // $comic = Comic::find($id);  = public function show(Comic $comic)    (short create instance)

       /**
        * RETURN VIEW + CONTROL ERROR 404
        **/ 
       if($comic){
           return view('comics.show', compact('comic'));
       }

       // 404
       abort(404);
      
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        // GET COMIC BY id
        // $comic = Comic::find($id);

        if($comic){
            return view('comics.edit', compact('comic'));
        }
 
        // 404
        abort(404);

        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {   
        //salvo dati dell'edit
        $data = $request->all();
        // get comic by id
        // $comic = Comic::find($id);
        //modifica e salva quello specifico corrispondente 
        $comic->update($data);    // !!!!! FILLABLE IN MODEL !!!!!
        // redirect
        return redirect()->route('comics.show', $comic->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comic = comic::find($id);
        $comic->delete();

        return redirect()->route('comics.index')->with('deleted', $comic->title);

    }
}
