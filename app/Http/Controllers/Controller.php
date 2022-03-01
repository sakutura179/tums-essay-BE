<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Validation\ValidationException as ValidationException;
use Illuminate\Http\Exceptions\HttpResponseException as HttpResponseException;
use Illuminate\Http\JsonResponse as JsonResponse;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function validate(
        Request $request,
        array $rules,
        array $messages = [],
        array $customAttributes = []
    ) {
        $validator = $this->getValidationFactory()
            ->make(
                $request->all(),
                $rules,
                $messages,
                $customAttributes
            );
        if ($validator->fails()) {
            $errors = (new ValidationException($validator))
                ->errors();
            throw new HttpResponseException(response()->json([
                'message' => false,
                'errors' => $errors
            ], JsonResponse::HTTP_UNPROCESSABLE_ENTITY));
        }
    }
}
