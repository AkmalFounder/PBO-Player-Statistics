<?php

class Player {
    private $name,
           $rating,
           $age,
           $height,
           $weight,
           $country,
           $position,
           $dateOfBirth,
           $preferFoot,
           $weakFoot,
           $value;
    use BallSkill;
    use Passing;
    use Defence;
    use Shooting;
    use Physical;
    use GoalKeeper;
    //constructor
    public function __construct($name, $age, $position){
        $this->name = $name;
        $this->age = $age;
        $this->position = $position;
    }
    // set name
    public function setName($name){
        $this->name = $name;
        return $this;
    }
    // get name 
    public function getName(){
        return $this->name;
    }
    // set rating 
    public function countRating(){
        $position = $this->tellPosition();
        if ($position != "goalkeeper"){
            $this->rating = ($this->avgBallSkill() + $this->avgDefence() + $this->avgPassing() + $this->avgPhysical() + $this->avgShooting())/5;
        }
        return $this->rating;

    }
    //get rating 
    public function displayRating(){        
        $display = number_format($this->rating, 2, '.', '');
        echo "Rating : {$display}";
    }
    //set age
    public function setAge($age){
        $this->age = $age;
        return $this;

    }
    //get age
    public function getAge(){
        return $this->age;
    }
    // set height
    public function setHeight($height){
        $this->height = $height;
    }
    // get height
    public function getHeight(){
        return $this->height;
    }
    // set weight
    public function setWeight($weight){
        $this->weight = $weight;
        return $this;

    }
    // get  weight
    public function getWeight(){
        return $this->weight;
    }
    // set country
    public function setCountry($country){
        $this->country = $country;
    }
    //get country
    public function getCountry(){
        return $this->country;
    }
    // set position 
    public function setPosition($position){
        $this->position = $position;
        return $this;

    }
    // get position 
    public function getPosition(){
        return $this->position;
    }
    // telling position
    public function tellPosition(){
        $forward = array("winger", "striker", "second striker");
        $midfielder = array("center midfielder", "defence midfielder", "attack midfielder");
        $fullback = array("left back", "right back", "center back");
        $positionFix = "goalkeeper";
        for ($i=0;$i<3;$i++){
            if (strtolower($this->getPosition()) == $forward[$i]){
                $positionFix = "forward";
            }elseif (strtolower($this->getPosition()) == $midfielder[$i]){
                $positionFix = "midfielder";
            }elseif (strtolower($this->getPosition()) == $fullback[$i]){
                $positionFix = 'fullback';
            }
        }
        return $positionFix;
        
    }
    // set date of birth
    public function setDateOfBirth($dateOfBirth){
        $this->dateOfBirth = $dateOfBirth;
    }
    // get Date of birth
    public function getDateOfBirth(){
        return $this->dateOfBirth;
    }
    // set prefer foot
    public function setPreferFoot($preferFoot){
        $this->preferFoot = $preferFoot;
        return $this;

    }
    // get prefer foot
    public function getPreferFoot(){
        return $this->preferFoot;
    }
    // set weak foot 
    public function setWeakFoot($weakFoot){
        $this->weakFoot = $weakFoot;
        return $this;

    }
    // get weak foot
    public function getWeakFoot(){
        return $this->weakFoot;
    }
    // set value 
    public function setValue($value){
        $this->value = $value;
        return $this;

    }
    // get value 
    public function getValue(){
        return $this->value;
    }
    // info player
    public function ingfo(){
    	echo nl2br("Name     : {$this->getName()}
                    \nAge      : {$this->getAge()}
                    \nPosition : {$this->getPosition()}");
    }
}

class Club extends Player {
    private $league,
            $clubName,
            $contract;

    //constructor        
    public function __construct($name, $league, $clubName, $contract){
        $this->setName($name);
        $this->league = $league;
        $this->clubName = $clubName;
        $this->contract = $contract;
    }
    
    // set league
    public function setLeague($league){
        $this->league = $league;
        return $this;

    }
    //get league
    public function getLeague(){
        return $this->league;
    }
    //set contract
    public function setContract($contract){
        $this->contract = $contract;
        return $this;

    }
    // get contract
    public function getContract(){
        return $this->contract;
    }
    /**
     * Get the value of clubName
     */ 
    public function getClubName()
    {
        return $this->clubName;
    }

