<?php
class ContactController extends BaseController
{
	public function showContactForm()
	{
			return View::make('contact');
	}
	public function sendMessage()
	{
		if(isset($_POST['submit'])) {
			$name = $_POST['name'];
			$message = $_POST['message'];
			if($name == '' || $message == '') {
				return View::make('contact', array('error' => 'Field is empty'));
			} else {
				return Redirect::route('thanks')->with('name', $name);
			}
		}	
	}
	public function showMessage()
	{
		return View::make('thanks');
	}
}