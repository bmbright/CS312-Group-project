<?php
class Controller_PWHN extends Controller_Template
{

    public $yeet = "";

	public function action_index()
	{
        $data = array();
		$this->template->title= 'Home Page';
		$this->template->content = View::forge('pwhn/index',$data);
        $this->template->css = "pwhn.css";
        $this->template->yeet = "one?yeet=about";
	}

    public function action_east()
	{
        $data = array();
        $this->template->title= 'About';
        $this->template->css= 'pwhn.css';
        $this->template->content = View::forge('pwhn/about/index.php',$data);
        $this->template->yeet = "one?yeet=about";
	}

    public function action_colortable()
	{
        $data = array();
        $this->template->title= 'Color Table';
        $this->template->css= 'pwhn.css';
        $this->template->content = View::forge('pwhn/colortable/index.php',$data);
        $this->template->yeet = "one?yeet=colortable";
	}

<<<<<<< Updated upstream
    public function action_submit()
=======
        public function action_table()
	{
        $data = array();
        $this->template->title= 'Color Table';
        $this->template->css= 'pwhn.css';
        $this->template->content = View::forge('pwhn/table/colorTable.php',$data);
        $this->template->direction = "one?direction=table";
        $this->template->direction2 = "two?direction=table";
	}
    public function action_one()
>>>>>>> Stashed changes
	{
        $data = array();
        $this->template->title= 'Color Table';
        $this->template->css= 'pwhn.css';
        $this->template->content = View::forge('pwhn/colortable/colorTable.php',$data);
        $this->template->yeet = "colorTable?";
	}

}