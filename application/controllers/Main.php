<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
	}
	public function my()
	{
	$this->load->view('idee');
	}
    public function insertPost($content) {
        // вставляем в таблицу массив с данными, в качестве имени для каждого элемента массива указываем имя столбца куда нужно записать значение
        $this->db->insert('myidee_table', array('email' => $email, 'name'  => $name, 'review' => $review));
        // возвращаем id последнего вставленного элемента
        return $this->db->insert_id();
    }
	public function add_post() {
	// подключаем модель
	$this->load->model('myidee_data');
	// записываем содержмое переданное методом post в переменную
	$post = $this->input->post();
	$id = $this->myidee_data->insertPost($post['email']);
	// выводим результат в виде json строки
	$this->output->set_output(
		json_encode(
			array(
				'status' => '1',
				'id' => $id
			)
		)
	);	
	}
	

}