    /**
     * Set the value of clubName
     *
     * @return  self
     */ 
    public function setClubName($clubName)
    {
        $this->clubName = $clubName;

        return $this;
    }
    // display
    public function display(){
        echo nl2br("Name      : {$this->getName()}
                    \nLeague   : {$this->getLeague()}
                    \nClub     : {$this->getClubName()}
                    \nContract : {$this->getContract()}");
    }
}

trait BallSkill{
    private $ballControl,
            $dribbling;
    //construtor
    public function __construct($ballControl, $dribbling){
        $this->ballControl = $ballControl;
        $this->dribbling = $dribbling;
    }
    //set ball control
    public function setBallControl($ballControl){
        $this->ballControl = $ballControl;
        return $this;

    }
    //get ball control
    public function getBallControl(){
        return $this->ballControl;
    }
    //set dribbling
    public function setDribbling($dribbling){
        $this->dribbling = $dribbling;
        return $this;

    }
    //get dribbling
    public function getDribbling(){
        return $this->dribbling;
    }
    // avg ballSkill
    public function avgBallSkill(){
        $avg = ($this->ballControl + $this->dribbling)/2;
        return $avg;
    }
    //display
    public function displayBallSkill(){
        $display = $this->avgBallSkill();
        if (is_float($this->avgBallSkill())){
            $display = number_format($this->avgBallSkill(), 2, '.', '');
        }
        echo "Average of Ball Skill : {$display}";
    }
}

trait Passing{
    private $crossing,
            $shortPass,
            $longPass;
    
    //constructor
    public function __construct($crossing, $shortPass, $longPass){
        $this->crossing = $crossing;
        $this->shortPass = $shortPass;
        $this->longPass = $longPass;
    }
    // set crossing
    public function setCrossing($crossing){
        $this->crossing = $crossing;
        return $this;

    }
    // get crossing
    public function getCrossing(){
        return $this->crossing;
    }
    //set shortpass
    public function setShortPass($shortPass){
        $this->shortPass = $shortPass;
        return $this;

    }
    // get short pass
    public function getShortPass(){
        return $this->shortPass;
    }
    // set long pass
    public function setLongPass($longPass){
        $this->longPass = $longPass;
        return $this;

    }
    // get long pass
    public function getLongPass(){
        return $this->longPass;
    }
    // avg passing
    public function avgPassing(){
        $avg = ($this->crossing + $this->shortPass + $this->longPass)/3;
        return $avg;
    }
    //display
    public function displayPassing(){
        $display = $this->avgPassing();
        if (is_float($this->avgPassing())){
            $display = number_format($this->avgPassing(), 2, '.', '');
        }
        echo "Average of Defence : {$display}";
    }

}

trait Defence{
    private $marking,
            $tackle;
    
    //constructor
    public function __construct($marking, $tackle){
        $this->marking = $marking;
        $this->tackle = $tackle;
    }
    // set marking
    public function setMarking($marking)
    {
        $this->marking = $marking;

        return $this;
    }

    /**
     * Get the value of marking
     */ 
    public function getMarking()
    {
        return $this->marking;
    }
    

    /**
     * Get the value of tackle
     */ 
    public function getTackle()
    {
        return $this->tackle;
    }

    /**
     * Set the value of tackle
     *
     * @return  self
     */ 
    public function setTackle($tackle)
    {
        $this->tackle = $tackle;

        return $this;
    }
    // count average of Defence
    public function avgDefence(){
        $avg = ($this->marking + $this->tackle)/2;
        return $avg;
    }
    //display
    public function displayDefence(){
        $display = $this->avgDefence();
        if (is_float($this->avgDefence())){
            $display = number_format($this->avgDefence(), 2, '.', '');
        }
        echo "Average of Defence : {$display}";
    }
}

trait Shooting {
    private $heading,
            $finishing,
            $penalties;

