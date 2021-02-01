<?php

namespace App\Http\Controllers;

use App\Document;
use App\Http\Requests\SaveDocumentRequest;
use App\Http\Traits\UserTrait;
use App\Mail\MessageReceived;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class DocumentsController extends Controller
{
	use UserTrait;

    public function __construct()
    {
        $this->middleware('auth');
    }

	public function index()
    {
        // latest utiliza el campo created_at por defecto, si no lo queremos ordenar por ese campo, se debe pasar por parametro el que queremos utilizar
        $docs = Document::latest()->paginate();
        return view('documents.index', compact('docs'));
    }

    public function create()
    {
    	$users = $this->getAll();
        return view('documents.create', [
                'document' => new Document,
                'users' => $users
            ]);
    }

    public function store(SaveDocumentRequest $request)
    {
        date_default_timezone_set('America/Santiago');
        // dd($request->file('archive')->store('documents'));
        $doc = Document::create(request()-> only('ndocument', 'description', 'archive', 'user_id'));
        $doc->archive = request()->file('archive')->store('public');
        $doc->save();
        //Enviar notificacion correo
        // Mail::to('cynthiagutierrezvargas@gmail.com')->queue(new MessageReceived($request->validated()));
        // return new MessageReceived($fields);
        return redirect()->route('document.index')->with('status', 'Documento creado.');
    }

    public function destroy($id)
    {
    	$doc = Document::findOrFail($id);
    	Storage::disk('public')->delete(Str::substr($doc->archive, 7));
        $doc->delete();
        //User::destroy($user->id);
        return redirect()->route('document.index')->with('status', 'Documento eliminado.');
    }

    public function update(Document $document)
    {
		date_default_timezone_set('America/Santiago');
		$document->updated_at = date('Y-m-d G:i:s');
        $document->update(request()-> only(
        	'ndocument',
        	'description',
        	'archive',
        	'user_id',
        	'updated_at'));
        // $doc = Document::update(request()-> only(
        // 	'ndocument',
        // 	'description',
        // 	'archive',
        // 	'user_id',
        // 	'updated_at'));
        // $doc->updated_at = date('Y-m-d G:i:s');
        // $doc->save();
        return redirect()->route('document.index')->with('status', 'Documento actualizado.');
    }

    public function edit($id)
    {
    	$doc = Document::findOrFail($id);
    	// obtener lista usuarios
    	$users = $this->getAll();
    	return view('documents.edit', [
            'document' => $doc,
            'users' => $users
        ]);
    }

}
