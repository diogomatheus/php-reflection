<?php
include_once('interfaces/Electronic.php');

/**
* Television Class
*
*/
class Television implements Electronic {

    private $currentChannel;

    private $manufacturer;
    private $displayType;

    public function getManufacturer() {
        return $this->manufacturer;
    }

    public function setManufacturer($manufacturer) {
        $this->manufacturer = $manufacturer;
    }

    public function getDisplayType() {
        return $this->displayType;
    }

    public function setDisplayType($displayType) {
        $this->displayType = $displayType;
    }

    /**
    * changeChannel Method
    *
    * @param $channel
    * @desc Change the television channel
    */
    public function changeChannel($channel){
        $this->currentChannel = $channel;
    }

    public function channelInfo() {
        echo "You are watching channel {$this->currentChannel}.";
    }

    public function turnOn() {
        echo 'Turning on the television.';
    }

    public function turnOff() {
        echo 'Turning off the television.';
    }

}
?>