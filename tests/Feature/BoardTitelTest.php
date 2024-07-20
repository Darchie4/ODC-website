<?php

namespace Tests\Unit;

use App\Models\BoardTitle;
use Illuminate\Support\Facades\Session;
use Tests\TestCase;

class BoardTitelTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     * @test
     */
    public function create_without_sorting_index_overlap()
    {
        $name = 'test';
        $sorting_index = 1;

        Session::start();
        $response = $this->call('POST', route('admin.boardTitel.create', array(
            '_token' => csrf_token(),
            'name' => $name,
            'sorting_index' => $sorting_index
        )));
        $this->assertEquals(302, $response->getStatusCode());
        $this->assertTrue(BoardTitle::where('name', $name)->where('sorting_index', $sorting_index)->exists());
    }
}
