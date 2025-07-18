<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StandController extends Controller
{
    //
}

Schema::create('stands', function (Blueprint $table) {
    $table->id();
    $table->string('nom_stand');
    $table->text('description')->nullable();
    $table->foreignId('user_id')->constrained()->onDelete('cascade');
    $table->timestamps();
});



namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Stand;
use Illuminate\Support\Facades\Auth;

class StandController extends Controller
{
    public function show()
    {
        $stand = Auth::user()->stand;
        return view('entrepreneur.stand.mon_stand', compact('stand'));
    }

    public function edit()
    {
        $stand = Auth::user()->stand;
        return view('entrepreneur.stand.edit_stand', compact('stand'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'nom_stand' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);
        $stand = Auth::user()->stand;
        $stand->nom_stand = $request->nom_stand;
        $stand->description = $request->description;
        $stand->save();

        return redirect()->route('mon-stand')->with('success', 'Stand mis à jour.');
}
}





