<?php

namespace App\Http\Requests\Evacuee;

use Illuminate\Foundation\Http\FormRequest;

class UpdateEvacueeRequest extends FormRequest
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
        $maxCapacity = request()->max_capacity;
        $maleCount = request()->male_count;
        $femaleCount = request()->female_count;
        $subTotal = $maleCount + $femaleCount;
        if ($subTotal > $maxCapacity) {
            $total = $maxCapacity;
        } else {
            $total = $maxCapacity - $subTotal;
        }
        return [
            'female_count' => ['min:'.$total],
            'male_count' => ['min:'.$total],
        ];
    }
}
