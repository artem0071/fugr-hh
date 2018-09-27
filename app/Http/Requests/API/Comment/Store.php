<?php

namespace App\Http\Requests\API\Comment;

use App\Http\Resources\CommentResource;
use App\Models\Comment;
use Illuminate\Foundation\Http\FormRequest;

class Store extends FormRequest
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
        return [
            'name' => 'required|string|min:1|max:128',
            'text' => 'required|string|max:1024'
        ];
    }

    public function execute()
    {
        $comment = Comment::create([
            'name' => $this->get('name'),
            'text' => $this->get('text')
        ]);

        return new CommentResource($comment);
    }
}
