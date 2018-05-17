<?php
/**
 * Part of ci-phpunit-test
 *
 * @author     Kenji Suzuki <https://github.com/kenjis>
 * @license    MIT License
 * @copyright  2015 Kenji Suzuki
 * @link       https://github.com/kenjis/ci-phpunit-test
 */

class Welcome_test extends TestCase
{
	public function test_index()
	{
		$output = $this->request('GET', 'welcome/index');
		$this->assertContains('<title>Gienz Bird Farm</title>', $output);
	}
        
        public function test_login_user()
        {
            $output = $this->request(                                           //
                                                                                //
			'POST',                                                 // Kodingan test
			'LoginSignup/do_login',                                 // yang ini itu ceritanya
				[                                               // masukin inputan
					'email' => 'yasin.awb@gmail.com',       // berupa email dan password
					'password' => '123'                     // jadi ceritanya mau demoin login
				]                                               //
		);                                                              //
		$this->assertEquals('login', $_SESSION['status']); //Kodingan ini buat ngecek udah login apa belom caranya ngecek sessionnya
                $this->assertRedirect('Welcome/homelogin');// Kalo ini kan kalo login itu redirect ke suatu link, nah ini ngecek bener apa engga link yang dituju
        }
        
        public function test_login_user_salah_password()
        {
            $output = $this->request(                                           //
                                                                                //
			'POST',                                                 // Kodingan test
			'LoginSignup/do_login',                                 // yang ini itu ceritanya
				[                                               // masukin inputan
					'email' => 'yasin.awb@gmail.com',       // berupa email dan password
					'password' => '122'                     // jadi ceritanya mau demoin login
				]                                               //
		);                                                              //
		$this->assertEquals('', $_SESSION['status']); //Kodingan ini buat ngecek udah login apa belom caranya ngecek sessionnya
                $this->assertRedirect('Welcome/loginerr');// Kalo ini kan kalo login itu redirect ke suatu link, nah ini ngecek bener apa engga link yang dituju
        }
        
        public function test_login_user_gaada_isinya()
        {
            $output = $this->request(                                           //
                                                                                //
			'POST',                                                 // Kodingan test
			'LoginSignup/do_login',                                 // yang ini itu ceritanya
				[                                               // masukin inputan
					'email' => '',       // berupa email dan password
					'password' => ''                     // jadi ceritanya mau demoin login
				]                                               //
		);                                                              //
		$this->assertEquals('', $_SESSION['status']); //Kodingan ini buat ngecek udah login apa belom caranya ngecek sessionnya
                $this->assertRedirect('Welcome/loginerr');// Kalo ini kan kalo login itu redirect ke suatu link, nah ini ngecek bener apa engga link yang dituju
        }
        
        public function test_login_user_gaada_email()
        {
            $output = $this->request(                                           //
                                                                                //
			'POST',                                                 // Kodingan test
			'LoginSignup/do_login',                                 // yang ini itu ceritanya
				[                                               // masukin inputan
					'email' => '',       // berupa email dan password
					'password' => '123'                     // jadi ceritanya mau demoin login
				]                                               //
		);                                                              //
		$this->assertEquals('', $_SESSION['status']); //Kodingan ini buat ngecek udah login apa belom caranya ngecek sessionnya
                $this->assertRedirect('Welcome/loginerr');// Kalo ini kan kalo login itu redirect ke suatu link, nah ini ngecek bener apa engga link yang dituju
        }
        
        public function test_login_user_gaada_password()
        {
            $output = $this->request(                                           //
                                                                                //
			'POST',                                                 // Kodingan test
			'LoginSignup/do_login',                                 // yang ini itu ceritanya
				[                                               // masukin inputan
					'email' => 'yasin.awb@gmail.com',       // berupa email dan password
					'password' => ''                     // jadi ceritanya mau demoin login
				]                                               //
		);                                                              //
		$this->assertEquals('', $_SESSION['status']); //Kodingan ini buat ngecek udah login apa belom caranya ngecek sessionnya
                $this->assertRedirect('Welcome/loginerr');// Kalo ini kan kalo login itu redirect ke suatu link, nah ini ngecek bener apa engga link yang dituju
        }     
        
        public function test_login_admin()
        {
            $output = $this->request(                                           //
                                                                                //
			'POST',                                                 // Kodingan test
			'LoginSignup/do_login',                                 // yang ini itu ceritanya
				[                                               // masukin inputan
					'email' => 'gienzbirdfarm@gmail.com',       // berupa email dan password
					'password' => 'momomerdeka1905'                     // jadi ceritanya mau demoin login
				]                                               //
		);                                                              //
		$this->assertEquals('admin', $_SESSION['status']); //Kodingan ini buat ngecek udah login apa belom caranya ngecek sessionnya
                $this->assertRedirect('Welcome/admin');// Kalo ini kan kalo login itu redirect ke suatu link, nah ini ngecek bener apa engga link yang dituju
        } 
        
        public function test_login_admin_gaada_isinya()
        {
            $output = $this->request(                                           //
                                                                                //
			'POST',                                                 // Kodingan test
			'LoginSignup/do_login',                                 // yang ini itu ceritanya
				[                                               // masukin inputan
					'email' => '',       // berupa email dan password
					'password' => ''                     // jadi ceritanya mau demoin login
				]                                               //
		);                                                              //
		$this->assertEquals('', $_SESSION['status']); //Kodingan ini buat ngecek udah login apa belom caranya ngecek sessionnya
                $this->assertRedirect('Welcome/loginerr');// Kalo ini kan kalo login itu redirect ke suatu link, nah ini ngecek bener apa engga link yang dituju
        }    
        
        public function test_login_admin_gaada_email()
        {
            $output = $this->request(                                           //
                                                                                //
			'POST',                                                 // Kodingan test
			'LoginSignup/do_login',                                 // yang ini itu ceritanya
				[                                               // masukin inputan
					'email' => '',       // berupa email dan password
					'password' => 'momomerdeka1905'                     // jadi ceritanya mau demoin login
				]                                               //
		);                                                              //
		$this->assertEquals('', $_SESSION['status']); //Kodingan ini buat ngecek udah login apa belom caranya ngecek sessionnya
                $this->assertRedirect('Welcome/loginerr');// Kalo ini kan kalo login itu redirect ke suatu link, nah ini ngecek bener apa engga link yang dituju
        }   
        
        public function test_login_admin_gaada_password()
        {
            $output = $this->request(                                           //
                                                                                //
			'POST',                                                 // Kodingan test
			'LoginSignup/do_login',                                 // yang ini itu ceritanya
				[                                               // masukin inputan
					'email' => 'gienzbirdfarm@gmail.com',       // berupa email dan password
					'password' => ''                     // jadi ceritanya mau demoin login
				]                                               //
		);                                                              //
		$this->assertEquals('', $_SESSION['status']); //Kodingan ini buat ngecek udah login apa belom caranya ngecek sessionnya
                $this->assertRedirect('Welcome/loginerr');// Kalo ini kan kalo login itu redirect ke suatu link, nah ini ngecek bener apa engga link yang dituju
        }
}
