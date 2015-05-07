<?php
class ErrorModel extends BaseModel
{
    //data passed to the bad URL error view
    public function badurl()
    {
        $this->viewModel->add("pageTitle","Error - Bad URL");
        return $this->viewModel;
    }
}
?>