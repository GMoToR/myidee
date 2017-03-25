  <?php
class model_myidee extends CI_Model {

    public function __construct() {
        parent::__construct();
    }
    public function insertPost($content) {
        // вставляем в таблицу массив с данными, в качестве имени для каждого элемента массива указываем имя столбца куда нужно записать значение
        $email = $content['email'];
        $name = $content['name'];
        $review = $content['review'];
        $this->db->insert('myidee_table', array('email' => $email, 'name'  => $name, 'review' => $review));
        // возвращаем id последнего вставленного элемента
        return true;
    }
  	public function getPost($content) {
        // вставляем в таблицу массив с данными, в качестве имени для каждого элемента массива указываем имя столбца куда нужно записать значение
        $email = $content['email'];
        $name = $content['name'];
        $review = $content['review'];
        $this->db->insert('myidee_table', array('email' => $email, 'name'  => $name, 'review' => $review));
        // возвращаем id последнего вставленного элемента
    return true;
    }
}