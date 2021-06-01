<?php

namespace App\Sharp\Project;

use App\Models\Project;
use App\Sharp\Project\Reorder;
use Code16\Sharp\EntityList\Containers\EntityListDataContainer;
use Code16\Sharp\EntityList\EntityListQueryParams;
use Code16\Sharp\EntityList\SharpEntityList;

class EntityList extends SharpEntityList
{
    /**
     * Build list containers using ->addDataContainer()
     *
     * @return void
     */
    public function buildListDataContainers(): void
    {
        $this->addDataContainer(
            EntityListDataContainer::make('title')
                ->setLabel('Título')
        );
    }

    /**
     * Build list layout using ->addColumn()
     *
     * @return void
     */

    public function buildListLayout(): void
    {
        $this->addColumn('title', 12);
    }

    /**
     * Build list config
     *
     * @return void
     */
    public function buildListConfig(): void
    {
        $this->setInstanceIdAttribute('id')
            ->setReorderable(new Reorder());
    }

    /**
     * Retrieve all rows data as array.
     *
     * @param EntityListQueryParams $params
     * @return array
     */
    public function getListData(EntityListQueryParams $params)
    {
        return $this->setCustomTransformer(
            'title',
            function ($title, $project) {
                return $project->title;
            }
        )
            ->transform(Project::ordered()->get());
    }
}