    //construtor
    public function __construct($heading, $finishing, $penalties){
        $this->heading = $heading;
        $this->finishing = $finishing;
        $this->penalties = $penalties;
    }
    /**
     * Get the value of heading
     */ 
    public function getHeading()
    {
        return $this->heading;
    }
    /**
     * Set the value of heading
     *
     * @return  self
     */ 
    public function setHeading($heading)
    {
        $this->heading = $heading;

        return $this;
    }
    /**
     * Get the value of finishing
     */ 
    public function getFinishing()
    {
        return $this->finishing;
    }
    /**
     * Set the value of finishing
     *
     * @return  self
     */ 
    public function setFinishing($finishing)
    {
        $this->finishing = $finishing;

        return $this;
    }
    /**
     * Get the value of penalties
     */ 
    public function getPenalties()
    {
        return $this->penalties;
    }
    /**
     * Set the value of penalties
     *
     * @return  self
     */ 
    public function setPenalties($penalties)
    {
        $this->penalties = $penalties;

        return $this;
    }
    // count avg shooting
    public function avgShooting(){
        $avg = ($this->heading + $this->finishing + $this->penalties)/3;
        return $avg;
    }
    //display
    public function displayShooting(){
        $display = $this->avgShooting();
        if (is_float($this->avgShooting())){
            $display = number_format($this->avgShooting(), 2, '.', '');
        }
        echo "Average of Shooting : {$display}";
    }
}

trait Physical {
    private $acceleration,
            $stamina,
            $speed;
    //constructor
    public function __construct($acceleration, $stamina, $speed){
        $this->acceleration = $acceleration;
        $this->stamina = $stamina;
        $this->speed = $speed;
    }
    /**
     * Get the value of acceleration
     */ 
    public function getAcceleration()
    {
        return $this->acceleration;
    }
    /**
     * Set the value of acceleration
     *
     * @return  self
     */ 
    public function setAcceleration($acceleration)
    {
        $this->acceleration = $acceleration;

        return $this;
    }
    /**
     * Get the value of stamina
     */ 
    public function getStamina()
    {
        return $this->stamina;
    }
    /**
     * Set the value of stamina
     *
     * @return  self
     */ 
    public function setStamina($stamina)
    {
        $this->stamina = $stamina;

        return $this;
    }
    /**
     * Get the value of speed
     */ 
    public function getSpeed()
    {
        return $this->speed;
    }
    /**
     * Set the value of speed
     *
     * @return  self
     */ 
    public function setSpeed($speed)
    {
        $this->speed = $speed;

        return $this;
    }
    // count avg of physical
    public function avgPhysical(){
        $avg = ($this->acceleration + $this->stamina + $this->speed)/3;
        return $avg;
    }
    //display
    public function displayPhysical(){
        $display = $this->avgPhysical();
        if (is_float($this->avgPhysical())){
            $display = number_format($this->avgPhysical(), 2, '.', '');
        }
        echo "Average of Physical : {$display}";
    }
}

trait GoalKeeper{
    private $reflexes,
            $positioning,
            $handling;
    //constructor
    public function __construct($reflexes, $positioning, $handling){
        $this->reflexes = $reflexes;
        $this->positioning = $positioning;
        $this->handling = $handling;    
    }
    /**
     * Get the value of reflexes
     */ 
    public function getReflexes()
    {
        return $this->reflexes;
    }
    /**
     * Set the value of reflexes
     *
     * @return  self
     */ 
    public function setReflexes($reflexes)
    {
        $this->reflexes = $reflexes;

        return $this;
    }

    /**
     * Get the value of positioning
     */ 
    public function getPositioning()
    {
        return $this->positioning;
    }

    /**
     * Set the value of positioning
     *
     * @return  self
     */ 
    public function setPositioning($positioning)
    {
        $this->positioning = $positioning;

        return $this;
    }

    /**
     * Get the value of handling
     */ 
    public function getHandling()
    {
        return $this->handling;
    }

    /**
     * Set the value of handling
     *
     * @return  self
     */ 
    public function setHandling($handling)
    {
        $this->handling = $handling;

        return $this;
    }
    // count avg goalkeeper
    public function avgGoalKeeper(){
        $avg = ($this->reflexes + $this->positioning + $this->handling)/3;
        return $avg;
    }
    //display
    public function displayGoalKeeper(){
        $display = $this->avgGoalKeeper();
        if (is_float($this->avgGoalKeeper())){
            $display = number_format($this->avgGoalKeeper(), 2, '.', '');
        }
        echo "Average of Goalkeeper : {$display}";
    }
}

abstract class Position extends Player{
    public function infoPositon(){}
}

class GK extends Position {
    private $uniqSkill;

