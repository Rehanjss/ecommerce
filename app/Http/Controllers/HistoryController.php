<?php

namespace App\Http\Controllers;

use App\Models\History;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use Illuminate\Support\Facades\Auth;

class HistoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }     

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $histories = History::where("user_id", "=", Auth::user()->id)->paginate();

        return view('history.index', compact('histories'))
            ->with('i', ($request->input('page', 1) - 1) * $histories->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $history = new History();

        return view('history.create', compact('history'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        History::create($request->validated());

        return Redirect::route('histories.index')
            ->with('success', 'History created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $history = History::find($id);        

        return view('history.show', compact('history'));
    }

}
