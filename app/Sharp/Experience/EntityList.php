<?php

namespace App\Sharp\Experience;

use App\Models\Experience;
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
    public function buildListDataContainers()
    {
        $this->addDataContainer(
            EntityListDataContainer::make('title')
                ->setLabel('Título')
        )->addDataContainer(
            EntityListDataContainer::make('company')
                ->setLabel('Empresa/Lugar')
        )->addDataContainer(
            EntityListDataContainer::make('date')
                ->setLabel('Data')
        );
    }

    /**
    * Build list layout using ->addColumn()
    *
    * @return void
    */

    public function buildListLayout()
    {
        $this->addColumn('title', 4)
        ->addColumn('company', 4)
        ->addColumn('date', 4);
    }

    /**
    * Build list config
    *
    * @return void
    */
    public function buildListConfig()
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
        return $this->transform(Experience::all());
    }
}