    //constructor
    public function __construct($uniqSkill){
        $this->uniqSkill = $uniqSkill;
    }
    /**
     * Get the value of uniqSkill
     */ 
    public function getUniqSkill()
    {
        return $this->uniqSkill;
    }

    /**
     * Set the value of uniqSkill
     *
     * @return  self
     */ 
    public function setUniqSkill($uniqSkill)
    {
        $this->uniqSkill = $uniqSkill;

        return $this;
    }
    public function infoPositon(){
        echo "Unique Skill : {$this->getUniqSkill()}";
    }

    
}

class FullBack extends Position {
    private $uniqSkill;

    //constructor
    public function __construct($uniqSkill){
        $this->uniqSkill = $uniqSkill;
    }
    /**
     * Get the value of uniqSkill
     */ 
    public function getUniqSkill()
    {
        return $this->uniqSkill;
    }

    /**
     * Set the value of uniqSkill
     *
     * @return  self
     */ 
    public function setUniqSkill($uniqSkill)
    {
        $this->uniqSkill = $uniqSkill;

        return $this;
    }
    public function infoPositon(){
        echo "Unique Skill : {$this->getUniqSkill()}";
    }
}

class Midfielder extends Position {
    private $uniqSkill;

    //constructor
    public function __construct($uniqSkill){
        $this->uniqSkill = $uniqSkill;
    }
    /**
     * Get the value of uniqSkill
     */ 
    public function getUniqSkill()
    {
        return $this->uniqSkill;
    }

    /**
     * Set the value of uniqSkill
     *
     * @return  self
     */ 
    public function setUniqSkill($uniqSkill)
    {
        $this->uniqSkill = $uniqSkill;

        return $this;
    }
    public function infoPositon(){
        echo "Unique Skill : {$this->getUniqSkill()}";
    }
}

class Forward extends Position {
    private $uniqSkill;

    //constructor
    public function __construct($uniqSkill){
        $this->uniqSkill = $uniqSkill;
    }
    /**
     * Get the value of uniqSkill
     */ 
    public function getUniqSkill()
    {
        return $this->uniqSkill;
    }

    /**
     * Set the value of uniqSkill
     *
     * @return  self
     */ 
    public function setUniqSkill($uniqSkill)
    {
        $this->uniqSkill = $uniqSkill;

        return $this;
    }
    public function infoPositon(){
        echo "Unique Skill : {$this->getUniqSkill()}";
    }
}




//MAIN PROGRAM TEST FOR EVERY CLASS 
$didit = new Player("Didit", "21", "winger");
$didit->ingfo();
$didit->setCountry("Indonesia");
echo "<br>";
echo "<br>";
$club = new Club("Didit", "Preamere League", "Liverpool FC", "5 years");
$club->display();
echo "<br>";
echo "<br>";
$didit->setBallControl(90);
$didit->setDribbling(88);
$didit->displayBallSkill();
echo "<br>";
echo "<br>";
$didit->setCrossing(85);
$didit->setShortPass(81);
$didit->setLongPass(83);
$didit->displayPassing();
echo "<br>";
echo "<br>";
$didit->setMarking(77);
$didit->setTackle(79);
$didit->displayDefence();
echo "<br>";
echo "<br>";
$didit->setHeading(88);
$didit->setFinishing(90);
$didit->setPenalties(85);
$didit->displayShooting();
echo "<br>";
echo "<br>";
$didit->setAcceleration(83);
$didit->setStamina(87);
$didit->setSpeed(85);
$didit->displayPhysical();
echo "<br>";
echo "<br>";
$didit->setReflexes(55);
$didit->setPositioning(60);
$didit->getHandling(45);
$didit->displayGoalKeeper();
echo "<br>";
echo "<br>";
$uniqSkill = new Forward("Sombrero");
$uniqSkill->infoPositon();
echo "<br>";
echo "<br>";
$didit->countRating();
$didit->displayRating();
echo "<br>";
echo "<br>";

?>












