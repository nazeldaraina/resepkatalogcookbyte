<?php

namespace App\Controllers;

class ControllerResepMakanan extends BaseController
{
    protected $about;
    protected $ayamblue;
    protected $beef;
    protected $index;
    protected $potato;

    public function __construct()
    {
        $this->about = 'about';
        $this->ayamblue = 'ayamblue';
        $this->beef = 'beef';
        $this->index = 'index';
        $this->potato = 'potato';
    }

    public function about()
    {
        try {
            return view($this->about);
        } catch (\Exception $e) {
            // Handle exception
            echo "Error: " . $e->getMessage();
        }
    }

    public function ayamblue()
    {
        try {
            return view($this->ayamblue);
        } catch (\Exception $e) {
            // Handle exception
            echo "Error: " . $e->getMessage();
        }
    }

    public function beef()
    {
        try {
            return view($this->beef);
        } catch (\Exception $e) {
            // Handle exception
            echo "Error: " . $e->getMessage();
        }
    }

    public function index()
    {
        try {
            return view($this->index);
        } catch (\Exception $e) {
            // Handle exception
            echo "Error: " . $e->getMessage();
        }
    }

    public function potato()
    {
        try {
            return view($this->potato);
        } catch (\Exception $e) {
            // Handle exception
            echo "Error: " . $e->getMessage();
        }
    }
}