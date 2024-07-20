<?php

namespace Tests\Feature;

use App\Models\BoardTitle;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Testing\TestResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;

class BoardTitelTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Testing that a Board Titel can be created
     *
     * @return void
     * @test
     */
    public function test_can_create_boardTitel_without_sorting_index_overlap()
    {
        $this->createAndLoginAsAdmin();

        $name = 'test';
        $sorting_index = 1;

        $response = $this->sendCreateRequest($name, $sorting_index);
        $this->assertEquals(302, $response->getStatusCode());
        $response->assertSessionHasNoErrors();

        $this->assertTrue(BoardTitle::where('name', $name)->where('sorting_index', $sorting_index)->exists());
    }

    /**
     * Testing that a Board Titel can't be created if the sorting index is taken
     *
     * @return void
     * @test
     */
    public function test_wont_create_boardTitel_if_sorting_index_overlap()
    {
        $this->createAndLoginAsAdmin();

        $name1 = 'test1';
        $name2 = 'test2';
        $sorting_index = 1;

        $this->sendCreateRequest($name1, $sorting_index);

        $response = $this->sendCreateRequest($name2, $sorting_index);
        $this->assertEquals(302, $response->getStatusCode());
        $response->assertSessionHasErrors(['msg' => 'Der eksistere allerede en titel med det index']);

        $this->assertFalse(BoardTitle::where('name', $name2)->exists());
    }

    /**
     * Testing that an existing Board Titel can be updated
     *
     * @return void
     * @test
     */
    public function test_can_update_existing_boardTitel()
    {
        $this->createAndLoginAsAdmin();

        $name1 = 'test1';
        $name2 = 'test2';
        $sorting_index = 1;

        $response1 = $this->sendCreateRequest($name1, $sorting_index);
        $this->assertEquals(302, $response1->getStatusCode());
        $response1->assertSessionHasNoErrors();
        $this->assertTrue(BoardTitle::where('name', $name1)->exists());

        $response2 = $this->sendUpdateRequest(BoardTitle::first()->id, $name2, $sorting_index);
        $this->assertEquals(302, $response2->getStatusCode());
        $response2->assertSessionHasNoErrors();


        $this->assertTrue(BoardTitle::where('name', $name2)->exists());
        $this->assertFalse(BoardTitle::where('name', $name1)->exists());
    }

    /**
     * Testing that non-existing Board Titel cannot be updated
     *
     * @return void
     * @test
     */
    public function test_cannot_update_non_existing_boardTitel()
    {
        $this->createAndLoginAsAdmin();

        $titelID = 1;
        $name = 'test1';
        $sorting_index = 1;

        $this->assertNull(BoardTitle::find($titelID));

        $response2 = $this->sendUpdateRequest($titelID, $name, $sorting_index);
        $this->assertEquals(404, $response2->getStatusCode());

        $this->assertFalse(BoardTitle::where('name', $name)->exists());
    }

    /**
     * Testing that an existing Board Titel can be updated
     *
     * @return void
     * @test
     */
    public function test_cannot_update_existing_boardTitel_to_taken_sortingIndex()
    {
        $this->createAndLoginAsAdmin();

        $name1 = 'test1';
        $name2 = 'test2';
        $sorting_index1 = 1;
        $sorting_index2 = 2;

        $response1 = $this->sendCreateRequest($name1, $sorting_index1);
        $this->assertEquals(302, $response1->getStatusCode());
        $response1->assertSessionHasNoErrors();
        $this->assertTrue(BoardTitle::where('name', $name1)->exists());

        $response2 = $this->sendCreateRequest($name2, $sorting_index2);
        $this->assertEquals(302, $response2->getStatusCode());
        $response2->assertSessionHasNoErrors();
        $this->assertTrue(BoardTitle::where('name', $name2)->exists());

        $response3 = $this->sendUpdateRequest(BoardTitle::first()->id, $name2, $sorting_index2);
        $this->assertEquals(302, $response3->getStatusCode());
        $response2->assertSessionHasErrors(['msg' => 'Der eksistere allerede en titel med det index']);

    }

    /**
     * @return void
     */
    public function createAndLoginAsAdmin(): void
    {
        $user = new User();
        $user->name = 'TEST USER';
        $user->email = 'test@test.com';
        $user->password = Hash::make('TEST123');
        $user->verifiedAdmin = true;
        $user->save();
        Auth::login($user);
    }

    /**
     * @param string $name
     * @param int $sorting_index
     * @return TestResponse
     */
    public function sendCreateRequest(string $name, int $sorting_index): TestResponse
    {
        return $this->post(route('admin.boardTitel.create'), array(
            '_token' => csrf_token(),
            'name' => $name,
            'sorting_index' => $sorting_index
        ));
    }

    /**
     * @param int $id
     * @param string $name
     * @param int $sorting_index
     * @return TestResponse
     */
    public function sendUpdateRequest(int $id, string $name, int $sorting_index): TestResponse
    {
        return $this->post(route('admin.boardTitel.update', $id), array(
            '_token' => csrf_token(),
            'name' => $name,
            'sorting_index' => $sorting_index
        ));
    }
}
