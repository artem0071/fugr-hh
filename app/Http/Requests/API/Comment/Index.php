<?php

namespace App\Http\Requests\API\Comment;

use App\Http\Resources\CommentResource;
use App\Models\Comment;
use Illuminate\Foundation\Http\FormRequest;

class Index extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [];
    }

    public function execute()
    {
        $comments = Comment::all();

        return CommentResource::collection($comments);
    }
}
