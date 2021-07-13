<?php

namespace App\Repositories\DiaryNote;

use App\Models\DiaryNote;

class DiaryNoteRepository implements IDiaryNoteRepository
{
    public function getAll()
    {
        //change whereBetween to using whereMonth and give $req->has('date') ini this method
        return DiaryNote::whereBetween('id', [1, 100])->paginate(20);
    }
    public function createDiary($request)
    {
        return DiaryNote::create($request);
    }
    public function getById($id)
    {
        return DiaryNote::find($id);
    }
    public function updateDiary($request, $id)
    {
        $diary = DiaryNote::find($id);
        $diary->update($request);
        return $diary;
    }
    public function deleteDiary($id)
    {
        return DiaryNote::destroy($id);
    }
}
