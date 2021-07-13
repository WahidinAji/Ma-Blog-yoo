<?php

namespace App\Repositories\DiaryNote;

interface IDiaryNoteRepository
{
    public function getAll();
    public function createDiary($request);
    public function getById($id);
    public function updateDiary($request,$id);
    public function deleteDiary($id);
}
