<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Siswa extends Migration
{
    public function up()
    {
        $this->forge->addField([
			'id'          => [
				'type'           => 'INT',
				'constraint'     => 5,
				'unsigned'       => true,
				'auto_increment' => true
			],
			'nis'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255'
			],
			'nama'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255'
			],
			'alamat'      => [
				'type'           => 'VARCHAR',
				'constraint'     => 100,
			],
		]);

		$this->forge->addKey('id', TRUE);

		$this->forge->createTable('siswas', TRUE);
    }

    public function down()
    {
        $this->forge->dropTable('siswas');
    }
}
