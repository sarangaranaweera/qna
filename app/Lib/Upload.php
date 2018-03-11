<?php
namespace App\Lib;

class Upload
{
	protected $media;
	protected $disk;

	public function __construct($media, $disk){
		$this->media = $media;
		$this->disk = $disk;
	}

	public static function uploadFile(){
		$file_name = time().$this->media->getClientOriginalExtension();
		$this->media->move($this->disk,$file_name);

		return $this->disk.$file_name;
	}
}