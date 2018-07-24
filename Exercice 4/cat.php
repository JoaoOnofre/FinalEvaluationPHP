<!-- 


You work for the SPA (Society for the Protection of Animals). As part of the redesign of the
site, you must create a class Cat () that will have the following private properties:

- First name (string of 3 to 20 characters)
- Age (int)
- Color (string of 3 to 10 characters)
- Sex (string: male or female)
- Race (string of 3 to 20 characters)

Make getters/setters to validate the data types above and the constructor to instantiate
the class.

Add a getInfo() method to return all of the properties as an array.

In a new file, instantiate the class so that you can display 3 different cats and display the
result using the previously created getInfo() method.

-->

<?php 

class Chat
{
	private $firstname;

	private $age;

	private $color;

	private $sex;

	private $race;

	public function __construct($firstname, $age, $color, $sex, $race)
	{
		$this->firstname = $firstname;
		$this->age = $age;
		$this->color = $color;
		$this->sex = $sex;
		$this->race = $race;

	}

	// Setter For firstname:
	private function setFirstname($firstname){

		if($firstname > 3 && $firstname < 20) {
			$this->firstname = $firstname;
			return $this;
		} else {
			echo "Your Firstname must have between 3 and 20 letters";
		}
	}
	// Setter for Age:
	private function setAge($age){
		if(is_int($age)) {
			$this->age = $age;
			return $this;
		} else {
			echo "Thank you for tipping a number";
		}
	}
	// Setter for Color:
	private function setColor($color){
		if($color > 3 && $firstname < 10) {
			$this->color = $color;
			return $this;
		} else {
			echo "Your color must have between 3 and 20 characteres";
		}
	}
	// Setter for Sex:
	private function setSex($sex){
		if($sex == 'male' || $sex == 'female') {
			$this->sex = $sex;
			return $this;
		} else {
			echo "Choose between Male or Female.";
		}
	}
	
	 
	private function setRace($race){
		if($race > 3 && $race < 20) {
			$this->race = $race;
			return $this;
		} else {
			echo "Must have between 3 and 20 characteres.";
		}
	}

	public function getFirstname(){
		return $this->firstname;
	}

	public function getAge(){
		return $this->age;
	}

	public function getColor(){
		return $this->color;
	}

	public function getSex(){
		return $this->sex;
	}

	public function getRace(){
		return $this->race;
	}

	
	public function getInfos(){

		 $infos = array(
			"The name of the cat is : ".$this->getFirstname().'.',
			"his age : ".$this->getAge().'.',
			"his color is : ".$this->getColor().'.',
			"his sex is : ".$this->getSex().'.',
			"his race is : ".$this->getRace().'.<br>'
		);
		return $infos;
	}

}


?>