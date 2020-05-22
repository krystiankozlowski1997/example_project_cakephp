<?php
use Migrations\AbstractMigration;

class CreateProductsTable extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
        $table = $this->table('products_table');
        $table->addColumn('name', 'string', [
            'default' => null,
            'limit' => 80,
            'null' => false,
        ]);
        $table->addColumn('description', 'text', [
           'default' => null,
           'null' => false,
        ]);
        $table->addTimestamps();
        $table->create();
    }
}
