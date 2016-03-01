<?php

use Behat\Behat\Context\SnippetAcceptingContext;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;

require_once("src/Adder.php");
require_once("vendor/phpunit/phpunit/src/Framework/Assert/Functions.php");

class ApiContext implements SnippetAcceptingContext
{

    /* @var $Adder Adder */
    private $Adder;

    /**
     * @Given /^I have the number (\d+) and the number (\d+)$/
     */
    public function iHaveTheNumberAndTheNumber($a, $b)
    {
        $this->Adder = new Adder($a, $b);
    }

    /**
     * @When /^I add them together$/
     */
    public function iAddThemTogether()
    {
        $this->Adder->add();
    }

    /**
     * @Then /^I should get (\d+)$/
     */
    public function iShouldGet($sum)
    {
        if ($this->Adder->sum != $sum) {
            throw new Exception("Actual sum: " . $this->Adder->sum);
        }
        $this->Adder->display();
    }

    /**
     * @Given /^I have a third number of (\d+)$/
     */
    public function iHaveAThirdNumberOf($arg1)
    {
        $this->Adder->add();
        $sum = $this->Adder->display();
        $this->Adder = new Adder($arg1, $sum);
    }
}