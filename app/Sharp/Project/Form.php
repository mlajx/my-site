<?php

namespace App\Sharp\Project;

use App\Models\Project;
use Code16\Sharp\Form\Eloquent\WithSharpFormEloquentUpdater;
use Code16\Sharp\Form\Fields\SharpFormTextField;
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
            Project::findOrFail($id)
        );
    }

    /**
     * @param $id
     * @param array $data
     * @return mixed the instance id
     */
    public function update($id, array $data)
    {
        $project = $id ? Project::findOrFail($id) : new Project;

        if (!$id) {
            $order = optional(Project::ordered('desc')->first())->order ?? 0;
            $data['order'] = $order + 1;
        }

        $this->save($project, $data);

        return $project->id;
    }

    /**
     * @param $id
     */
    public function delete($id): void
    {
        Project::findOrFail($id)->find($id)->delete();
    }

    /**
     * Build form fields using ->addField()
     *
     * @return void
     */
    public function buildFormFields(): void
    {
        $this->addField(
            SharpFormTextField::make('title')
                ->setLocalized()
                ->setLabel('Título')
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
    public function buildFormLayout(): void
    {
        $this->addColumn(6, function (FormLayoutColumn $column) {
            $column->withFields('title', 'link');
        });
    }

    public function getDataLocalizations()
    {
        return ["pt-br", "en"];
    }
}
