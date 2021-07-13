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
}
