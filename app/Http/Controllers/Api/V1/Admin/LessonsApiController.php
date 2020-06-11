<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreLessonRequest;
use App\Http\Requests\UpdateLessonRequest;
use App\Http\Resources\Admin\LessonResource;
use App\Lesson;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\Response;

class LessonsApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('lesson_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new LessonResource(Lesson::with(['class', 'teacher'])->get());
    }

    public function store(StoreLessonRequest $request)
    {
        $lesson = Lesson::create($request->all());

        return (new LessonResource($lesson))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(Lesson $lesson)
    {
        abort_if(Gate::denies('lesson_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new LessonResource($lesson->load(['group', 'teacher']));
    }

    public function update(UpdateLessonRequest $request, Lesson $lesson)
    {
        $lesson->update($request->all());

        return (new LessonResource($lesson))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(Lesson $lesson)
    {
        abort_if(Gate::denies('lesson_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $lesson->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function getLessons(){

        for ($i = 1; $i < 7; $i++) {
            $lessons = DB::table('lessons')
                ->select('lessons.id', 'lessons.weekday', 'users.name', 'users.surname', 'courses.name as subject', 'lessons.start_time', 'lessons.end_time')
                ->join('courses', 'courses.id', '=', 'lessons.course_id')
                ->join('users', 'users.id', '=', 'lessons.teacher_id')
                ->where('lessons.weekday', '=', $i)
                ->orderBy('lessons.start_time')->get();
            $data[$i] = $lessons;
        }
        return response()->json($data, 200);
    }
}
