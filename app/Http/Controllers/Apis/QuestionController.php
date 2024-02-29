<?php

namespace App\Http\Controllers\Apis;

use App\Http\Controllers\Controller;
use App\Http\Requests\Apis\CreateQuestionRequest;
use App\Http\Resources\QuestionResource;
use App\Http\Responses\APIResponse;
use App\Models\BookUnit;
use Exception;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    //
    public function add_question(CreateQuestionRequest $request) {
    try {
        $data = $request->validated();
        $book_unit = BookUnit::find($data['unit_id']);
        $question = $book_unit->questions()->create($data);
        return APIResponse::CreatedSuccessfully(QuestionResource::make($question), 'Question Created Successfuly');
    } catch (Exception $exception) {
        return APIResponse::ErrorsResponse(__FUNCTION__, $exception->getMessage());
    }
        
    }
}
