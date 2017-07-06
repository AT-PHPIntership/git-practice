<?php
class CodingConvention
{
	private $openTime = '10:00';

	private $closeTime = '22:00';

	private $isOpen = false;

	public function startService(){
		$this->isOpen = true;
	}

	public function stopService(){
        $this->isOpen = false;
    }
}