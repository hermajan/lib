<?php
namespace Lib;

/**
 * Gravatar
 * @see https://en.gravatar.com/
 */
class Gravatar {
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
     * @param string Email for getting a gravatar image.
     */
    public function __construct($email) {
        $this->email=$email;
        $this->forceDefault=FALSE;
    }
    
    public function getEmail() { return $this->email; }
    public function setEmail($email) { $this->email=$email; }
    public function getSize() { return $this->size; }
    public function setSize($size) { $this->size=$size; }
    public function getDefault() { return $this->default; }
    public function setDefault($default) { $this->default=$default; }
    public function getRating() { return $this->rating; }
    public function setRating($rating) { $this->rating=$rating; }
    
    public function useDefault() { 
      if($this->forceDefault==FALSE) { $this->forceDefault=TRUE; }
      else { $this->forceDefault=FALSE; }
    }
    
    /**
     * Creates hash of an email.
     * @return string MD5 hash of email.
     * @see https://en.gravatar.com/site/implement/hash/
     */
    public function createHash() { return md5(strtolower(trim($this->email))); }
    
    /**
     * Creates URL of a gravatar image.
     * @return string Image URL.
     */
    public function createURL() {
        $url="https://secure.gravatar.com/avatar/".$this->createHash();
        $url=$url."?s=".$this->size."&d=".$this->default."&r=".$this->rating;
        
        if($this->forceDefault==TRUE) { $url=$url.'&f=y'; }
        return $url;
    }
    
    /**
     * Returns HTML IMG tag with a gravatar image.
     * @return string IMG tag.
     */
    public function createImgTag() {
        return "<img src='".$this->createURL()."' width='".$this->size."' height='".$this->size."'/>";
    } 
}
?>
