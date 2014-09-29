<?php

class DatabaseSeeder extends Seeder {

	public function __construct()
	{
		// Get the prefix
		$this->prefix = Config::get('verify::prefix', '');
	}

	public function run()
	{
		// Bring to local scope
		$prefix = $this->prefix;

		$role_id = DB::table($prefix.'roles')->insertGetId([
			'name' => Config::get('verify::super_admin'),
			'level' => 10,
			'created_at' => date('Y-m-d H:i:s'),
			'updated_at' => date('Y-m-d H:i:s')
		]);

        $salt = md5(\Str::random(64) . time());
        $hashed = \Hash::make($salt . 'a52Vaza09@');

		$user_id = DB::table($prefix.'users')->insertGetId([
            'email' => 'j.murray@avaza.co',
            'password' => $hashed,
			'salt' => $salt,
			'verified' => 1,
			'disabled' => 0,
			'created_at' => date('Y-m-d H:i:s'),
			'updated_at' => date('Y-m-d H:i:s')
		]);

		DB::table($prefix.'role_user')->insert([
			'role_id' => $role_id,
			'user_id' => $user_id,
			'created_at' => date('Y-m-d H:i:s'),
			'updated_at' => date('Y-m-d H:i:s')
		]);
	}
}