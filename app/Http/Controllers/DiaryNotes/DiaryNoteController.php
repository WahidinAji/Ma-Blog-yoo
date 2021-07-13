<?php

namespace App\Http\Controllers\DiaryNotes;

use App\Http\Controllers\Controller;
use App\Http\Requests\DiaryNoteRequest;
use App\Models\DiaryNote;
use App\Repositories\DiaryNote\DiaryNoteRepository;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class DiaryNoteController extends Controller
{
    protected $diary;
    public function __construct(DiaryNoteRepository $diaryNoteRepository)
    {
        $this->diary = $diaryNoteRepository;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $diaryNotes = $this->diary->getAll();
        return \response()->json([
            'message' => 'success',
            'data' => $diaryNotes
        ], Response::HTTP_OK);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DiaryNoteRequest $request)
    {
        // $diary = new DiaryNote();
        // $diary->title = $request->title;
        // $diary->context = $request->context;
        // $diary->accent = $request->accent;
        // $diary->english = $request->english;
        // $diary->indonesia = $request->indonesia;
        // $diary->save();
        $diary = $this->diary->createDiary($request->all());
        return \response()->json([
            'message' => 'success',
            'data' => $diary
        ], Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $diary = $this->diary->getById($id);
        if (empty($diary)) {
            return \response()->json([
                'message' => 'not found',
                'data' => null
            ], Response::HTTP_NOT_FOUND);
        }
        return \response()->json([
            'message' => 'success',
            'data' => $diary
        ], Response::HTTP_OK);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(DiaryNoteRequest $request, $id)
    {
        $diary = $this->diary->updateDiary($request->all(), $id);
        return \response()->json([
            'message' => 'success',
            'data' => $diary
        ], Response::HTTP_OK);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->diary->deleteDiary($id);
        return \response()->json([
            'message' => 'success',
        ], Response::HTTP_OK);
    }
}
