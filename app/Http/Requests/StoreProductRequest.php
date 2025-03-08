<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string',
            'category_id' => 'required|integer|exists:categories,id',
            'description' => 'string|nullable',
            'price' => 'required|regex:/^\d+[,.]?\d{0,2}$/',
        ];
    }

    protected function prepareForValidation(): void
    {
        $originPrice = $this->get('price');
        if (!empty($originPrice)) {
            $fixedPrice = (float)str_replace(',', '.', $originPrice);
            $this->request->set("price", $fixedPrice);
        }
    }

}
