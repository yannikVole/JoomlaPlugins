<?php
class UsersApiResourceLogin extends ApiResource
{
    public function get()
    {
        $result = new \stdClass;
        $result->id = 45;
        $result->name = "John Doe"

		$this->plugin->setResponse( $result );
	}

    public function post()
    {
        // Add your code here

        $this->plugin->setResponse( $result );
    }
}
?>