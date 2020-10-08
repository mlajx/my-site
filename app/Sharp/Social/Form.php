<?php

namespace App\Sharp\Social;

use App\Models\Social;
use Code16\Sharp\Form\Eloquent\Uploads\Transformers\SharpUploadModelFormAttributeTransformer;
use Code16\Sharp\Form\Eloquent\WithSharpFormEloquentUpdater;
use Code16\Sharp\Form\Fields\SharpFormTextField;
use Code16\Sharp\Form\Fields\SharpFormUploadField;
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
        return $this->setCustomTransformer(
            "icon",
            new SharpUploadModelFormAttributeTransformer()
        )->transform(
            Social::with('icon')->findOrFail($id)
        );
    }

    /**
     * @param $id
     * @param array $data
     * @return mixed the instance id
     */
    public function update($id, array $data)
    {
        $social = $id ? Social::findOrFail($id) : new Social;

        if(!$id) {
            $order = optional(Social::ordered('desc')->first())->order ?? 0;
            $data['order'] = $order + 1;
        }

        $this->save($social, $data);
    }

    /**
     * @param $id
     */
    public function delete($id)
    {
        Social::findOrFail($id)->find($id)->delete();
    }

    /**
     * Build form fields using ->addField()
     *
     * @return void
     */
    public function buildFormFields()
    {
        $this->addField(
            SharpFormUploadField::make('icon')
                ->setLabel('Ícone')
                ->setMaxFileSize(1)
                ->setFileFilter(['.svg'])
                ->setStorageBasePath("data/socials")
        )->addField(
            SharpFormTextField::make('name')
                ->setLabel('Nome')
        )->addField(
            SharpFormTextField::make('link')
                ->setLabel('Link')
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
            $column->withFields('icon', 'name', 'link');
        });
    }
}
