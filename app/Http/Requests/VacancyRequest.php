<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VacancyRequest extends FormRequest
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

        $vacancy = $this->route()->parameter('vacancy');

        $rules = [
            'name' => 'required',
            'country_id' => 'required',
            'slug' => 'required|unique:vacancies',
            'status' => 'required|in:"Borrador","Publicar"'
        ];

        // Si el usuario guarda como borrador, solo le obligará a llenar ciertos campos.

        if ($vacancy) {
            $rules['slug'] = 'required|unique:vacancies,slug,' . $vacancy->id;
        }

        if ($this->status == 'Publicar') {
            $rules = array_merge($rules, [
                'category_id' => 'required',
                'tecnologies' => 'required',
                'description' => 'required',
                'salary_id' => 'required',
                'currency_id' => 'required',
                'experience_id' => 'required',
                'tecnologies' => 'required',
                'end' => 'required'
            ]);
            // array_merge fusiona dos arrays
            // Si el usuario escoge el status publicar todos los campos serán obligatorios.
        }

        return $rules;
    }
}
