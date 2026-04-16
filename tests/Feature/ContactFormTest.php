<?php

namespace Tests\Feature;

use App\Http\Requests\ContactRequest;
use Tests\TestCase;

class ContactFormTest extends TestCase
{
    public function test_home_page_is_reachable(): void
    {
        $response = $this->get(route('home'));

        $response->assertStatus(200);
    }

    public function test_contact_request_has_expected_rules(): void
    {
        $request = new ContactRequest();

        $this->assertArrayHasKey('name', $request->rules());
        $this->assertArrayHasKey('email', $request->rules());
        $this->assertArrayHasKey('message', $request->rules());
    }
}
