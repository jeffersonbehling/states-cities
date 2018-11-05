<?php
use Migrations\AbstractMigration;

class CreateStates extends AbstractMigration
{
    public $autoId = false;

    public function change()
    {
        $table = $this->table('states');
        $table->addColumn('id', 'uuid', [
            'default' => null,
            'null' => false
        ]);
        $table->addColumn('name', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => false
        ]);
        $table->addColumn('uf', 'string', [
            'default' => null,
            'limit' => 2,
            'null' => false
        ]);

        $table->addPrimaryKey('id');
        $table->create();
    }
}
