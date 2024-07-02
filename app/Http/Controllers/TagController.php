<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public function index()
    {
        $tags = Tag::all();
        return view('tags.index', compact('tags'));
    }

    public function create()
    {
        return view('tags.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
        ]);

        Tag::create($validatedData);

        return redirect()->route('tags.index')->with('message', 'Tag creato');
    }

    public function edit(Tag $tag)
    {
        return view('tags.edit', compact('tag'));
    }

    public function update(Request $request, Tag $tag)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $tag->update($validatedData);
        return redirect()->route('tags.index')->with('message', 'Tag modificato');
    }

    public function destroy(Tag $tag)
    {
        $tag->articles()->detach();
        $tag->delete();
        return redirect()->route('tags.index')->with('message', 'Tag Cancellato');
    }
}
