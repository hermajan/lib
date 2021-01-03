<?php
namespace Lib\Services;

/**
 * Getting images from Gravatar.
 * @see https://en.gravatar.com/
 */
class Gravatar {
	/** @var string */
	private $email;
	
	/**
	 * Size of gravatar image. Default is 80px by 80px.
	 * @var int
	 * @see https://en.gravatar.com/site/implement/images/#size
	 */
	private $size;
	
	/**
	 * Default image when an email address has no matching Gravatar image.
	 * @var string
	 * @see https://en.gravatar.com/site/implement/images/#default-image
	 */
	private $default;
	
	/**
	 * Forcing default image to load.
	 * @var bool
	 * @see https://en.gravatar.com/site/implement/images/#force-default
	 */
	private $forceDefault;
	
	/**
	 * Rating of images to display. Default is G.
	 * @var string
	 * @see https://en.gravatar.com/site/implement/images/#rating
	 */
	private $rating;
	
	/**
	 * Gravatar constructor.
	 * @param string $email for getting a Gravatar image.
	 */
	public function __construct(string $email) {
		$this->email = $email;
		$this->forceDefault = false;
	}
	
	public function getEmail(): string {
		return $this->email;
	}
	
	public function setEmail(string $email): Gravatar {
		$this->email = $email;
		return $this;
	}
	
	public function getSize(): int {
		return $this->size;
	}
	
	public function setSize(int $size): Gravatar {
		$this->size = $size;
		return $this;
	}
	
	public function getDefault(): string {
		return $this->default;
	}
	
	public function setDefault(string $default): Gravatar {
		$this->default = $default;
		return $this;
	}
	
	public function getRating(): string {
		return $this->rating;
	}
	
	public function setRating(string $rating): Gravatar {
		$this->rating = $rating;
		return $this;
	}
	
	public function useDefault(): Gravatar {
		if($this->forceDefault == false) {
			$this->forceDefault = true;
		} else {
			$this->forceDefault = false;
		}
		return $this;
	}
	
	/**
	 * Creates hash of an email.
	 * @return string MD5 hash of email.
	 * @see https://en.gravatar.com/site/implement/hash/
	 */
	public function createHash(): string {
		return md5(strtolower(trim($this->email)));
	}
	
	/**
	 * Creates URL of a gravatar image.
	 * @return string Image URL.
	 */
	public function createURL(): string {
		$url = "https://secure.gravatar.com/avatar/".$this->createHash();
		$url = $url."?s=".$this->size."&d=".$this->default."&r=".$this->rating;
		
		if($this->forceDefault == true) {
			$url = $url.'&f=y';
		}
		return $url;
	}
	
	/**
	 * Returns HTML IMG tag with a Gravatar image.
	 * @return string IMG tag.
	 */
	public function createImgTag(): string {
		return "<img src='".$this->createURL()."' width='".$this->size."' height='".$this->size."'/>";
	}
}
