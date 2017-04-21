<?php
class MyController extends CI_Controller {
    public function __construct ( ) {
        parent::__construct ( );
        $this->load->library ( 'masterpage' );
    }

    public function index ( ) {
        $this->masterpage->setMasterPage ( 'masterpage_default' );
        // content_index is the view file to use.
        // content is the tag in the masterpage file we want to replace.
        $this->masterpage->addContentPage ( 'content_index', 'content' );

        // Show the masterpage to the world!
        $this->masterpage->show ( );
    }
}
?>