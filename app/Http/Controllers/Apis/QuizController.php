<?php

namespace App\Http\Controllers\Apis;

use App\Http\Controllers\Controller;
use App\Http\Requests\Apis\CreateQuizRequest;
use App\Http\Resources\QuizResourse;
use App\Http\Responses\APIResponse;
use App\Models\Gradeclass;
use App\Models\Question;
use App\Models\Quize;
use App\Models\UserQuestionQuizeAnswer;
use App\Models\UserQuize;
use Exception;
use Illuminate\Http\Request;

class QuizController extends Controller
{
    //
    public function createQuiz(CreateQuizRequest $request)
    {
        try {
            $data = $request->validated();
            $quiz = Quize::create(['name' => 'Quize']);
            $quiz->questions()->attach($data['questions']);
            foreach ($data['classes'] as $value) {
                $class = Gradeclass::find($value);
                if ($class->users->count() > 0) {
                    foreach ($class->users as $user) {
                        $user->quizes()->sync($quiz);
                    }
                }
            }
            return APIResponse::Success('Success');
        } catch (Exception $exception) {
            return APIResponse::ErrorsResponse(__FUNCTION__, $exception->getMessage());
        }
    }
    public function listStudentQuiz()
    {
        try {
            return APIResponse::Success(auth('api')->user()->quizes);
        } catch (Exception $exception) {
            return APIResponse::ErrorsResponse(__FUNCTION__, $exception->getMessage());
        }
    }
    public function getQuiz(Quize $quiz)
    {
        try {
            return APIResponse::Success($quiz);
        } catch (Exception $exception) {
            return APIResponse::ErrorsResponse(__FUNCTION__, $exception->getMessage());
        }
    }
    public function submitQuiz(Request $request)
    {
        try {
            $quiz = UserQuize::where('quize_id', $request->quiz_id)->first();
            $data = $request->userAnswers;
            foreach ($data as $key => $value) {
                $data[$key] = UserQuestionQuizeAnswer::updateOrCreate([
                    'user_id' => auth('api')->id(),
                    'quize_id'=> $request->quiz_id,
                    'question_id' => $key],
                    [
                     'answers' => $value

                    ]);
            }
            $quiz->update(['submited' => true]);
            return APIResponse::Success([$data, $quiz]);
        } catch (Exception $exception) {
            return APIResponse::ErrorsResponse(__FUNCTION__, $exception->getMessage());
        }
    }
}
