<?php

namespace App\Sharp\Social;

use App\Models\Social;
use App\Sharp\Social\Reorder;
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
            EntityListDataContainer::make('name')
                ->setLabel('Name')
        );
    }

    /**
     * Build list layout using ->addColumn()
     *
     * @return void
     */

    public function buildListLayout(): void
    {
        $this->addColumn('name', 12);
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
        return $this->transform(Social::ordered()->get());
    }
}
