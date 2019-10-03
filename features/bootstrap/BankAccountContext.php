<?php

use Behat\Behat\Context\Context;
use Ekkinox\BDD\BankAccount;
use PHPUnit\Framework\Assert;

class BankAccountContext implements Context
{
    /** @var BankAccount  */
    private $bankAccount;

    /**
     * Initializes context.
     *
     * Every scenario gets its own context instance.
     * You can also pass arbitrary arguments to the
     * context constructor through behat.yml.
     */
    public function __construct()
    {
        $this->bankAccount = new BankAccount();
    }

    /**
     * @Given I have a bank account with a balance of :amount
     */
    public function iHaveABankAccountWithABalanceOf($amount)
    {
        $this->bankAccount->setBalance($amount);
    }

    /**
     * @Then the bank account balance should be :amount
     */
    public function theBankAccountBalanceShouldBe($amount)
    {
        Assert::assertEquals($amount, $this->bankAccount->getBalance());
    }

    /**
     * @When I make a deposit of :amount
     */
    public function iMakeADepositOf($amount)
    {
        $this->bankAccount->makeDeposit($amount);
    }

    /**
     * @When I make a withdraw of :amount
     */
    public function iMakeAWithdrawOf($amount)
    {
        $this->bankAccount->makeWithdraw($amount);
    }
}
