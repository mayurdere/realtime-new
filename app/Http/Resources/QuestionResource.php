<?php

namespace App\Http\Resources;
namespace App\Model\User;
namespace App\Model\Question;

use Illuminate\Http\Resources\Json\JsonResource;

class QuestionResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    // public function toArray($request)
    // {   //Expose the following parameters when showing questions. Not the category_id, updated_at and other secured stuffs.
    //     return [
    //       'title' => $this->title,
    //       //Instead of slug we are exposing path. Creating the function getPathAttribute for it in Question model.
    //       'path'  => $this->path, 
    //       'body' => $this->body,
    //       'created_at' => $this->created_at,
    //       'user' => $this->user->name //Question Belogs to User Relations
    //     ];
    // }
}
