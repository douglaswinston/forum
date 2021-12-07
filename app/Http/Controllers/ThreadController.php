<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Thread;

class ThreadController extends Controller
{
    private $thread;

    public function __construct(Thread $thread)
    {
        $this->thread = $thread;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $threads = $this->thread->orderby('created_at', 'DESC')->paginate(10);

        return view('threads.index', compact('threads'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('threads.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $this->thread->create($request->all());

            dd('Tópico criado com sucesso!');
        } catch (\Exception $e) {
            dd($e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  string  $thread
     * @return \Illuminate\Http\Response
     */
    public function show($thread)
    {
        $thread = $this->thread->whereslug($thread)->first();
        return view('threads.show', compact('thread'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  string  $thread
     * @return \Illuminate\Http\Response
     */
    public function edit($thread)
    {
        $thread = $this->thread->whereslug($thread)->first();
        return view('threads.edit', compact('thread'));
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
        try {
            $trhead = $this->thread->find($id);
            $trhead->update($request->all());

            dd('Tópico atualizado com sucesso!');
        } catch (\Exception $e) {
            dd($e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($thread)
    {
        try {
            $trhead = $this->thread->whereslug($thread)->first();
            $trhead->delete();

            dd('Tópico removido com sucesso!');
        } catch (\Exception $e) {
            dd($e->getMessage());
        }
    }
}
