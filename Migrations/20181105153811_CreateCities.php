<?php
use Migrations\AbstractMigration;

class CreateCities extends AbstractMigration
{
    public $autoId = false;

    public function change()
    {
        $table = $this->table('cities');
        $table->addColumn('id', 'uuid', [
            'default' => null,
            'null' => false
        ]);
        $table->addColumn('name', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => false
        ]);
        $table->addColumn('state_id', 'uuid', [
            'default' => null,
            'null' => false
        ]);

        $table->addPrimaryKey('id');
        $table->create();
    }
}
