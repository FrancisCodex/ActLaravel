<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Prompt;
use Illuminate\Http\Request;
use App\Http\Requests\reqPrompt;

class createPrompt extends Controller
{
    public function index(){

        return Prompt::all();
    }

    public function show(string $id){

        $user = Prompt::find($id);

        return $user;
    }

    public function delete(string $id){

        $user = Prompt::find($id);
        $user->delete();
    }

    public function store(reqPrompt $request){

        $validated = $request->validated();
        $prompt = Prompt::create($validated);
        return $prompt;
    }
    
    public function update(reqPrompt $request, string $id)
{
        // Find the prompt by ID
        $user = Prompt::findOrFail($id);

    // Validate the request
    $validated = $request->validated();



    
    $user->prompt = $validated['prompt'];

    $user->save();


    return $user;

}

}
