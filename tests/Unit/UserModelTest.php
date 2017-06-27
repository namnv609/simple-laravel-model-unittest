<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class UserModelTest extends TestCase
{
    public function testHiddenEmailDomain()
    {
        $user = factory(\App\Models\User::class)->make();
        $correctEmail = "namnv609@" . str_repeat("*", strlen("gmail.com"));

        $this->assertEquals($user->email, $correctEmail);
    }
}
