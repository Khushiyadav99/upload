<?php
class ControllerCatalogPage extends Controller {
    public function index() {
        // Prepare data for the view
        $data['message'] = 'Hello World';

        // Load the view template and send output
        $this->response->setOutput($this->load->view('catalog/page.tpl', $data));
    }
}