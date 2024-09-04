<?php
class App extends CI_Controller {
	function gmsOptions()
    {
		$this->load->model('admin_model');
        $optionsres = $this->admin_model->loadOptions();
        foreach ($optionsres as $row)
        {
            $gmsopt[$row['opt_key']] = $row['opt_value'];
        }
        return $gmsopt;
	}
}