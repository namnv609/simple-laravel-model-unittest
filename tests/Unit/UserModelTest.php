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

        $this->assertEquals($user->email, "namnv609**********");
    }
}
