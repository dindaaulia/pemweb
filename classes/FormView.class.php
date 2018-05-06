<?php

class FormView
{
    public function viewResult($data, $file)
    {
        include "hasil.php";
    }
		public function viewForm()
		{
			include 'FormInput.php';
		}
}
