<?php

namespace App\Sharp\Experience;

use App\Models\Experience;
use Code16\Sharp\Form\Eloquent\WithSharpFormEloquentUpdater;
use Code16\Sharp\Form\Fields\SharpFormTextField;
use Code16\Sharp\Form\Fields\SharpFormTextareaField;
use Code16\Sharp\Form\Layout\FormLayoutColumn;
use Code16\Sharp\Form\SharpForm;

class Form extends SharpForm
{
    use WithSharpFormEloquentUpdater;

    /**
     * Retrieve a Model for the form and pack all its data as JSON.
     *
     * @param $id
     * @return array
     */
    public function find($id): array
    {
        return $this->transform(
            Experience::findOrFail($id)
        );
    }

    /**
     * @param $id
     * @param array $data
     * @return mixed the instance id
     */
    public function update($id, array $data)
    {
        $experience = $id ? Experience::findOrFail($id) : new Experience;

        $order = optional(Experience::ordered('desc')->first())->order ?? 0;
        $data['order'] = $order + 1;

        $this->save($experience, $data);
    }

    /**
     * @param $id
     */
    public function delete($id)
    {
        Experience::findOrFail($id)->find($id)->delete();
    }

    /**
     * Build form fields using ->addField()
     *
     * @return void
     */
    public function buildFormFields()
    {
        $this->addField(
            SharpFormTextField::make('title')
                ->setLabel('Título')
        )->addField(
            SharpFormTextField::make('company')
                ->setLabel('Empresa ou Lugar')
        )->addField(
            SharpFormTextField::make('date')
                ->setLabel('Datas em que ficou nessa empresa/lugar')
        )->addField(
            SharpFormTextareaField::make('description')
                ->setLabel('Descrição')
                ->setRowCount(10)
        );
    }

    /**
     * Build form layout using ->addTab() or ->addColumn()
     *
     * @return void
     */
    public function buildFormLayout()
    {
        $this->addColumn(6, function(FormLayoutColumn $column) {
            $column->withFields('title', 'company', 'date', 'description');
        });
    }
}
