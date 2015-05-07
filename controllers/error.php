<?php
class Error extends BaseController {

    //bad URL request error
    protected function badurl()
    {
        $ErrorModel = new ErrorModel();
        $this->ReturnView($ErrorModel->badurl(), true);
    }
}
?>