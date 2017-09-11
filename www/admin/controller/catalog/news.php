<?php
use Monolog\Logger;


/**
 * Class ControllerCatalogNews
 * @property ModelCatalogNews $model_catalog_news;
 */
class ControllerCatalogNews extends Controller {

    public function index() {

        $this->load->language('catalog/news');
        $this->load->model('catalog/news');

        $this->document->setTitle($this->language->get('heading_title'));
        // регистрируем модуль
        $this->load->model('setting/setting');
        if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
            $this->model_setting_setting->editSetting('comments', $this->request->post);
            $this->session->data['success'] = $this->language->get('text_success');
            $data['success'] = $this->session->data['success'] ;
        }
        $model = new \core\base\Model();
        debug($model);
        $this->getList();
    }



    public function getList(){

        $data['news'] = $this->model_catalog_news->getList([]);
        //breadcrumbs
        $data['breadcrumbs'] = array();
        $data['breadcrumbs'][] = array(
            'href'      => $this->url->link('common/dashboard', 'token=' . $this->session->data['token'], true),
            'text'      => $this->language->get('text_home'),
            'separator' => false
        );
        $data['breadcrumbs'][] = array(
            'href'      => $this->url->link('catalog/news', 'token=' . $this->session->data['token'], true),
            'text'      => $this->language->get('heading_title'),
            'separator' => ' :: '
        );
        $data['heading_title'] = $this->language->get('heading_title');

        //buttons
        $data['add'] = $this->url->link('catalog/news/add', 'token=' . $this->session->data['token'], true);
        $data['delete'] = $this->url->link('catalog/news/delete', 'token=' . $this->session->data['token'], true);
        $data['setting'] = $this->url->link('catalog/news/setting', 'token=' . $this->session->data['token'], true);

        $data['header'] = $this->load->controller('common/header');
        $data['column_left'] = $this->load->controller('common/column_left');
        $data['footer'] = $this->load->controller('common/footer');

        $this->response->setOutput($this->load->view('catalog/news_list', $data));
    }

}