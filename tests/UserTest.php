<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class UserTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {

        $this->visit(route('adminconference.home'))->click('test-button');
    }
    use DatabaseTransactions;

    protected $user;
    protected $password = 'gth';

    public function get_user()
    {
        if ($this->user) return;

        $this->user = factory(App\User::class)->create([
            'email' => 'john@example.com',
            'username' => 'gth',
            'name' => 'testse',
            'status' => 'member',
            'password' => bcrypt($this->password),
        ]);
    }

    /** @test */
    public function a_user_can_successfully_log_in()
    {
        $this->get_user();
        $this->visit(route('adminconference.home'));
        $this->click('test-button');
        $this->type($this->user->username, 'username');
        $this->type($this->password, 'password');
        $this->press('Login');
        $this->seePageIs(route('/homecon'));
    }

    /** @test */
    public function a_user_receives_errors_for_wrong_login_credentials()
    {
        $this->visit(route('users.getLogin'));
        $this->type($this->user->email, 'email');
        $this->type('invalid-password', 'password');
        $this->press('Login');
        $this->see('These credentials do not match our records.');
    }

    /** @test */
    public function a_user_is_redirected_to_dashboard_if_logged_in_and_tries_to_access_login_page()
    {
        $this->get_user();

        $this->actingAs($this->user);

        $this->visit(route('login'));
        $this->seePageIs(route('dashboard'));
    }

    /** @test */
    public function a_user_is_redirected_to_login_page_if_not_logged_in_and_trying_to_access_dashboard()
    {
        $this->get_user();
        $this->visit(route('dashboard'));
        $this->seePageIs(route('login'));
    }
}
