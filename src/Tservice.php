<?php

namespace Aplum\Proto;

class Tservice {
	public function __construct(){

	}

	public function getDate(){
		return date('Y-m-d H:i:s');
	}

	/**
     * tag 1.1
     */
    public function getDatev2(){
        return date('Y-m-d H-i-s');
    }
}

