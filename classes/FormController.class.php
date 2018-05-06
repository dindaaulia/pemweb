<?php
class FormController
{
    private $model;
    private $view;

    public function __construct()
    {
      $this->model = new FormModel();
      $this->view = new FormView();
    }
    public function setData($data)
    {
        $this->model->setData($data);
    }
    public function setFile($file)
    {
        $this->model->setFile($file);
    }
    public function viewResult()
    {
        $data = $this->model->getData();
        $file = $this->model->getFile();
        $this->view->viewResult($data, $file);
    }
    public function viewForm()
    {
        $this->view->viewForm();
    }
}
