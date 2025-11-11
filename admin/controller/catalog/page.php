<?php
// 🟩 This line tells PHP which "folder area" (namespace) this file belongs to inside OpenCart.
// It’s like giving your file an address so PHP can find it.
// Example: Opencart → Admin → Controller → Catalog
namespace Opencart\Admin\Controller\Catalog;

// 🟦 (CHILD CLASS)
// We are creating our own class named "Page".
// This Page class is a CHILD of another class called Controller (the PARENT).
// "extends" means "get all features from the parent class and add my own".
// So this child class gets all useful functions from its parent Controller class.
class Page extends \Opencart\System\Engine\Controller {

    // 🟨 (CHILD FUNCTION)
    // This function will run when someone opens this route:
    // index.php?route=catalog/page
    // The function name "index" is special — OpenCart automatically calls it first.
    public function index() {

        // 🟧 (CHILD creates its own data)
        // Here we make an array called $data.
        // Think of an array like a box that stores key-value pairs.
        // Example:
        //   label (key): 'message'
        //   value: 'Hello World'
        //
        // We will send this data to our view (HTML page).
        $data['message'] = 'Hello World';

        // 🟨 (CHILD calls PARENT functions)
        // The child class (Page) is now using a function that belongs to its parent Controller.
        // $this->load->view('catalog/page', $data)
        //   → loads the Twig file located at: admin/view/template/catalog/page.twig
        //   → passes our $data array to that file.
        //
        // Inside the Twig file, {{ message }} will show the value from $data['message'].
        //
        // Then, $this->response->setOutput(...) (another parent function)
        // tells OpenCart to send the final HTML output to the browser.
        $this->response->setOutput($this->load->view('catalog/page', $data));
    }
}


// PARENT CLASS: \Opencart\System\Engine\Controller
//         ↑
//         |
// CHILD CLASS: Page (your file)
//         |
//         ├── Uses parent's tools ($this->load, $this->response)
//         ├── Creates $data['message']
//         └── Sends it to Twig (view file.)
