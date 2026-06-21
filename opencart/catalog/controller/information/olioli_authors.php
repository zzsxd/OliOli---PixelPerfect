<?php
class ControllerInformationOlioliAuthors extends Controller {
    public function index() {
        $this->load->language('information/olioli_authors');

        $data['heading_title'] = $this->language->get('heading_title');
        $data['asset_base'] = 'catalog/view/theme/default/stylesheet/olioli-landing/';
        $data['stylesheet_href'] = $data['asset_base'] . 'styles.css?v=20260619-pp6';

        $this->document->setTitle($data['heading_title']);
        $this->response->setOutput($this->load->view('information/olioli_authors', $data));
    }
}
